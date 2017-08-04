<?php
	include 'connect_database.php';

	$statement = $database->prepare("DELETE FROM users WHERE name=?");
	$statement->bind_param("s", $name);
	$name = $_POST['username'];
	$statement->execute();
	
	header("Location: ../timetrack_admin.html");
?>