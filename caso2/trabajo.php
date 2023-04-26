<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = $_POST['nombre'];
	$sexo = $_POST['sexo'];
	$hijos = $_POST['hijos'];

	if ($sexo == 'masculino') {
		$frase = "El señor $nombre ";
	} elseif ($sexo == 'femenino') {
		$frase = "La señora $nombre ";
	}

	if ($hijos == 0) {
		$frase .= 'no tiene hijos.';
	} elseif ($hijos == 1) {
		$frase .= 'tiene 1 hijo.';
	} else {
		$frase .= "tiene $hijos hijos.";
	}

	echo $frase;
}

?>