<?php
/*Tabla de multiplicar del numero X utilizando un For, un While y un Do/While*/
	$valor = 2;

	echo "Tabla del numero $valor con FOR <br/>";
	for ($i = 0; $i <= 10; $i++)
	{
		$result = $valor * $i;
		echo $valor . " x " . $i . " = " . $result . "<br/>";
	}

	echo "Tabla del numero $valor con WHILE <br/>";
	$i = 0;
	while ($i <= 10)
	{
		$result = $valor * $i;
		echo $valor . " x " . $i . " = " . $result . "<br/>";
		$i++;
	}

	echo "Tabla del numero $valor con DO/WHILE <br/>";
	$i = 0;
	do	
	{
		$result = $valor * $i;
		echo "$valor  x  $i = $result <br/>";
		$i++;
	}while ($i <= 10);
?>