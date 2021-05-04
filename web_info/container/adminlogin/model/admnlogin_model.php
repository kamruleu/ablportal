<?php 
	class Admnlogin_Model extends Model{

    function __construct(){
        parent::__construct();
    }
    
    public function getBizness($biz=100){
		$fields = array("bizid", "bizshort", "bizlong", "bizcur", "bizdecimals","bizitemauto","bizcusauto","bizsupauto","bizdateformat",
		"bizadd1", "bizvatpct", "bizchkinv","bizyearoffset");
		
		$where = "bizid = ".$biz;	
		
		return $this->db->select("pabuziness", $fields, $where);
	}

	public function checklogin(){
		$sth = $this->db->prepare("SELECT bizid,xrdin,distrisl,xorg, xcus,xgroup FROM mlminfo 
							WHERE xrdin = :login and xpassword = :password and bizid = :bizid");
		$biz = 100;
		$sth->execute(array(
			':login' => $_POST['login'],
			':password' => Hash::create('sha256',$_POST['password'],HASH_KEY),
			':bizid' => $biz
		));
		
		$data = $sth->fetch();
		
		$bizdata = $this->getBizness($biz);
		//print_r($bizdata); die;
		
		
		$count = $sth->rowCount();
		
		$stno = $this->getstno()[0]['stno'];
        $bin = $this->getmybin($data['distrisl'])[0]['bin'];
        //echo $bin;die;
        if($bin==1){
            header('location: '. URL .'adminlogin');
            exit;
        }
		//echo $count;die;
		if($count>0){
			Session::init();
			Session::set('suser', $data['xrdin']);
			Session::set('susername', $data['xorg']);
			Session::set('scin', $data['xcus']);
			Session::set('sgroup', $data['xgroup']);
			Session::set('suserrow', $data['xusersl']);
			Session::set('sbizid', $data['bizid']);	
			Session::set('sdistrisl', $data['distrisl']);			
			Session::set('logedin', true);
			Session::set('sstno', $stno);
        	Session::set('sbin', $bin);
			//Session::set('mainmenus', $menus);
			
			
			header('location: '. URL .'mainmenu');
		}else{
			header('location: '. URL .'adminlogin');
		}
	}

	function getstno(){
		return $this->db->select('ablstatement', array("COALESCE(max(stno),0) as stno"));
	}

	function getmybin($distrisl){
		return $this->db->select('mlmtree', array("COALESCE(min(bin),1) as bin"), " distrisl='".$distrisl."'");
	}
    
}

?>