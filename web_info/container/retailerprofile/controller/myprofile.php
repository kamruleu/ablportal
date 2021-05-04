<?php

class Myprofile extends Controller{
	private $formfield=array();
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
		
		Session::set('profiletoken',uniqid());
		$this->view->token=Session::get('profiletoken');  
		$this->view->myprofile = $this->model->getmyprofile();     
		$this->view->render("templateadmin","abr/myprofile_view");
		
	}

	
    function changbankacc(){
		
		
		try{
			
			if(Session::get('profiletoken')!=$_POST['token']){
				throw new Exception(serialize(array('field'=>'Token', 'response'=>' mismatch! Please refresh!')));
			}
			if($_POST['bankacc']==""){
				
					throw new Exception(serialize(array('field'=>'Bank Account', 'response'=>' can not be empty!')));
				
			}
			
			$currentacc = filter_var($_POST['bankacc'], FILTER_SANITIZE_STRING);

			if(strlen($currentacc)>13){
				
				throw new Exception(serialize(array('field'=>'Bank Account', 'response'=>' can not be grater than 13 digit!')));
			
			}
		
			
			$success = $this->model->changebankacc($currentacc);

			if($success>0){				
				
				echo json_encode(array('result'=>'success','message'=>' Bank account successfully changed!'));
			}
			else{	
				echo json_encode(array('result'=>'error','message'=>'Unable to change Bank account!'));
			}

		}catch(Exception $e){
			$res = unserialize($e->getMessage()); 
			
			echo json_encode(array('message'=>$res['field']." ".$res['response'],'result'=>'fielderror'));
			
		}
		
	}
	
	
	function changepassword(){
		
		
		try{
			
			if(Session::get('profiletoken')!=$_POST['token']){
				throw new Exception(serialize(array('field'=>'Token', 'response'=>' mismatch! Please refresh!')));
			}
			if($_POST['currentpass']==""){
				
					throw new Exception(serialize(array('field'=>'Current Password', 'response'=>' can not be empty!')));
				
			}
			
			$currentpass = Hash::create('sha256',$_POST['currentpass'],HASH_KEY);
			$checkpassword = $this->model->checkpassword($currentpass);	
			
			
			
			if(!$checkpassword){
				throw new Exception(serialize(array('result'=>'error','field'=>'Current password', 'response'=>' did not match!')));
			}
			
			
			$newpass = Hash::create('sha256',$_POST['newpass'],HASH_KEY);

			$success = $this->model->changepass($newpass, $currentpass);

			if($success>0){				
				
				echo json_encode(array('result'=>'success','message'=>' Password successfully changed!'));
			}
			else{	
				echo json_encode(array('result'=>'error','message'=>'Unable to change password!'));
			}

		}catch(Exception $e){
			$res = unserialize($e->getMessage()); 
			
			echo json_encode(array('message'=>$res['field']." ".$res['response'],'result'=>'fielderror'));
			
		}
		
	}
	
	function changepin(){
		
		
		try{
			
			if(Session::get('profiletoken')!=$_POST['token']){
				throw new Exception(serialize(array('field'=>'Token', 'response'=>' mismatch! Please refresh!')));
			}
			if($_POST['currentpin']==""){
				
					throw new Exception(serialize(array('field'=>'Current PIN', 'response'=>' can not be empty!')));
				
			}
			
			$currentpin = $_POST['currentpin'];
			$checkpin = $this->model->checkpin($currentpin);	
			
			
			if(!$checkpin){
				throw new Exception(serialize(array('result'=>'error','field'=>'Current PIN', 'response'=>' did not match!')));
			}
			
			
			$newpin = $_POST['newpin'];
            
			$success = $this->model->changepin($newpin, $currentpin);

			if($success>0){				
				
				echo json_encode(array('result'=>'success','message'=>' PIN successfully changed!'));
			}
			else{	
				echo json_encode(array('result'=>'error','message'=>'Unable to change PIN!'));
			}

		}catch(Exception $e){
			$res = unserialize($e->getMessage()); 
			
			echo json_encode(array('message'=>$res['field']." ".$res['response'],'result'=>'fielderror'));
			
		}
		
	}
	
	

	function script(){
		return "
		<script>

			
			$(document).ready(function(){
			
			$('#btnbankacc').on('click', function(e){
					e.preventDefault();
					$.ajax({
                        
						url:\"".URL."retailerprofile/changbankacc\", 
						type : \"POST\", 
						dataType: \"json\",                                 				
						data : {bankacc: $('#bankacc').val(), token: $('#token').val()},             
						beforeSend:function(){	
							loaderon();   
							
						},
						success : function(result) {
							console.log(result)
							loaderoff();
							$('#changeresult').html(result['message'])
						},error: function(xhr, resp, text) {
							loaderoff();
							
						}
					})
				})

				$('#btnchangepass').on('click', function(e){
					e.preventDefault();
					$.ajax({
                        
						url:\"".URL."retailerprofile/changepassword\", 
						type : \"POST\", 
						dataType: \"json\",                                 				
						data : {currentpass: $('#currentpass').val(),newpass: $('#newpass').val(), token: $('#token').val()},             
						beforeSend:function(){	
							loaderon();   
							
						},
						success : function(result) {
							console.log(result)
							loaderoff();
							$('#passchangeresult').html(result['message'])
						},error: function(xhr, resp, text) {
							loaderoff();
							
						}
					})
				})

				$('#btnchangepin').on('click', function(e){
					e.preventDefault();
					$.ajax({
                        
						url:\"".URL."retailerprofile/changepin\", 
						type : \"POST\", 
						dataType: \"json\",                                 				
						data : {currentpin: $('#currentpin').val(),newpin: $('#newpin').val(), token: $('#token').val()},             
						beforeSend:function(){	
							loaderon();   
							
						},
						success : function(result) {
							//console.log(result)
							loaderoff();
							$('#pinchangeresult').html(result['message'])
						},error: function(xhr, resp, text) {
							loaderoff();
							
						}
					})
				})
	
				
				$('#frmprofilepass').validate({
					rules: {
						currentpass: {
							required: true
						},
						newpass: {
							required: true,
							minlength: 6	
						},
						confirmpass: {
							required: true,
							minlength: 6,
							equalTo: '#newpass'	
						}
					},
					messages: { 
						currentpass:{
							required: 'Please enter current password'							
						},
						newpass:{
							required: 'Please enter new password',
							minlength: 'Please enter minimum 6 character'
						},
						confirmpass:{
							required: 'Please enter confirm password',
							minlength: 'Please enter minimum 6 character',
							equalTo: 'New password and confirm password did not match'	
						}
					},
					errorElement: 'em',
					errorPlacement: function ( error, element ) {
                    
						error.addClass( 'input-group help-block text-danger' );
	
						if ( element.prop( 'type' ) === 'checkbox' ) {
							error.insertAfter( element.parent( 'label' ) );
						} else {
							error.insertAfter( element );
						}
					},
				})	

				$('#frmprofilepin').validate({
					rules: {
						currentpin: {
							required: true
						},
						newpin: {
							required: true,
							minlength: 6	
						},
						confirmpin: {
							required: true,
							minlength: 6,
							equalTo: '#newpin'	
						}
					},
					messages: { 
						currentpin:{
							required: 'Please enter current PIN'							
						},
						newpin:{
							required: 'Please enter new PIN',
							minlength: 'Please enter minimum 6 character'
						},
						confirmpin:{
							required: 'Please enter confirm PIN',
							minlength: 'Please enter minimum 6 character',
							equalTo: 'New PIN and confirm PIN did not match'	
						}
					},
					errorElement: 'em',
					errorPlacement: function ( error, element ) {
                    
						error.addClass( 'input-group help-block text-danger' );
	
						if ( element.prop( 'type' ) === 'checkbox' ) {
							error.insertAfter( element.parent( 'label' ) );
						} else {
							error.insertAfter( element );
						}
					},
				})	
					
			})
		</script>
		";
	}
} 