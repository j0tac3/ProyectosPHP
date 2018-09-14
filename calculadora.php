<?php
	echo "<p>Calculadora con PHP</p>";
?>
<?php
	$num1 = 2;
	$num2 = 5;
	echo "La suma de $num1 mas $num2 es ";
	echo $num1 + $num2;
?>
<?php
	echo "<br/>La resta de $num2 menos $num1 es ";
	echo $num2 - $num1;
?>
<?php
	echo "<br/>La multiplicacion de $num1 por $num2 es ";
	echo $num1 * $num2;
?>
<?php
	echo "<br/>La division de $num1 entre $num2 es ";
	echo $num1 / $num2;
?>
<?php
	echo "<br/>El modulo de $num1 entre $num2 es ";
	echo $num1 * $num2;
?>
<?php
	echo "<br/>El incremento de $num1 es ";
	echo ++$num1;
?>
<?php
	echo "<br/>El decremento de $num1 es ";
	echo --$num1;
?>
<?php
	echo "<br/>Es $num1 mayor que $num2? ";
	$resultado = $num1 >= $num2 ? "true" : "false";
	echo "$resultado";
?>
<?php
	echo "<br/>Es $num1 menor que $num2? ";
	$resultado = $num1 <= $num2 ? "true" : "false";
	echo "$resultado";
?>