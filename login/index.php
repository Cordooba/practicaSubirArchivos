<?php 

	require_once '../app/conf.php';

	global $base_path;

	session_start();

	if (isset($_GET['loggin'])) {

		if ( htmlspecialchars($_POST['user'], ENT_QUOTES, 'UTF-8') == 'root' && htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8') == 'root') {

			$name = $_POST['user'];

			$_SESSION['user'] = $name;

			header('Location: ../home');
			
		}else{

			echo 'Datos incorrectos';

		}

		exit();

	}else{

		require_once 'login.html.php';

	}

?>