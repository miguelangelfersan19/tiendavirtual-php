<?php
//heredar clase Controllerss
class Usuarios extends Controllers {
    public function __construct()
    {
     parent::__construct();
    }

    
    public function Usuarios (){
   // echo "mensaje desde el controlador  ";
   
   $data['page_tag'] = "Usuarios";
   $data['page_title'] = "USUARIOS <small>Pagina Principal</small>";
   $data['page_name'] = "usuarios";
  
   $this->views->getView($this,"usuarios",$data);
    }
   }



 ?>