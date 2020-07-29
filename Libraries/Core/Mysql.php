<?php

class Mysql extends Conexion 
{
  private $conexion;
  private $strquery;
  private  $arrValues;

    function __construct()
   {
      $this->conexion = new Conexion();
      $this->conexion = $this->conexion->conect();
   }

  //insertar registro 
  public function insert(String $query, array $arrValues)
 {
    $this->strquery = $query;
    $this->arrVAlues = $arrValues;

    $insert = $this->conexion->prepare($this->strquery);
    $resInsert = $insert->execute($this->arrVAlues);
    if ($resInsert) 
    {
        $lasInsert = $this->conexion->lasInsertId();  //marca error
    }else{ 
      $lasInsert=0;
   }
   return $lasInsert;
  }

  
  //buscar un registro
  public function select(string $query)
  {
      $this->strquery = $query;
      $result =$this->conexion->prepare($this->strquery);
      $result->execute();
      $data=$result->fetch(PDO::FETCH_ASSOC);
      return $data;
  }

  //Devolver todos los registros
  public function select_all(string $query)
  {
    $this->strquery =$query;
    $result =$this->conexion->prepare($this->strquery);
    $result->execute();
    $data =$result->fetchall(PDO::FETCH_ASSOC); //basca mas de un registro
    return $data;
  }

  //Actualizar registro
  public function update (string $query, array $arrValues){
    $this->strquery =$query;
    $this->arrVAlues = $arrValues;
    $update = $this->conexion->prepare($this->strquery);
    $resExecute= $update->execute($this->arrVAlues);
    return $resExecute;
  }

  public function delete (string $query){
    $this->strquery = $query;
    $result = $this->conexion->prepare($this->strquery);
    $del = $result->execute();
    return $del;

  }


 }

?>

