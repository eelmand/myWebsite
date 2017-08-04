<?php
	include 'connect_database.php';

	$statement = $database->prepare("INSERT INTO projects (project_name) VALUES(?)");
	$statement->bind_param("s", $project_name);
	$project_name = $_POST['project-name'];
	
	$statement->execute();

	header("Location: ../timetrack_admin.html");
?>