<?php 
  // recolecta la url del proyecto
   function base_url(){
      return Base_url; 
    }

    //recolectas las urls de assets
       function media(){
        return Base_url."/Assets";
    
      
         }


        function headerAdmin($data=""){
            $view_header ="Views/Template/header_admin.php";
            require_once ($view_header);
        }

        function footerAdmin($data =""){
            $view_footer= "Views/Template/footer_admin.php";
            require_once ($view_footer);
        }
    
    
        function getModal(string $nameModal, $data){
           $view_modal = "Views/Template/Modals/{$nameModal}.php";
           require_once $view_modal;
        }

    //muestra la informacion formateada
    function dep($data){
        $format = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('</pre>');
        return $format;
    }

    //Eliminar exceso de espacios en palabras y evitar ataques
    function strClean($strCadena){
        $string = preg_replace(['/\s+/','/^\s$/'],[' '.''],$strCadena);
        $string = trim($string); //Eimina espacio al inicio y final
        $string = stripslashes($string); //elimina las barras invertidas
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("</script>","",$string);
        $string = str_ireplace("<script src>","",$string);
        $string = str_ireplace("<script type=>","",$string);
        $string = str_ireplace("SELECT * FROM","",$string);
        $string = str_ireplace("DELETE FROM","",$string);
        $string = str_ireplace("INSERT INTO","",$string);
        $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
        $string = str_ireplace("DROP TABLE","",$string);
        $string = str_ireplace("'OR '1'='1","",$string);
        $string = str_ireplace('OR "1"="1"',"",$string);
        $string = str_ireplace('OR `1`=`1`',"",$string);
        $string = str_ireplace("IS NULL; --","",$string);
        $string = str_ireplace("IS NULL; --","",$string);
        $string = str_ireplace("LIKE '","",$string);
        $string = str_ireplace("LIKE '","",$string);
        $string = str_ireplace("LIKE `","",$string);
        $string = str_ireplace("OR 'a'='a","",$string);
        $string = str_ireplace('OR" "a"="a',"",$string);
        $string = str_ireplace("OR 'a'='a","",$string);
        $string = str_ireplace("OR `a`=`a","",$string);
        $string = str_ireplace("--","",$string);
        $string = str_ireplace("^","",$string);
        $string = str_ireplace("[","",$string);
        $string = str_ireplace("]","",$string);
        $string = str_ireplace("==","",$string);
        
    }

    function passGenerator($length = 10 ){
        $pass ="";
        $longitudPass=$length;
        $cadena ="abcdefghijklmnopqrstuxyz1234567890";
        $longitudCadena=strlen($cadena);

        for($i=1; $i<=$longitudPass; $i++){
            $pos = rand(0,$longitudCadena-1);
            $pass .= substr($cadena,$pos,1);
        }
        return $pass;
    }

    //generar token para restablecer contraseñas de usuarios 
    function token(){
        $r1= bin2hex(random_bytes(10));
        $r2= bin2hex(random_bytes(10));
        $r3= bin2hex(random_bytes(10)); 
        $r4= bin2hex(random_bytes(10));
        $token =$r1.'-'.$r2.'-'.$r3.'-'.$r4;
        return $token;
    }
    // fomato para valore smonetarios
    function formatMoney($cantidad){
        $cantidad = number_format($cantidad,2,SPD,SPM);
        return $cantidad;
    }






?>