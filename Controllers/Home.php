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
   $data['page_tag'] = "Home";
   $data['page_title'] = "Pagina Principal";
   $data['page_name'] = "home";
   $data['page_content'] = "texto";
   $this->views->getView($this,"home",$data);
    }
 /*
    public function insertar(){
        $data = $this->model->setUser("miguel", 21);
        print_r($data);
    }

    public function verusuario($id){
        $data = $this->model->getUser($id);
        print_r($data);
    }

    public function actualizar(){
        $data = $this->model->updateUser(10,"jose",21);
        print_r($data);
    }

    public function verusuarios(){
        $data=$this->model->getUsers();
        print_r($data);
    }

    public function eliminarusuario($id){
        $data = $this->model->delUser($id);
        print_r($data);
    }
*/

}



?>