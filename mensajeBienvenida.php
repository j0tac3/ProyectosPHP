<?php
	$nombre ="Antonio2";
	$apellido1 ="Ruiz";
	$apellido2 ="Santos1";


	if ($nombre == "Antonio" || ($apellido1 == "Ruiz" && $apellido2 == "Santos"))
	{
		echo ("Bienvenido Señor $nombre $apellido1 $apellido2");
	}
	else
	{
		echo "No tienes acceso";
	}
?>