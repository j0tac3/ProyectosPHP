<?php
//Se genera un numero aleatorio entre 20 y 60
$numero = rand(20, 60);
//Se muestra por pantalla el numero generado
echo "$numero<br/>";
//Se crean dos arrays asosiativos cons los equivalentes valores
$arrayDecena = array(2=>"Veinte", 3=>"Treinta", 4=>"Cuarenta", 5=>"Cincuenta", 6=>"Sesenta");
$arrayUnidad = array(1=>"uno", 2=>"dos", 3=>"tres", 4=>"cuatro", 5=>"cinco", 6=>"seis", 7=>"siete", 8=>"ocho", 9=>"nueve");
//Se calcula tanto el valor de la decena como el de la unidad
$decena = intval($numero/10);
$unidad = $numero%10;
//Se muestra por pantalla el valor del array correspondiente al valor numerico de la decena
echo $arrayDecena[$decena];
//Si el numero tiene unidad
if ($numero%10 != 0)
{
	//Se muestra por pantalla el valor del array correspondiente al valor numerico de la unidad
	echo " y " . $arrayUnidad[$unidad];
}
?>