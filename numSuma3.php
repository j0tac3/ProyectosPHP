<?php
/*Pagina que suma los numeros de 1 a 100 de 3 en 3 */
	$sum = 0;

	echo "Numros de 1 a 100 en intervalo de 3<br/>";
	for ($i = 1; $i < 1000; $i +=3)
	{
		$sum+=$i;
		echo "$i <br/>";
	}

	echo "La suma de todos los numeros es: $sum";
?>