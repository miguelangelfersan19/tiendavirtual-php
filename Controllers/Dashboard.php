<?php
//heredar clase Controllerss
class Dashboard extends Controllers {
    public function __construct()
    {
     parent::__construct();
    }
    public function dashboard(){
   // echo "mensaje desde el controlador  ";
   $data['page_id'] = 2;
   $data['page_tag'] = "Dashboard - Tienda Virtual";
   $data['page_title'] = "Dashboard - Tienda Virtual";
   $data['page_name'] = "dashboard";
  
   $this->views->getView($this,"dashboard",$data);
    }
 

}



?>