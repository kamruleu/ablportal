<?php
class Odcapply_Model extends Model{
	
	function __construct(){
		parent::__construct();
	}
	public function createretailer($data){
		//$this->log->modellog( serialize($data));die;
		return $this->db->insert("odc", $data);
	}
	function gettxn($sl, $otp){
        
        $conditions[]= "xsl = ?";
        $conditions[]= "xotp = ?";
        $conditions[]= "zactive = ?";
        $conditions[]= "xdoctype = ?";
        $params[]= $sl;
        $params[]= $otp;
        $params[] = '0';
        $params[] = 'ODC Apply';
		
        return $this->db->dbselectbyparam('crmcharge','*',$conditions,$params);
        
        //return $this->db->select('crmcharge',array()," xsl=$sl and xotp=$otp");
	}
	function disburseupdate($table,$data, $where){
        //$this->log->modellog( serialize($data));
        return $this->db->dbupdate($table,$data, $where);
	}
	function loadarc(){
		return $this->db->select('officeAddress',array("xcode as arccode, representetive as rep"));
	}

	public function getodcnum($prefix){
		$where = "";
		//$this->log->modellog("SELECT coalesce(max(SUBSTRING($keyfield, -$num)),0) as maxnum FROM $table WHERE $where");
		$sth = $this->db->select("odc",array("coalesce(max(SUBSTRING(odcnum, -5)),0) as lastnum"),$where);
		
		$pdonum = (int)$sth[0]['lastnum'];
		if($pdonum==0)
			$pdonum = 1;
		else
			$pdonum += 1;
		
		//echo $prefix.str_pad((string)$pdonum,$num,"0",STR_PAD_LEFT);die;
		return 	$prefix.str_pad((string)$pdonum,5,"0",STR_PAD_LEFT);
	}

	function getcusdt($cus){
		$conditions[]= "xcus = ?";
		$params[]= $cus;
		return $this->db->dbselectbyparam('secus','xcus as cus,xrdin as rin, xorg as cusname, xadd1 as address, xmobile as mobile',$conditions,$params);
	}

	function getrindt($rin){
		$conditions[]= "xrdin = ?";
		$params[]= $rin;
		
		return $this->db->dbselectbyparam('mlminfo','xrdin as cus, xorg as cusname, xadd1 as address, xmobile as mobile, refrin as refrin',$conditions,$params);
	}
	function getarcdt($arc){
		$conditions[]= "xcode = ?";
		$params[]= $arc;
		
		return $this->db->dbselectbyparam('officeAddress','xdivision',$conditions,$params);
	}

	function pointbal($cus){
		return $this->db->select('mlmbv',array("coalesce(sum(point*xsign), 0) as pointbal")," xcus = '".$cus."'");
	}

	
}
