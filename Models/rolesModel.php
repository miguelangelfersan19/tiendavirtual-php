<?php


class RolesModel extends mysql{

  public $intIdrol;
  public $strRol;
  public $strDescripcion;
  public $intStatus;

    public function __construct(){
      parent::__construct();
    }

    public function selectRoles(){

        // extre los roles
        $sql ="SELECT * FROM rol WHERE status != 0";
        $request = $this->select_all($sql);
        return $request;
    }

    public function selectRol(int $idrol){
      $this->intIdrol = $idrol;
      $sql = "SELECT * FROM rol WHERE idrol = $this->intIdrol";
      $request = $this->select($sql);
      return $request;

    }

    public function insertRol(string $rol , string $descripcion, int $status ){

      $return ="";
      $this->strRol = $rol;
      $this->strDescripcion = $descripcion;
      $this->intStatus = $status;

      $sql = "SELECT * FROM  rol WHERE nombrerol ='{$this->strRol}'"; // verifica si existe el campo de nombrerol
      $request = $this->select_all($sql); // ejecuta la selecion de toda la tabla de roles

      if (empty($request))
      {
        $query_insert ="INSERT INTO rol (nombrerol, descripcion,status) VALUES(?,?,?)";
        $arrData = array($this->strRol, $this->strDescripcion, $this->intStatus); // arma el array 
        $request_inert = $this->insert($query_insert, $arrData);
        $return = $request_inert;
      }else{
        $return ="exist";
      }
      return $return;
      }
      
    }

  

?>