<?php
/*Sumar los numeros de 1 a 1000 de 3 en 3*/
	$sum = 0;
	for ($i = 1; $i <= 1000; $i + 3)
	{
		$sum += $i;
		echo $i;
	}
	echo "$sum <br/>";
?>