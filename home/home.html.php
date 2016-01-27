<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Página de Prácticas</title>
</head>
<body>
	<h1>Página de prácticas</h1>
	<?php if ( !isset( $_SESSION['user'] ) ) : ?>
		<a href="login">Login</a>
	<!-- Enlaces que deben aparecer cuando el usuario esté logueado
	     con las sesión creada 
	<a href="upload">Subir práctica</a> - 
	<a href="logout">Salir</a> -->
	<?php else : ?>
		<a href="../upload">Subir práctica</a>
		<a href="../logout">Salir</a>
	<?php endif ; ?>
	<ul>
		<li>#1 - ejercicio.docx</li>
		<li>#2 - practica.html</li>
		<li>#3 - tarea.pdf</li>
		<li>#4 - trabajo.jgp</li>
		<li>#5 - practica.odt</li>
	</ul>
</body>
</html>