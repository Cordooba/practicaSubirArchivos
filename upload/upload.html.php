<?php
 
    if( !isset($_SESSION['user']) ){

        header("Location: ../login");
        exit();

    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Página de Prácticas - Subir archivo</title>
</head>
<body>
	<h1>Subir Práctica</h1>
	
	<form action="?addImage" method="POST">
		<div>
		<label for="name">Nombre:</label>
		<input type="text" name="name">
		</div>
		<div>
		<label for="practica">Archivo:</label>
		<input type="file" name="practica">
		</div>
		<div>
		<?php if(isset($errores['errorNombre'])) : ?>
			<p>Nombre no puede ser un campo vacío.</p>
		<?php endif; ?>
		<?php if(isset($errores['errorFile'])) : ?>
			<p>Debes selecionar un archivo.</p>
		<?php endif; ?>
		<input type="submit" value="Subir Archivo">
		</div>
	</form>
</body>
</html>