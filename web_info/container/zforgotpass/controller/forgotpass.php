<?php
class Forgotpass extends Controller{
    function __construct(){
        parent::__construct();

        $this->view->script=$this->script();
    }

    function init(){
        
        $this->view->render("rawtemplate","abr/forgotpass_view");
    }

    function strclean($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
     
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     }

    function sendpass(){
        if(!isset($_POST['rin']) && isset($_POST['mobile'])){
            echo "Please enter RIN & Mobile!";
            exit;
        }
        
        if($_POST['rin']==""){
            echo "RIN can not be empty!";
            exit;
        }

        if($_POST['mobile']==""){
            echo "Mobile can not be empty!";
            exit;
        }
        $rin = str_replace(' ','',$this->strclean(filter_var($_POST['rin'], FILTER_SANITIZE_STRING)));
        $mobile = str_replace(' ','',$this->strclean(filter_var($_POST['mobile'], FILTER_SANITIZE_STRING)));

        $rindt = $this->model->checkmobile($rin, $mobile);
        if(count($rindt)==0){
            echo "RIN & Mobile not matched!";
            exit;
        }
        $getlasttime = $this->model->lasttime($rin, $mobile);
        $starttime = '2020-01-01 12:00:00';
        if(count($getlasttime)>0){
            $starttime = date('Y-m-d H:i:s',strtotime($getlasttime[0]['ztime']));
        }
        //Logdebug::appendlog($starttime);
        if($this->datetimediff($starttime)<5){
            $lft = 5-$this->datetimediff($starttime);
            echo "Wait $lft minuites and then try again!";
            exit;
        }
        
        $pin = $rindt[0]['xpin'];
        $data = array(
            "xrdin"=>$rin,
            "xmobile"=>$mobile
        );

        $success = $this->model->createlog($data);

        $sendsms = new Sendsms();
        $rawpass = $sendsms->randPass(8);
		$password = Hash::create('sha256',$rawpass,HASH_KEY); 

        $udata = array(
            "xpassword"=>$password
        );

        $success=$this->model->updatepass($udata," xrdin='".$rin."'");

        if(substr( $mobile, 0, 2 ) !== "88"){
            $mobile = "88".$mobile;
        }

        $sendsms->send_single_sms('আপনার নুতন পাসওয়ার্ড '.$rawpass.' এবং আপনার পিন '.$pin, $mobile);

        echo 'Your password changed and sms sent to '.$mobile;

    }

    function datetimediff($startdate){
        $start_date = strtotime($startdate);
        //Logdebug::appendlog($start_date);
        
        $minutes = ( time()-$start_date) / 60;
        //Logdebug::appendlog($minutes);
        
        return floor($minutes);
    }

    

    function script(){
        return "
            <script>
            
                
                $('#btnsendpass').on('click', function(e){
                    
                    e.preventDefault();    
                        $('#result').html('');
                        
                        $.ajax({
                            
                            url:\"".URL."forgotpass/sendpass\", 
                            type : \"POST\",                                  				
                            data : {rin:$('#rin').val(),mobile:$('#mobile').val()},                    
                            beforeSend:function(){	
                                
                                $('#btnsendpass').prop(\"disabled\",true);
                            },
                            success : function(result) {
                                
                                $('#btnsendpass').prop(\"disabled\",false);
                                $('#result').html(result);
                                
                                
                            },error: function(xhr, resp, text) {
                                $('#btnsendpass').prop(\"disabled\",false);
                                
                            }
                        })
                    
            })
            </script>
        ";
    }

}