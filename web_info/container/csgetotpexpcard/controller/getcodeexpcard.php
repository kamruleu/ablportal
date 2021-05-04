<?php
class Getcodeexpcard extends Controller{

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
        
		$this->view->render("templateadmin","abr/getotpexpcard_view");
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
    function sendotp(){
        $type = filter_var($_POST['confcodetype'], FILTER_SANITIZE_STRING);
        $rin = filter_var($_POST['rin'], FILTER_SANITIZE_STRING);
        $trxid = filter_var($_POST['trxid'], FILTER_SANITIZE_STRING);
        
        
        $rindt = $this->model->getrindt($rin); 
        $otp = rand(10000, 100000);
        if(count($rin)==0){
            echo json_encode(array('message'=>'No RIN found!','result'=>'error'));
            exit;
        }
        $data=array();

        $messege = "আপনার ডিসবার্সমেন্ট একাউন্ট  নং পরিবর্তনের  অনুরোধ এসেছে , পরিবর্তন করতে চাইলে কনফার্মেশন কোড ".$otp." এবং টি এক্স এন নং  ব্যবহার করুন । আমারবাজার লিমিটেড ।";

        
        if($type=='Disbursement Account Update'){
            $data=array(
                'xrdin' => $rin,
                'xmobile' => $rindt[0]['mobile'], 
                'xotp'=>$otp,
                'xdate'=> date('Y-m-d'),
                'zemail'=>Session::get('suser'),
                'xtxnno'=>$trxid,
                'xbank'=>'Nagad',
                'xdoctype'=>$type
            );
        }
        //Logdebug::appendlog(print_r($data, true));
        $success = $this->model->create('crmcharge', $data);

        $message = "আপনার ডিসবার্সমেন্ট একাউন্ট  নং পরিবর্তনের  অনুরোধ এসেছে , পরিবর্তন করতে চাইলে কনফার্মেশন কোড ".$otp." এবং টি এক্স এন নং ".$success." ব্যবহার করুন ।";
        
        if($success>0){
            $sendsms = new Sendsms();
            if(strlen($rindt[0]['mobile'])==11)
                $res = $sendsms->send_single_sms($message, "88".$rindt[0]['mobile']);
            else
                $res = $sendsms->send_single_sms($message, $rindt[0]['mobile']);
            //Logdebug::appendlog($res);
            echo json_encode(array('message'=>'Confirmation Code sent!','result'=>'error'));
            
        }else{
            echo json_encode(array('message'=>'Failed!','result'=>'error'));
            
        }

    }   
    function script(){
        return "<script>
        
        $('#reqamt').html('0')
        var idtype=$('#idtype').val();
       
        $('#cindiv').hide();
        
       
        
        $('#idtype').on('change',function(){
            if($('#idtype').val()=='New Retailer'){
                $('#reqamt').html('500');
                $('#cindiv').show();
                $('#rindiv').hide();
            }else if($('#idtype').val()=='Existing Retailer'){
                $('#reqamt').html('500');
                $('#cindiv').hide();
                $('#rindiv').show();
            }else{
                $('#reqamt').html('200');
                $('#cindiv').hide();
                $('#rindiv').show();
            }
        })
        
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

        $('#checkout').on('click', function(){
            var valid = 0;
            var message = '' 
            var custype='Retailer'
            idtype=$('#idtype').val();
            var ucustomer = $('#mrin').val();
            if(idtype=='New Retailer'){
                custype='Customer';
                ucustomer = $('#mcin').val();
            }

            if(ucustomer==''){
                valid = 1;
                var message = 'RIN not  found'
            }
            if($('#confcodetype').val()=='BIN Transfer'){
                if(isNaN($('#bin').val())){
                    valid = 1;
                    var message = 'Not a valid BIN'
                }
                
                if($('#bin').val()==''){
                    valid = 1;
                    var message = 'BIN not found'
                }
                
            }
           

            
             var msg = 'এক্সপ্রেস কার্ড আবেদন এর অনুরোধ এসেছে, আবেদন করতে চাইলে';
                
            
            if(valid==0){
            
            $.ajax({
               
                
                url:\"https://portal2.amarbazarltd.com/payment/paynow/cscall\",  
                type : \"POST\",                                  				
                data : {customer:ucustomer,refrin:\"".Session::get('suser')."\",company:$('#bin').val(),outlet:idtype,doc:'99',doctype:'EXPRESS Card Payment',odcid:'',cusname:'EXPRESS Card Payment',add1:msg,add2:msg,city:'Dhaka',district: 'Dhaka',postal:1209,callbackurl:\"".URL."getotp\",mobile:$('#mobile').val(),customertype:custype,apikey:\"36cfce7372fc99723569236e883dc4db39669cdf116a57d6d126e05fdea7be3c\",itemdt:[{itemcode:'ABL-CS-0001',itemdesc:'NA',rate:'25',qty:'1',bv:'0'}]}, 
                dataType: 'json',
                beforeSend:function(){	
                    
                },
                success : function(result) {
                    const resultobj = result;  
                            if(resultobj['result']=='success')
                                location.href=\"https://portal2.amarbazarltd.com/payment/paynow/paygateway/\"+resultobj['message'];
                    
                },error: function(xhr, resp, text) {
                   
                }
            })
            
        }else{
            $('#resultalert').removeClass('bg-info');
            $('#resultalert').addClass('bg-danger');
            $('#resultalert').html('<strong>'+message+'</strong>')
        }
    })

        </script>";
    }

}