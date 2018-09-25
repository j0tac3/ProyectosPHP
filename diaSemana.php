<?php
	$diaSemana = rand(1,7);

	echo "Día de la semana: ";
	switch ($diaSemana) {
		case '1':
			echo "Domingo";
			break;
		case '2':
			echo "Lunes";
			break;
		case '3':
			echo "Martes";
			break;
		case '4':
			echo "Miercoles";
			break;
		case '5':
			echo "Jueves";
			break;
		case '6':
			echo "Viernes";
			break;
		case '7':
			echo "Sabado";
			break;
	}

	$arrayDiaSemana = array(1=>"Domingo", 2=>"Lunes", 3=>"Martes", 4=>"Miercoles", 5=>"Jueves", 6=>"Viernes", 7=>"Sabado");

	echo "<br/>Día de la semana: ";
	echo $arrayDiaSemana[$diaSemana];
?>