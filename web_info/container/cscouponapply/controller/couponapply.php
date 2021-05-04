<?php
class Couponapply extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->script=$this->script();
		Session::init();
        if(!Session::get('logedin')){
            header('location: '. URL .'adminlogin');
            exit;
        }
    }

    function init(){
        Session::set('coupontoken',uniqid());
        $this->view->token=Session::get('coupontoken');     
		$this->view->render("templateadmin","abr/applycoupon_view");
    }
    function getcustomer($cin=""){
        if($cin==""){
            echo json_encode(array('message'=>'No CIN to search!','result'=>'error'));
            exit;
        }

        $cindt = $this->model->cusdt($cin);

        if(count($cindt)>0){
            echo json_encode(array('message'=>$cindt[0]['cusname'],'result'=>'success'));
        }else{
            echo json_encode(array('message'=>'CIN is not registered!','result'=>'error'));
        }
    }
    function loadodc(){
        
        try{
            
            echo json_encode(array('message'=>$this->model->loadodc(),'result'=>'success'));
        }catch(Exception $e){
            $res = unserialize($e->getMessage()); 
		
		    echo json_encode(array('message'=>$res['field']." ".$res['response'],'result'=>'fielderror'));
        }
    }
    function getcoupon($coupon=""){
       //Logdebug::appendlog($coupon);
        if($coupon==""){
            echo json_encode(array('message'=>'No Coupon to search!','result'=>'error'));
            exit;
        }

        $coupondt = $this->model->getcoupondt($coupon);

        if(count($coupondt)>0){
            echo json_encode(array('message'=>$coupondt[0]['bv'],'result'=>'success'));
        }else{
            echo json_encode(array('message'=>'Coupon is not registered!','result'=>'error'));
        }
    }
    function save(){
        
        $token = filter_var($_POST['token'], FILTER_SANITIZE_STRING);
        if(Session::get('coupontoken')!=$token){
			echo json_encode(array('result'=>'success','message'=>'Token mismatch!'));
			exit;
		}
        $odc = filter_var($_POST['odc'], FILTER_SANITIZE_STRING);
        $refrin = filter_var($_POST['refrin'], FILTER_SANITIZE_STRING);
        $cin = filter_var($_POST['cin'], FILTER_SANITIZE_STRING);
        $coupon = filter_var($_POST['coupon'], FILTER_SANITIZE_STRING);
        $sl = filter_var($_POST['sl'], FILTER_SANITIZE_STRING);
        
        $rindt = $this->model->getrindt($refrin);
        $cindt = $this->model->getcindt($cin);
        $odcdt = $this->model->getodcdt($odc);
        $coupondt = $this->model->getcoupondt($coupon);
        $couponused = $this->model->couponused($coupon);
       // Logdebug::appendlog(print_r($coupondt, true)); 
       if(count($couponused)>0){
            echo json_encode(array('message'=>'Coupon already used!','result'=>'error'));
            exit;
        }
        if(count($coupondt)==0){
            echo json_encode(array('message'=>'Coupon Information not found!','result'=>'error'));
            exit;
        }

        if($coupondt[0]['xpayref']!=$sl){
            echo json_encode(array('message'=>'Not a valid coupon!','result'=>'error'));
            exit;
        }

        if(count($rindt)==0){
            echo json_encode(array('message'=>'Ref. RIN Information not found!','result'=>'error'));
            exit;
        }
        if(count($cindt)==0){
            echo json_encode(array('message'=>'CIN Information not found!','result'=>'error'));
            exit;
        }
        if(count($odcdt)==0){
            echo json_encode(array('message'=>'ODC Information not found!','result'=>'error'));
            exit;
        }
        
        //Logdebug::appendlog(print_r($_POST, true)); die;
        $stno = $this->model->getstno()[0]['stno'];
            $data=array(
                'xodc' => $odc,
                'xrefrin' => $refrin, 
                'cin'=>$cin,
                'xcoupon'=> $coupon,
                'zemail'=>Session::get('suser'),
                'xtxnno'=>$sl,
                'xbv'=>$coupondt[0]['bv'],
                'stno'=>$stno
            );
        $success=0;
        //Logdebug::appendlog(print_r($data, true));
        try{
            $success = $this->model->create('couponapply', $data);

        }catch(Exception $e){
            echo json_encode(array('message'=>$e->getMessage(),'result'=>'error'));
            exit;
        }
        
        if($success>0){
            $date = date('Y-m-d');
            $data = array(
                'bizid'=>100,
                'xcus' => $cin,
                'point' => $coupondt[0]['bv'],
                'xdocnum'=>$coupon,
                'xdoctype'=>'Dotademy Sales',
                'xsign'=>1,
                'xdate'=>$date,
                'stno'=>$stno,
                'zemail'=>Session::get('suser')
            );
            $success = $this->model->create('mlmbv', $data);

            $cols = "bizid,zemail,xdate,stno,xrdin,xcom,xcomtype,xdocnum,xdoctype";

            $odccom = floatval($coupondt[0]['bv'])*.85;

            $arccom = floatval($coupondt[0]['bv'])*.55;

            $spot = floatval($coupondt[0]['bv'])*1;

            $vals = " (100,'".Session::get('suser')."','".$date."','".$stno."','".$odcdt[0]['odcrin']."',$odccom,'Dotademy ODC Promotion','".$coupon."','Dotademy ODC Promotion'),";
            $vals .= " (100,'".Session::get('suser')."','".$date."','".$stno."','".$odcdt[0]['arcrin']."',$arccom,'Dotademy ARC Promotion','".$coupon."','Dotademy ARC Promotion'),";
            $vals .= " (100,'".Session::get('suser')."','".$date."','".$stno."','".$refrin."',$spot,'Dotademy Spot Promotion','".$coupon."','Dotademy Spot Promotion')";

            $invoicedt = $this->model->createst("expresstotrep",$cols, $vals);
            $updatetemp = $this->model->updatetemp("update coupon set zactive=0 where xcoupon='".$coupon."'");
            echo json_encode(array('message'=>'Coupon applied successfully!','result'=>'error'));
            
        }else{
            echo json_encode(array('message'=>'Failed!','result'=>'error'));
            
        }

    }   
    function script(){
        return "<script>
        
        
        
        $('#mrin').on('blur', function(){
            var rin = $('#mrin').val();
            
            $.ajax({
                
                url:\"".URL."pos/getrefrin/\"+rin, 
                type : \"GET\",                                  				
                //data : {}, 
                dataType: 'json',
                beforeSend:function(){	
                    loaderon();   
                    
                },
                success : function(result) {
                    loaderoff();
                   $('#rinname').html(result['message'])
                },error: function(xhr, resp, text) {
                    loaderoff();
                    
                }
            })
        })

        $('#coupon').on('blur', function(){
            
            var coupon = $('#coupon').val();
            
            $.ajax({
                
                url:\"".URL."couponapply/getcoupon/\"+coupon, 
                type : \"GET\",                                  				
                //data : {}, 
                dataType: 'json',
                beforeSend:function(){	
                    loaderon();   
                    
                },
                success : function(result) {
                    console.log(result)
                    loaderoff();
                   $('#couponbv').html(result['message'])
                },error: function(xhr, resp, text) {
                    loaderoff();
                    
                }
            })
        })

        $('#mcin').on('blur', function(){
            var cin = $('#mcin').val();
            
            $.ajax({
                
                url:\"".URL."getotp/getcustomer/\"+cin, 
                type : \"GET\",                                  				
                //data : {}, 
                dataType: 'json',
                beforeSend:function(){	
                    loaderon();   
                    
                },
                success : function(result) {
                    loaderoff();
                   $('#cinname').html(result['message'])
                },error: function(xhr, resp, text) {
                    loaderoff();
                    
                }
            })
        })

        $(document).ready(function(){
            loadodc()
        })
       
        
        function loadodc(){
			$.ajax({
				
				url:\"".URL."couponapply/loadodc\", 
				type : \"GET\",                                  				
				 
				dataType: 'json',                
				beforeSend:function(){	
					loaderon();   
				},
				success : function(result) {
					
					loaderoff();
					if(result['result']=='success'){
						$.each(result['message'],function(key,val){
							$('#odclist').append('<option value=\"'+val.odc+'\">'+val.odc+'</option>');			
					   })
					}
					
				},error: function(xhr, resp, text) {
					loaderoff();
					
					
				}
			})
		}

        $('#apply').on('click', function(){
            $('#resultalert').addClass('alert-dark');
            $('#resultalert').removeClass('alert-primary');
            $('#resultalert').removeClass('alert-danger');
					
            $.ajax({
                
                url:\"".URL."couponapply/save\", 
                type : \"POST\",                                  				
                data : { odc: $('#odclist').val(),refrin: $('#mrin').val(),cin: $('#mcin').val(),coupon: $('#coupon').val(), sl: $('#couponsl').val(),  token: $('#token').val() },                   
                beforeSend:function(){	
                    $('#resultalert').addClass('alert-dark');
                        $('#resultalert').removeClass('alert-primary');
                        $('#resultalert').removeClass('alert-danger');
                    loaderon();   
                },
                success : function(result) {
                    
                    loaderoff();
                    //console.log(result)
                    const resultobj = JSON.parse(result);
                    
                    if(resultobj['result']=='success'){
                        $('#resultalert').html(resultobj['message'])
                        $('#resultalert').removeClass('alert-dark');
                        $('#resultalert').addClass('alert-primary');
                        $('#resultalert').removeClass('alert-danger');
                    }else{
                        $('#resultalert').html(resultobj['message'])
                        $('#resultalert').removeClass('alert-dark');
                        $('#resultalert').removeClass('alert-primary');
                        $('#resultalert').addClass('alert-danger');
                    }
                    

                },error: function(xhr, resp, text) {
                    loaderoff();
                    
                    
                }
            })
        })

        </script>";
    }

}