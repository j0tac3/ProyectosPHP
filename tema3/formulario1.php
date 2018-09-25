<html>
	<head>
		<title>Formulario php</title>
	</head>

	<body>
		<form action="visor1.php" method="POST">
			Nombre:<input type="text" name="nombre"><br/>
			Curso:
			<input type="radio" name="curso" value="primero">2DW3
			<input type="radio" name="curso" value="segundo">2DM3<br/>
			Idiomas que conoces: 
			<input type="checkbox" name="idioma[]" value="Castellano">Castellano
			<input type="checkbox" name="idioma[]" value="Euskera">Euskera
			<input type="checkbox" name="idioma[]" value="Ingles">Ingles<br/>
			Edad:
			<select name="edad">
				<option value="Menos de 20">Menos de 20</option>
				<option value="Entre 20 y 30">Entre 20 y 30</option>
				<option value="Mas de 30">Mas de 30</option>
			</select>>
			<br/><br/><input type="submit" value="Enviar">
		</form>
	</body>
</html>