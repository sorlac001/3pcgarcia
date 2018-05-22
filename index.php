<!DOCTYPE HTML>
<html>
	<head>
		<meta charset='UTF-8'>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Index</title>
	</head>
		<body>
		<div class="header">
			<h1>Inicio</h1>
		</div>
		<div class="contenido">
			<div class="formulario">
				<form action="alta.php" method="post">
					<fieldset>
						<legend>Porporcione sus datos personales</legend>
						<label for="nombre">Nombre:</label><input type="text" name="nombre" required><br /><br />
						<label for="apaterno">Apellido paterno:</label><input type="text" name="apaterno" required><br /><br />
						<label for="amaterno">Apellido materno:</label><input type="text" name="amaterno"><br /><br/>
						<label for="user">Nombre de usuario:</label><input type="text" name="user" required><br /><br />
						<label for="pass">Contraseña:</label><input type="password" name="pass" required><br /><br />
						<input class="boton" type="submit" value="Enviar">
					</fieldset>
				</form>
			</div>
		</div>
		<div class="footer">
			<a href="contacto.php">Conctacto</a>
			<a href="consulta.php">Consulta</a>
			<a href="creditos.php">Creditos</a>
		</div>
	</body>
		<script src="js/jquery-3.3.1.js"></script>
		<script src="js/main.js"></script>
		<script src="js/jquery.validate.js"></script>
		<script>
			$("#formulario").validate();
		</script>
</html>
