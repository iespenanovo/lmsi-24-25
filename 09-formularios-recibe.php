<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Datos recibidos</title>
	<link rel="stylesheet" href="css/00-estilo-base.css">
</head>
<body>
	<div class="contenedor">
		<h1>Datos recibidos:</h1>
		<?php 
			$nom=$_GET['nombre']??"";
			$clav=$_GET['clave']??"";

			echo "<p>Nombre: $nom</p>";
			echo "<p>Contraseña: $clav</p>";

		?>
		<div>
			<a href="08-formularios.html">V O L V E R</a>
		</div>
	</div>

	
</body>
</html>