<?php
	$arrayCiudades = array("md"=>"Madrid", "ba"=>"Barcelona", "lo"=>"Londes", "ny"=>"New York", "la"=>"Los Angeles", "ch"=>"Chicago");

	foreach ($arrayCiudades as $indice => $value) {
		echo "La ciudad con el indice $indice tiene el nombre $value<br/>";
	}
	echo "Final de la ejecucion";

?>