<?php
/**
 *
 */
class Juego extends Conexion
{
  private $id;
  private $nombre;


  function __construct()
  {

  }
  public function setID($id)
  {
    $this->id=$id;
  }

  public function getID()
  {
    return $this->id;
  }
  public function setNombre($nombre)
  {
    $this->nombre=$nombre;
  }

  public function getNombre()
  {
    return $this->nombre;
  }
}

 ?>
