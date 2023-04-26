<?php
  // Definimos la función que calculará el precio total
  function calcularPrecioTotal($numEmails, $seguro) {
    if ($numEmails >= 0 && $numEmails <= 2000) {
      $precio = 0.0;
    } elseif ($numEmails >= 2001 && $numEmails <= 10000) {
      $precio = 0.7 * $numEmails;
    } elseif ($numEmails >= 10001) {
      $precio = 0.2 * $numEmails;
    } else {
      return "Número de emails inválido";
    }
    if ($seguro) {
      $precio += 0.1 * $numEmails;
    }
    return "El precio total es: S/ " . $precio;
  }

  // Verificamos si se ha enviado el formulario
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibimos los datos del formulario
    $numEmails = intval($_POST["num_emails"]);
    $seguro = isset($_POST["seguro"]) ? true : false;
    // Calculamos el precio total
    $precioTotal = calcularPrecioTotal($numEmails, $seguro);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Calculadora de newsletter</title>
  </head>
  <body>
    <h1>Calculadora de newsletter</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="num_emails">Número de emails:</label>
      <input type="number" name="num_emails" id="num_emails" required>
      <br>
      <label for="seguro">¿Desea seguro por mensaje?</label>
      <input type="checkbox" name="seguro" id="seguro">
      <br>
      <input type="submit" value="Calcular">
    </form>
    <?php
      // Mostramos el precio total si se ha calculado
      if (isset($precioTotal)) {
        echo $precioTotal;
      }
    ?>
  </body>
</html>
