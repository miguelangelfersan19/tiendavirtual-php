<?php

//cargar las funciones  automaticamente
spl_autoload_register(function($class){
    if(file_exists("Libraries/".'core/'.$class.".php")){
        require_once("Libraries/".'core/'.$class.".php");
    }
});

?>