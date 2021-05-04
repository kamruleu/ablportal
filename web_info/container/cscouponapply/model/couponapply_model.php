<?php
class Couponapply_model extends Model{

    function __construct(){
        parent::__construct();
    }
    function create($table, $data){
        return $this->db->insert($table, $data);
    }
    function createst($table,$cols, $vals){
        return $this->db->insertmultiple($table,$cols, $vals);
    }
    function updatetemp($st){
        return $this->db->executecrud($st);
    }
    function getrindt($rin){
		$conditions[]= "xrdin = ?";
		$params[]= $rin;
		
		return $this->db->dbselectbyparam('mlminfo','xorg as org, xmobile as mobile',$conditions,$params);
	}

    function getcindt($cin){
		$conditions[]= "xcus = ?";
		$params[]= $cin;
		
		return $this->db->dbselectbyparam('secus','xorg as org, xmobile as mobile',$conditions,$params);
	}
    function getodcdt($odc){
		$conditions[]= "odcnum = ?";
		$params[]= $odc;
		
		return $this->db->dbselectbyparam('odc m','m.offcode,m.xrdin as odcrin,(select c.xrdin from officeAddress c where m.offcode=c.xcode) as arcrin',$conditions,$params);
	}
    function getcoupondt($coupon){
        return $this->db->select('coupon',array("xbv as bv, xpayref"), " xcoupon='".$coupon."'");
    }
    function couponused($coupon){
        return $this->db->select('couponapply',array("*"), " xcoupon='".$coupon."'");
    }

    function loadodc(){
		return $this->db->select('odc',array("odcnum as odc"), " 1=1 order by odcnum");
	}
    function getstno(){
        return $this->db->select('ablstatement',array("COALESCE(max(stno),0) as stno"));
    }
}