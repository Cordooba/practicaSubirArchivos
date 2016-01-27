<?php
	
	require_once '../app/conf.php';

	global $pdo;

	session_start();

	if (isset($_GET['addImage'])) {

		$nombre = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
		$image = $_POST['practica'];
		$errores = [];

		if (strlen($nombre) === 0) {

			$errores['errorNombre'] = true;

		}

		if (empty($image)) {

			$errores['errorFile'] = true;

		}

		if (empty($errores)) {

			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_tmp = $_FILES['image']['tmp_name'];
			$file_type = $_FILES['image']['type'];
			$file_error =$_FILES['image']['error'];

			try {
				
				$sql = "INSERT INTO archivos (nombre_archivo) VALUES (:nombre_archivo);";

				$ps = $pdo -> prepare($sql);
				$ps -> bindValue(':nombre_archivo', $nombre);
				$ps -> execute();

			} catch (PDOException $e) {
				
				die('Error, no es posible subir el archivo debido a : '. $e->getMessage());

			}

			move_uploaded_file($file_tmp, '/Applications/MampPHP/apache2/htdocs/practicaUpFiles/files/'.$file_name);

		}else{

			require_once 'upload.html.php';

		} 

	}

	require_once 'upload.html.php';

?>