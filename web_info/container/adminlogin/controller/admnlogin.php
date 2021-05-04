<?php 
	class Admnlogin extends controller{

		function __construct(){
	        parent::__construct();
	       Session::init();
	    }

	    function init($biz="100"){
			
			if(Session::get('logedin')){
				
				header('location: '. URL .'mainmenu');
				exit;
			}else{
				$this->view->bizness = $this->model->getBizness($biz);				
				$this->view->render("templatelogin","adminlogin/init");
			}
				
			
		}
		
		function login(){
			
			$this->model->checklogin();
		}

		

	}

?>