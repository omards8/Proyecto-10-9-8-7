<?php
require "./src/Conexion.php";
require "./src/Usuario.php";
require './src/Juego.php';
$u = new Usuario();
$u->conectar();
$j = new Juego();
$j->conectar();
$resultado=$u->listarUsuario($_GET["usuario"]);
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./public/css/Pintar.css">
  </head>
  <body>
    <?php include "./public/assets/menu.php"; ?>
    <?php
      foreach ($resultado as $usuario) {
      echo "<br> Jugador:  ".$usuario['nombre'];
      echo "<br><br> Puntuacion:  ".$usuario['puntuacion'];
      }
    ?>
    <script type="text/javascript" src="./public/js/Pintar.js"></script>
    <?php include "./public/assets/footer.php"; ?>
  </body>
</html>
