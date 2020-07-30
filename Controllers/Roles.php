<?php 

class Roles extends Controllers{

    public function __construct()
    {
        parent::__construct();
    }
   
    public function Roles(){

        $data['page_id'] = 3;
        $data['page_tag']= "Roles Usuario";
        $data['page_title'] = "Roles Usuarios <small> Tienda Virtual </small>";
           $this->views->getView($this,"roles",$data);

    }

}

?>