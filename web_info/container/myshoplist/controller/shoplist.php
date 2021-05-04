<?php

class Shoplist extends Controller{

    private $formfield=array();

    function __construct(){
        parent::__construct();
        Session::init();
        if(!Session::get('logedin')){
            header('location: '. URL .'adminlogin');
            exit;
        }
        $this->view->script=$this->script();
    }

    function init(){
        Session::set('ttntoken',uniqid());
        $this->view->token=Session::get('ttntoken'); 
        
        $this->view->render("templateadmin","abr/shoplist_view");
    }

    function getshoplist(){
        $serachtype = $_POST['vendorid'];
        //print_r($this->model->getshopdetail($serachtype));
        echo json_encode($this->model->getshopdetail($serachtype)); 
    }

    

    function script(){
        return "
            <script>
            var table = $('#shoptbl').DataTable({
                \"pageLength\": 25,
                
                \"columnDefs\": [
                    { \"title\": \"Name\", \"targets\": 0 },
                    { \"title\": \"Address\", \"targets\": 1 },
                    { \"title\": \"Mobile No\", \"targets\": 2 },                    
                    { \"title\": \"District\", \"targets\": 3 },                    
                ],
                \"columns\": [
                    { \"data\": \"dokanname\" },
                    { \"data\": \"address\" },
                    { \"data\": \"mobile\" },
                    { \"data\": \"disytrict\" }
                ]
            });

            $('#searchtxn').on('click',function(){
                loadbinlist()
            })

            function loadbinlist(){
                $.ajax({
                            
                    url:\"https://nagbakapi.nagbak.com/?page=dokans&action=dokanlist&apitoken=36cfce7372fc99723569236e883dc4db39669cdf116a57d6d126e05fdea7be3c\", 
                    type : \"POST\",                                  				
                    data : {vendorid: $('#vendorid').val()}, 
                    datatype:'json',                   
                    beforeSend:function(){
                        loaderon();   
                    },
                    success : function(result) {
                        //console.log(result)
                        loaderoff();
                        table.clear().draw();
                        const resultobj = JSON.parse(result);
                        //console.log(resultobj)
                        $.each(resultobj, function(key,val){
                            resultobj[key]['sl']=key
                        })
                        table.rows.add(resultobj).draw();
                        
                        
                    },  
                    error: function(xhr, resp, text) {
                        loaderoff();
                        console.log(xhr, resp, text);
                    }
                })
            }
            </script>
        ";
    }
}