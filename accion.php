<html>
Hola

<?php
$nombre = $_POST["nombre"];
echo "$nombre<br/>";
?>

<?php
$edad = $_POST["edad"];
echo "Usted tiene $edad años<br/>";
?>

<?php
$sexo = $_POST["sexo"];
echo "Su sexo es $sexo<br/>";
?>

<?php
$frutas = $_POST["fruta"];
echo "Frutas:<br/>";
foreach ($frutas as $value) {
	echo "-$value-<br/>";
}
?>

<?php
$color = $_POST["color"];
	echo "Has elegido el color $color<br/>";
?>