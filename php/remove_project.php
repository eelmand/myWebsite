<?php
	include 'connect_database.php';

	$statement = $database->prepare("DELETE FROM projects WHERE project_name=?");
	$statement->bind_param("s", $project_name);
	$project_name = $_POST['project-option'];
	$statement->execute();
	
	header("Location: ../timetrack_admin.html");
?>