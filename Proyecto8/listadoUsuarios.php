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
    <title></title>
    <link rel="stylesheet" href="./public/css/Pintar.css">
  </head>
  <body>
    <?php include "./public/assets/menu.php"; ?>
    <div class="info">
      <table>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Edad</th>
          <th>Curso</th>
          <th>Puntuacion</th>
        </tr>
        <?php
          foreach ($resultado as $u) {
            echo "<tr>";
            echo "<td class='info'><a href=./partida.php?usuario=".$u['id'].">".$u['id']."</td>";
            echo "<td class='info'>".$u['nombre']."</td>";
            echo "<td class='info'>".$u['apellidos']."</td>";
            echo "<td class='info'>".$u['edad']."</td>";
            echo "<td class='info'>".$u['curso']."</td>";
            echo "<td class='info'>".$u['puntuacion']."</td>";
            echo "</tr>";
          }
        ?>
    </table>
    <?php include "./public/assets/footer.php"; ?>
  </body>
</html>
