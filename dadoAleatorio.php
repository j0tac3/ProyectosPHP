<?php
	echo "<link rel=stylesheet href=css/estiloDado.css>";
	$arrayDado =  array("carasDado/cara1.jpg", "carasDado/cara2.jpg", "carasDado/cara3.jpg", "carasDado/cara4.jpg", "carasDado/cara5.jpg" ,"carasDado/cara6.jpg");

	$numDado = $arrayDado[array_rand($arrayDado)];
	echo "<img src=",$numDado,">";
?>