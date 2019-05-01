<?php
require "./src/Conexion.php";
require "./src/Usuario.php";
$u = new Usuario();
$u->conectar();
$resultado=$u->listarUsuarios();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="./public/css/Pintar.css">
  </head>
  <body>
    <table>
      <tr>
        <th>Usuarios</th>
      </tr>
    <?php foreach ($resultado as $u) {
      echo "<tr>";
      echo "<td class='info'>".$u['nombre']."</td>";
      echo "</tr>";
    }
     ?>
    <form class="acceso" action="index.php" method="post">
      <label for="user">Usuario</label>

      <input type="text" id="user" name="usuario" placeholder="Introduce tu usuario">
      <label for="pass0">Contraseña</label>
      <input type="password" id="pass0" name="pass0" placeholder="Introduce tu contraseña">

      <input type="hidden" name="accion" value="login">

      <input type="submit" value="Login">
    </form>
  </body>
</html>
