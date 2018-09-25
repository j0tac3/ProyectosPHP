<?php
	echo "Datos del Alumno";

	$nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];

	echo "Nombre y Apellidos: $nombre $apellidos<br/>";

	$conocer=$_POST["conocer"];
	echo "Conocion el centro por: $conocer<br/>";

	$idiomas=$_POST["idioma"];
	echo "Idiomas:<br/>";
	foreach ($idiomas as $idioma) {
		echo "$idioma <br/>";
	}

?>