<?php
	$arrayNum = array(1,2,3,4,5); //Creamos el array
	$numSum = 0; //Creamos una variable para la suma

	foreach ($arrayNum as $valor) {
		$numSum += $valor;
	}
	echo ("La suma de los valores del array es " . $numSum);

	?>