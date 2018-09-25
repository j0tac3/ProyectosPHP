<html>
	<head>
		<title>Formulario php</title>
	</head>

	<body>
		<form action="visor2.php" method="POST">
			Nombre:<input type="text" name="nombre"><br/>
			Apellidos:<input type="text" name="apellidos"><br/>

			Como has conocido el centro:
			<input type="radio" name="conocer" value="amigos">Amigos
			<input type="radio" name="conocer" value="internet">Internet
			<input type="radio" name="conocer" value="prensa">Prensa
			<input type="radio" name="conocer" value="otros">Otros<br/>

			Idiomas que conoces: 
			<input type="checkbox" name="idioma[]" value="Castellano">Castellano
			<input type="checkbox" name="idioma[]" value="Euskera">Euskera
			<input type="checkbox" name="idioma[]" value="Ingles">Ingles
			<input type="checkbox" name="idioma[]" value="Ingles">Otros<br/>
			
			<br/><br/><input type="submit" value="Enviar">
		</form>
	</body>
</html>