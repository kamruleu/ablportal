<?php
class Getcode_model extends Model{

    function __construct(){
        parent::__construct();
    }
    function create($table, $data){
        return $this->db->insert($table, $data);
    }
    function getrindt($rin){
		$conditions[]= "xrdin = ?";
		$params[]= $rin;
		
		return $this->db->dbselectbyparam('mlminfo','xorg as org, xmobile as mobile',$conditions,$params);
	}
    function cusdt($cus){
        return $this->db->select('secus',array("xorg as cusname,xadd1, '0' as xpostal, xmobile"), " xcus='".$cus."'");
    }
}