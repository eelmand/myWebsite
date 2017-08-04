<?php
	include 'connect_database.php';

	$rows = $database->query("SELECT * FROM projects");
	if($rows != FALSE) {
		echo "<select name='project-option'>"; 
		foreach($rows as $row){
			echo "<option value = '".$row['project_name']."'>".$row['project_name']."</option>"; 
 		}
 		echo "</select>"; 
	}
?>