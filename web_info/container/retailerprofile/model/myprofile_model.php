<?php
class Myprofile_Model extends Model{
	
	function __construct(){
		parent::__construct();
	}
	public function changepass($pass, $currentpasss){
		//$this->log->modellog( serialize($data));die;
		$data['xpassword']=$pass;
		return $this->db->dbupdate("mlminfo", $data, " xrdin ='".Session::get('suser')."' and xpassword='".$currentpasss."'");
	}

	public function changepin($pin, $currentpin){
		//$this->log->modellog(serialize($data));
		$data['xpin']=$pin;
		return $this->db->dbupdate("mlminfo", $data, " xrdin ='".Session::get('suser')."' and xpin='".$currentpin."'");
	}

	function getmyprofile(){
		$conditions[]= "xrdin = ?";
		$params[]= Session::get('suser');
		
		return $this->db->dbselectbyparam('mlminfo','xrdin as rin, xorg as org, xadd1 as address, xmobile as mobile, xcusemail as mail, xnominee as nominee, xgroup as mygroup, xacc as acc, xbank as bank, membertype, xcus as cin, xpin as pin',$conditions,$params);
		

	}
	
	public function changebankacc($acc){
		//$this->log->modellog(serialize($data));
		$data['xacc']=$acc;
		return $this->db->dbupdate("mlminfo", $data, " xrdin ='".Session::get('suser')."'");
	}

	function checkpassword($pass){
		$conditions[]= "xrdin = ?";
		$conditions[]= "xpassword = ?";
		$params[]= Session::get('suser');
		$params[]= $pass;

		$data = $this->db->dbselectbyparam('mlminfo','xrdin, xorg, xadd1, xmobile',$conditions,$params);

		if(count($data)>0){
			return true;
		}else{
			return false;
		}
	}

	function checkpin($pin){
		$conditions[]= "xrdin = ?";
		$conditions[]= "xpin = ?";
		$params[]= Session::get('suser');
		$params[]= $pin;

		$data = $this->db->dbselectbyparam('mlminfo','xrdin, xorg, xadd1, xmobile',$conditions,$params);
        //$this->log->modellog(serialize(Session::get('suser')));
		if(count($data)>0){
			return true;
		}else{
			return false;
		}
	}
	
}
