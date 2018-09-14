<?php
	$num = 5; //Variable a la que le asignaremos un valor
	$numArray = array(1=>"uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez"); // Creamos un array y empezamos en el indice 1

	if ($num > 0 && $num <= 10) // Comparamos si el vaor de la variable esta entre 1 y 10
	{
		echo ("El numero es " . $numArray[$num]); //Si el valor cumple la condicion mostramos el valor correspondiente en del array
	}
	else
	{
		echo "El numero no esta entre uno y diez"; //Si el valor no cumple la condicion
	}
?>