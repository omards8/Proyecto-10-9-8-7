<?php
/**
 *
 */
class Usuario extends Conexion
{

  private $id;
  private $nombre;
  private $apellidos;
  private $edad;
  private $curso;
  private $puntuacion;
  private $usuario;
  private $juego;
  function __construct()
  {

  }

  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["id"])||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["edad"])||!isset($post["curso"])||!isset($post["puntuacion"])){
      $error="";
    }elseif($post["id"]==""){
      $error="No has introducido el id";
    }elseif($post["nombre"]==""){
      $error="No has introducido el nombre";
    }else if($post["apellidos"]==""){
      $error="No has introducido los apellidos";
    }elseif($post["edad"]==""){
      $error="No has introducido la edad";
    }elseif($post["curso"]==""){
      $error="No has introducido el curso";
    }elseif($post["puntuacion"]==""){
      $error="No has introducido la puntuacion";
    }elseif($post["puntuacion"]==""){
      $error="No has introducido la puntuacion";
    }elseif(is_numeric($post["edad"])==false){
      $error="La edad no es un valor numerico.";
    }elseif(is_numeric($post["curso"])==false){
      $error="El curso no es un valor numerico.";
    }else{
      $error=false;
      $this->id=$post["id"];
      $this->nombre=$post["nombre"];
      $this->apellidos=$post["apellidos"];
      $this->edad=$post["edad"];
      $this->curso=$post["curso"];
      $this->puntuacion=$post["puntuacion"];
    }
    return $error;
  }

  public function listarUsuarios()
  {
    $consulta="SELECT * from usuarios";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }

  public function incremetarPuntuacion($usuario, $juego)
  {
    $consulta="SELECT * from usuario_juego where id_usuario=$usuario and id_juego=$juego";
    $resultado=$this->conexion->query($consulta);
    echo "$resutado";
    if ($resultado->num_rows <= 0) {
      $consulta=("INSERT INTO usuario_juego (id_usuario, id_juego, puntuacion)
                  VALUES ($this->id_usuario, $this->id_juego, $this->puntuacion)");
      $resultado=$this->conexion->query($consulta);

    } else {
      $consulta=("UPDATE usuario_juego SET puntuacion=$puntuacion+$puntuacion,
                  WHERE id_usuario=$usuario AND id_juego=$juego");
      $resultado=$this->conexion->query($consulta);

    }

  }
  public function insertarUsuario(){

    $consulta="INSERT INTO usuarios (id, nombre, apellidos, edad, curso, puntuacion)
                VALUES ($this->id, '$this->nombre', '$this->apellidos', $this->edad, $this->curso, $this->puntuacion)";
    $this->conexion->query($consulta);
  }
  
}

 ?>
