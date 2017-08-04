<?php
	include 'connect_database.php';

	$statement = $database->prepare("DELETE FROM admin_overview WHERE id=?");
	$statement->bind_param("i", $id);
	$id = $_POST['id'];
	$statement->execute();
?>