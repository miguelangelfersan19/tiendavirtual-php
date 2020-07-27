<?php
//heredar clase Controllerss
class Home extends Controllers {
    public function __construct()
    {
     parent::__construct();
    }
    public function home (){
   // echo "mensaje desde el controlador  ";
   $data['page_id'] = 1;
   $data['tag_page'] = "Home";
   $data['page_title'] = "Pagina Principal";
   $data['page_name'] = "home";
   $data['page_content'] = "texto";
   $this->views->getView($this,"home",$data);
    }

    public function insertar(){
        $data = $this->model->setUser("miguel", 20); 
        print_r($data);
    }
   
}



?>