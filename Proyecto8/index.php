<?php

$conexion = new mysqli("localhost", "root", "", "juegos");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $resultado = $conexion->query("SELECT * FROM");
}
header('Location: login.php');
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
    <?php include "./public/assets/footer.php"; ?>
  </body>
</html>
