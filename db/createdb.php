<?php  
	
	require_once 'connectdb.php';

	global $pdo;

	try {
		
		$sqlAlumnos = "CREATE TABLE alumnos (
		id 						INT AUTO_INCREMENT PRIMARY KEY,
		nombre 					VARCHAR(100),
		email 					VARCHAR(100),
		password				VARCHAR(250)
		) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB;";

		$pdo -> exec($sqlAlumnos);

		$sqlArchivos = "CREATE TABLE archivos (
		id 							INT AUTO_INCREMENT PRIMARY KEY,
		id_alumno 					INT,
		nombre_archivo 				VARCHAR(250),
		createdat 					TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			FOREIGN KEY (id_alumno) REFERENCES alumnos (id)
					ON UPDATE CASCADE
					ON DELETE SET NULL
		) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB;";

		$pdo -> exec($sqlArchivos);

	} catch (PDOException $e) {
		
		die("No se ha podido crear la base de datos :". $e->getMessage());

	}

?>