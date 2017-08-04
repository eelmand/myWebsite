<?php
	include 'connect_database.php';

	$statement = $database->prepare("INSERT INTO users (name, password, type) VALUES(?, ?, ?)");
	$statement->bind_param("sss", $name, $password, $type);	
	$name = $_POST['username'];
	$password = $_POST['password'];
	if($_POST['admin'] == 'Yes'){
		$type = "admin";
	}
	else{
		$type = "general";
	}
	
	$statement->execute();
	
	header("Location: ../timetrack_admin.html");
?>