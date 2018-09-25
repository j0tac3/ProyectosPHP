<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario Datos Peronales 1</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
	</head>
	<body>
		<?php
		if(!isset($_POST["enviar"])){//Si todavia no se ha pulsado enviar?>
		<h1>Formulario Datos Personales 1 (Formulario)</h1>
		<form action="formularioDatos1.php" method="POST">
			Escriba su nombre: <input type="textarea" name="nombre">
			<br/>
			Escriba sus apellidos: <input type="textarea" name="apellidos">
			<br/>
			Indique su sexo:
			<input type="radio" name="sexo" value="Hombre">Hombre
			<input type="radio" name="sexo" value="Mujer" checked>Mujer
			<br/>
			Solor favorito:
			<input type="checkbox" name="color" value="Rojo">Rojo
			<input type="checkbox" name="color" value="Verde" checked>Verde
			<input type="checkbox" name="color" value="Naranja">Naranja
			<br/>
			<div id="botones">
				<input type="submit" name="enviar" value="Enviar">
				<input type="reset" value="Borrar">
			</div>
		</form>
		<?php
			}
			else{
				echo "<h1>Formulario Datos Personales 1 (Resultado)</h1>";
				$user=$_POST['nombre'];
				echo "Su nombre es $user<br/>";
				$apellidos=$_POST["apellidos"];
				echo "Sus apellidos son $apellidos<br/>";
				$sexo=$_POST["sexo"];
				echo "Eres un/a $sexo<br/>";


				echo '<a href="formularioDatos1.php">Volver atras</a>';
			}
		?>
	</body>
</html>