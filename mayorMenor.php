<?php
	$a = rand(1,10);
	$b = rand(1,10);
	$c = rand(1,10);

	echo "$a<br/>$b<br/>$c<br/>";

	$arrayMayorMenor[] = $a;
	$arrayMayorMenor[] = $b;
	$arrayMayorMenor[] = $c;

	sort($arrayMayorMenor);
	/*if($a == $b && $b == $c)
	{
		echo "Todos los numeros son iguales";
	}
	else
	{
		echo "$arrayMayorMenor[2] es el mayor numero y $arrayMayorMenor[0] el menor numero<br/>";
	}*/
	
	if($a == $b && $b == $c)
	{
		echo "Todos los numeros son iguales<br/>";
	}
	else 
	{
		for ($j = 0; $j < count($arrayMayorMenor) - 1; $j++)
		{
			for ($i = 0; $i < count($arrayMayorMenor) - 1; $i++)
			{
				if ($arrayMayorMenor[$i] < $arrayMayorMenor[$i+1])
				{
					$varTemp = $arrayMayorMenor[$i];
					$arrayMayorMenor[$i] = $arrayMayorMenor[$i+1];
					$arrayMayorMenor[$i+1] = $varTemp;
				}
			}
		}
	}
	echo "$arrayMayorMenor[0] es el mayor numero y $arrayMayorMenor[2] el menor numero<br/>";

/*
	if ($a >= $b && $a > $c)
	{
		if ($b > $c)
		{
			echo "$a es el mayor numero y $c el menor numero";
		}
		else
		{
			echo "$a es el mayor numero y $b el menor numero";
		}
	}
	else if ($b > $a && $b > $c)
	{
		if ($a > $c)
		{
			echo "$b es el mayor numero y $c el menor numero";
		}
		else
		{
			echo "$b es el mayor numero y $a el menor numero";
		}
	}
	else if ($c > $b && $c > $b)
	{
		if ($b > $a)
		{
			echo "$c es el mayor numero y $a el menor numero";
		}
		else
		{
			echo "$c es el mayor numero y $b el menor numero";
		}
	}*/
?>
