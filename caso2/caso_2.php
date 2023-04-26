<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
    <link rel="stylesheet" href="style.css">
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		input, select {
			margin: 10px;
			padding: 5px;
			font-size: 16px;
		}

		button {
			margin: 10px;
			padding: 10px;
			font-size: 16px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
    <?php
    include('trabajo.php'); 
    ?>
	<h1>Formulario</h1>
	<form method="post" action="trabajo.php">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required>

		<label for="sexo">Sexo:</label>
		<select id="sexo" name="sexo" required>
			<option value="">Seleccionar</option>
			<option value="masculino">Masculino</option>
			<option value="femenino">Femenino</option>
		</select>

		<label for="hijos">Número de hijos:</label>
		<input type="number" id="hijos" name="hijos" min="0" required>

		<button type="submit">Enviar</button>
	</form>
</body>
</html>
