<?php

class Views {
   function getView($controller,$view,$data=""){

    $controller = get_class($controller);
    if ($controller=="Home") {
        $view = "Views/".$view.".php"; //RUTA PARA LA VISTA 
    } else {
        $view = "Views/".$controller."/".$view.".php";
    }

    require_once ($view);
    }

}

?>