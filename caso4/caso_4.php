<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Subir Producto</title>
  </head>
  <body>
    <h1>Subir Producto</h1>
    <form action="procesar.php" method="post">
      <label for="numero_serie">Número de Serie:</label>
      <input type="text" name="numero_serie" id="numero_serie"><br>
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre"><br>
      <label for="precio">Precio:</label>
      <input type="text" name="precio" id="precio"><br>
      <input type="submit" value="Subir Producto">
    </form>
  </body>
</html>
