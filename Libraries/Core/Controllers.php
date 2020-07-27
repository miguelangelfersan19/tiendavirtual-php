<?php


class Controllers{
    public function __construct()
    {
        //insrancia de la vista 
        $this->views = new Views();
        $this->loadModel();
    }
    public function loadModel ()
    {
        //homeModel
        $model = get_class($this)."Model";
        $routClass = "Models/".$model.".php";
        if (file_exists($routClass)) {
            require_once($routClass);
            $this->model = new $model();
        }
    }
}



?>