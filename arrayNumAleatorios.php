<?php
	$numAleatorio = rand(1, 10); //creamos un numero aleatorio
	$suma = 0;

	for($indice = 0; $indice < $numAleatorio; $indice++)
	{// Llenamos el array con la cantidad de elementos igual al valor de numAleatorios
		$arrayAleatorio[] = rand(1, 100); //Añadimos un numero aleatorio
		echo "$arrayAleatorio[$indice], ";
	}
	$indiceFinal = count($arrayAleatorio) - 1; //Hallamos ultimo indice del array

	if (count($arrayAleatorio) > 2)
	{// Si tiene mas de dos elementos
		for ($indice = $indiceFinal; $indice > ($indiceFinal - 3); $indice--)
		{//Sumamos los ultimos tres elementos
			$suma += $arrayAleatorio[$indice];		
		}
	}
	else if (count($arrayAleatorio) == 2)
	{//Si tiene dos elementos sumamos los dos
		$suma = $arrayAleatorio[0] + $arrayAleatorio[1];
	}
	else
	{//Si solo tiene doun elemento
		$suma = $arrayAleatorio[0];
	}
	echo "<br>La suma es $suma";

	if ($suma >= 1 && $suma <= 10)
	{
		echo "<br>El resultado esta entre 1 y 10";
	}
	else if ($suma > 10 && $suma <= 20)
	{
		echo "<br>El resultado esta entre 10 y 20";
	}
	else if ($suma > 20)
	{
		echo "<br>El resultado es mayor que 20";
	}
?>