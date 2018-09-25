<?php
	echo "Datos Insertados<br/>";
	$nombre=$_POST["nombre"];
	echo "Nombre: $nombre";

	$curso=$_POST["curso"];
	echo "Curso: $curso<br/>";

	$idiomas=$_POST["idioma"];
	echo "Idiomas:<br/>";
	foreach ($idiomas as $idioma) {
		echo "$idioma <br/>";
	}

	$edad=$_POST["edad"];
	echo "Edad: $edad <br/>";
?>