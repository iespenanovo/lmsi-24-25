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
			$sex=$_GET['sexo']??"?";
			$term=$_GET['terminos']??"NO";
			$ref=$_GET['ref']??"NO";
			$prov=$_GET['provincia']??"";
			$dep=$_GET['dep']??array(); //recibimos una colección 

			echo "\n<p>Nombre: $nom</p>";
			echo "\n<p>Contraseña: $clav</p>";
			echo "\n<p>Sexo: $sex</p>";
			echo "\n<p>Términos aceptados: $term</p>";
			echo "\n<p>Referencia (campo oculto): $ref</p>";
			echo "\n<p>Provincia: $prov</p>";
			echo "\n<p>Deportes:";
			foreach ($dep as $valor) {
				echo " $valor";
			}
			echo "</p>";


		?>

		<div>
			<a href="08-formularios.html">V O L V E R</a>
		</div>
	</div>

	
</body>
</html>