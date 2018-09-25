<?php
	$arrayNumeros = RellenarArayAleatorio();

	$sumaElementos = SumarNumerosArray($arrayNumeros);
	$promedio = CalcularPromedio($sumaElementos, count($arrayNumeros));

	if ($promedio < 6)
	{
		echo "El promedio de los elementos del array ($promedio) es INFERIOR a 6";
	}
	else if ($promedio > 6)
	{
		echo "El promedio de los elementos del array ($promedio) es SUPERIOR a 6";
	}
	else
	{
		echo "El promedio de los elementos del array ($promedio) es IGUAL a 6";
	}

	function RellenarArayAleatorio()
	{
		for ($i = 0; $i < 5; $i++)
		{
			$arrayAleatorio[] = (rand(1, 10));
			echo "Elemento $arrayAleatorio[$i]<br/>";
		}
		return $arrayAleatorio;
	}

	function SumarNumerosArray($arraySumar)
	{
		$sumTotal = 0;
		foreach ($arraySumar as $valor) {
			$sumTotal += $valor;
		}
		return $sumTotal;
	}

	function CalcularPromedio($valorTotal, $nElementos)
	{
		$resultado = $valorTotal / $nElementos;
		return $resultado;
	}
?>