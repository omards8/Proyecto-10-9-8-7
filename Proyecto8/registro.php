<?php
require "./src/Conexion.php";
require "./src/Usuario.php";

  $u=new Usuario();
  $error=$u->comprobarCampos($_POST);


  if(isset($error)){
      if($error===false){
        //NO HAY ERROR
        $u->conectar();
        $u->insertarUsuario();
      }
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./public/css/Pintar.css">
  </head>
  <body>
    <!-- Menu navegacion-->
    <?php include "./public/assets/menu.php"; ?>
    <!-- ERRORES Y MENSAJES-->
    <?php
    if(isset($error)){
        if($error!="") echo "<h4>ERROR:$error</h4>";
    }
    ?>
    <!-- Formulario de insercion -->
    <h2>Nuevo Usuario</h2>
    <form class="info" action="registro.php" method="post">
      <div class="info">
        <label for="id"></label>
        <span class="formLabel">ID</span>
        <input type="text" name="id" value="">
      </div>
      <div class="info">
        <label for="nombre"></label>
        <span class="formLabel">Nombre</span>
        <input type="text" name="nombre" value="">
      </div>
      <div class="info">
        <label for="apellidos"></label>
        <span class="formLabel">Apellidos</span>
        <input type="text" name="apellidos" value="">
      </div>
      <div class="info">
        <label for="edad"></label>
        <span class="formLabel">Edad</span>
        <input type="text" name="edad" value="">
      </div>
      <div class="info">
        <label for="curso"></label>
        <span class="formLabel">Curso</span>
        <input type="text" name="curso" value="">
      </div>
      <div class="info">
        <label for="puntuacion"></label>
        <span class="formLabel">Puntuacion</span>
        <input type="text" name="puntuacion" value="">
      </div>
      <input type="submit" name="" value="Insertar">
    </form>
    <?php include "./public/assets/footer.php"; ?>
  </body>
</html>
