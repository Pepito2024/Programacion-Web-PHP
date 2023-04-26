<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Identificación</title>
  </head>
  <body>
    <h1>Identificación</h1>
    <?php
    $nombre = "usuario";
    $contrasena = "1234";
    if ($_POST) {
      if ($_POST['nombre'] == $nombre && $_POST['contrasena1'] == $_POST['contrasena2'] && $_POST['contrasena1'] == $contrasena) {
        session_start();
        $_SESSION['usuario'] = $nombre;
        header("Location: practica.php");
      } else {
        echo "<p>Usuario o contraseña incorrectos</p>";
      }
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre"><br>
      <label for="contrasena1">Contraseña:</label>
      <input type="password" name="contrasena1" id="contrasena1"><br>
      <label for="contrasena2">Repita la contraseña:</label>
      <input type="password" name="contrasena2" id="contrasena2"><br>
      <input type="submit" value="Identificarse">
    </form>
  </body>
</html>
