<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Página de Prácticas - Login</title>
</head>
<body>
	<h1>Login</h1>
	
	<form action="?loggin" method="POST">
		<div>
			<label for="user">Usuario:</label>
			<input type="text" name="user">
		</div>
		<div>
			<label for="password">Contraseña:</label>
			<input type="password" name="password">
		</div>
		<div>
			<input type="submit" value="Entrar">
		</div>
	</form>
</body>
</html>