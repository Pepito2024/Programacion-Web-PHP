<?php
// Obtener los valores del formulario
$num_emails = $_POST['num_emails'];
$seguro = $_POST['seguro'];

// Verificar que el número de emails sea válido
if (!is_numeric($num_emails) || $num_emails <= 0) {
    echo "Error: el número de emails debe ser un valor numérico mayor que cero.";
    exit;
}

// Determinar el precio según la cantidad de emails
if ($num_emails <= 2000) {
    $precio = 0;
} elseif ($num_emails <= 10000) {
    $precio = ($num_emails - 2000) * 0.7;
} else {
    $precio = ($num_emails - 10000) * 0.2 + 7000 * 0.7;
}

// Agregar el recargo por seguro si corresponde
if ($seguro == 'si') {
    $precio += $num_emails * 0.1;
}

// Mostrar el precio total al usuario
echo "El precio total por enviar $num_emails emails es: S/ $precio.";
