<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8"/>
		<meta name = "viewport" content = "width=device-width"/>
		<link rel = "stylesheet" href = "css/registro.css"/>
		<title>Registro</title>
	</head>

	<body>
		<div class = "pagina">
		<h2>Registro de usuarios</h2>
		</br>
		<p>El siguiente formulario sirve para registrarse en el sistemita</p>
		</br>
		
		<div class = "formulario">
		<form method = "post" action="alta_registro.php">
			<legend>Formulario de registro</legend>
			<fieldset>
				<label for = "nombre">Nombre: </label>
				<input name = "nombre" type = "text" required/>
				</br>
				<label for = "apellidoP">Apellido paterno: </label>
				<input name = "apPaterno" type = "text" required/>
				</br>
				<label for = "apellidoM">Apellido materno: </label>
				<input name = "apMaterno" type = "text"/>
				</br>
				<label for = "telefono">Tel&eacute;fono: </label>
				<input name = "telefono" type = "text" required/>
				</br>
				<label for = "email">Correo electronico: </label>
				<input name = "email" type = "email" required/>
				</br>
				<input type = "submit" name = "enviar" value = "Enviar"/>
			</fieldset>
		</form>
		</div>	
		<a href = "creditos.php">Inicio</a>
		</div>
	</body>
		<script src="jquery-3.3.1.js"></script>
		<script src="jquery.validate.js"></script>
		<script>
			$("#formulario").validate();
		</script>
</html>
