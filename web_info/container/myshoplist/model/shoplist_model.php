<?php

class Shoplist_model extends Model{

    function __construct(){
        parent::__construct();
    }


    function getshopdetail($gentype){
        //echo $gentype;
        if($gentype == ""){
            $conditions[]= "1 = ?";
                $params[]= 1;
        }else{
            $conditions[]= "xvendorid = ?";
            $params[]= $gentype;
        }
        
		return $this->db->dbselectbyparam('vendormst','xorg as org, xadd as addr, xvendorid as mobile, xdist as dist',$conditions,$params);

    }

    
}