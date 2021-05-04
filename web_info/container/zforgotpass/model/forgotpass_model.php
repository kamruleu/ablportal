<?php
class Forgotpass_model extends Model{
    function __construct(){
        parent::__construct();
    }

    function createlog($data){
        return $this->db->insert('ablsmslog', $data);
    }
    
    function checkmobile($rin, $mobile){
        $conditions[]= "xrdin = ?";
        $conditions[]= "xmobile like ? ";
        $params[]= $rin;
        $params[]= "%".$mobile."%";
		return $this->db->dbselectbyparam('mlminfo','xpin',$conditions,$params);
    }

    function lasttime($rin, $mobile){
        $conditions[]= "xrdin = ?";
        $conditions[]= "xmobile like ?";
        $conditions[]= " 1=1 order by xsl desc LIMIT 1";
        $params[]= $rin;    
        $params[]= "%".$mobile."%";
		return $this->db->dbselectbyparam('ablsmslog',"ztime",$conditions,$params);
    }

    function updatepass($data, $where){
        return $this->db->dbupdate('mlminfo',$data, $where);
    }
}