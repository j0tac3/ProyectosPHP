<?php
	$arrayPaises = array('alemania','brasil','italia','chile','uruguay','australia');

	print_r($arrayPaises);
	echo "<br/>";
	//Eliminar elemento
	$elemento1 = array_search("alemania", $arrayPaises);
	$elemento2 = array_search("italia", $arrayPaises);
	$elemento3 = array_search("australia", $arrayPaises);

	unset($arrayPaises[$elemento1], $arrayPaises[$elemento2],$arrayPaises[$elemento3]);

	print_r($arrayPaises);
	echo "<br/>";

	array_push($arrayPaises, "angentina", "bolivia");
	print_r($arrayPaises);
	echo "<br/>";

	sort($arrayPaises);
	print_r($arrayPaises);
?>