<?php
class Rfidapp_Model extends Model{
	
	function __construct(){
		parent::__construct();
	}
	public function createretailer($table,$data){
		//$this->log->modellog( serialize($data));die;
		return $this->db->insert($table, $data);
	}
	function gettxn($sl, $otp){
        //$this->log->modellog($sl.','.$otp);
        $conditions[]= "xsl = ?";
        $conditions[]= "xotp = ?";
        $conditions[]= "zactive = ?";
        $conditions[]= "xdoctype = ?";
        $params[]= $sl;
        $params[]= $otp;
        $params[] = '0';
        $params[] = 'EXPRESS Card Payment';
		
        return $this->db->dbselectbyparam('crmcharge','*',$conditions,$params);
        
        //return $this->db->select('crmcharge',array()," xsl=$sl and xotp=$otp");
	}
	function disburseupdate($table,$data, $where){
        //$this->log->modellog( serialize($data));
        return $this->db->dbupdate($table,$data, $where);
	}
	function getSatementNo(){
		return $this->db->getStatementNo();
	}
	function getcusdt($cus){
		$conditions[]= "xcus = ?";
		$params[]= $cus;
		return $this->db->dbselectbyparam('secus','xcus as cus,xrdin as rin, xorg as cusname, xadd1 as address, xmobile as mobile',$conditions,$params);
	}

	function getrindt($rin){
		$conditions[]= "xrdin = ?";
		$params[]= $rin;
		
		return $this->db->dbselectbyparam('mlminfo','xrdin as rin, refrin, refrin1,refrin2, refrin3,refrin4',$conditions,$params);
	}

	function getarc(){
		$conditions[]= "1 = ?";
		$params[]= 1;
		return $this->db->dbselectbyparam('officeAddress','xcode as arc',$conditions,$params);
	}
	
	function pointbal($cus){
		return $this->db->select('mlmbv',array("coalesce(sum(point*xsign), 0) as pointbal")," xcus = '".$cus."'");
	}

	function cinused($cus){
		$conditions[]= "xcus = ?";
		$params[]= $cus;
		
		$data = $this->db->dbselectbyparam('mlminfo','xrdin as rin, xorg as cusname, xadd1 as address, xmobile as mobile',$conditions,$params);
		
		if(count($data)==0)
			return false;
		else
			return true;

	}
	function iscinused($cus){
		$conditions[]= "xcus = ?";
		$params[]= $cus;
		
		$data = $this->db->dbselectbyparam('mlminfo','xrdin as rin, xorg as cusname, xadd1 as address, xmobile as mobile',$conditions,$params);
		
		return $data;

	}
	function customersearch($searchcol,$searchval){

		$conditions[]= $searchcol." like ?";
		$conditions[]= "zemail = ?";
		$conditions[]= " 1=1 or xrdin='".Session::get('suser')."' ORDER BY ztime DESC";
		$params[]= "%".$searchval."%";
		$params[]= Session::get('suser');
		
		return $this->db->dbselectbyparam('secus','xcus as cin,xorg as cusname,xmobile as mobile',$conditions,$params);

	}
	
	function cusfullsearch(){

		
		$conditions[]= "zemail = ?";
		$conditions[]= " 1=1 or xrdin='".Session::get('suser')."' ORDER BY ztime DESC";
		
		$params[]= Session::get('suser');
		
		return $this->db->dbselectbyparam('secus','xcus as cin,xorg as cusname,xmobile as mobile',$conditions,$params);

	}
	
	function rinsearch($searchcol,$searchval){

		$conditions[]= $searchcol." like ?";
		$conditions[]= "zemail = ?";
		$conditions[]= " 1=1 or xrdin='".Session::get('suser')."' ORDER BY ztime DESC";
		$params[]= "%".$searchval."%";
		$params[]= Session::get('suser');
		
		return $this->db->dbselectbyparam('mlminfo','xcus as cin,xrdin as rin,xorg as cusname,xmobile as mobile',$conditions,$params);

	}
	
}
