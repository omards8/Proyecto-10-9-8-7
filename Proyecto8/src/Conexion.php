<?php
/**
 *
 */
class Conexion
{
  public $conexion=null;
  private $servidor;
  private $bbdd;
  private $usuario;
  private $password;

  function __construct($servidor, $bbdd, $usuario, $password)
  {

  }
  public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "juegos");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
public function setServidor($servidor)
{
  $this->servidor = $servidor;
}

public function getServidor()
{
  return $this -> servidor;
}
public function setBBDD($bbdd)
{
  $this->bbdd = $bbdd;
}

public function getBBDD()
{
  return $this -> bbdd;
}
public function setUsuario($usuario)
{
  $this->usuario = $usuario;
}

public function getUsuario()
{
  return $this -> usuario;
}
public function setPassword($password)
{
  $this->password = $password;
}

public function getPassword()
{
  return $this -> password;
}


  public function listarUsuario($id)
  {
    $consulta="SELECT * from usuarios where id=".$id;
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }


  public function insertarUsuario(){

    $consulta="INSERT INTO usuarios (id, nombre, apellidos, edad, curso, puntuacion)
                VALUES ($this->id, '$this->nombre', '$this->apellidos', $this->edad, $this->curso, $this->puntuacion)";
    $this->conexion->query($consulta);
  }
}

 ?>
