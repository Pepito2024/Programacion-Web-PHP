<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Obtener los datos del formulario
  $numero_serie = $_POST["numero_serie"];
  $nombre = $_POST["nombre"];
  $precio = $_POST["precio"];
  
  // Validar que los campos no estén vacíos
  if (empty($numero_serie) || empty($nombre) || empty($precio)) {
    echo "Por favor, complete todos los campos del formulario.";
    exit;
  }
  
  // Validar que el precio sea un número válido
  if (!is_numeric($precio)) {
    echo "El precio debe ser un número.";
    exit;
  }
  
  // Procesar la subida del producto (en este caso, simplemente lo mostramos por pantalla)
  echo "Producto subido correctamente:<br>";
  echo "Número de serie: " . $numero_serie . "<br>";
  echo "Nombre: " . $nombre . "<br>";
  echo "Precio: " . $precio . "<br>";
  
} else {
  // Si no se ha enviado el formulario, redirigir al formulario de subida
  header("Location: formulario_producto.php");
  exit;
}
?>
