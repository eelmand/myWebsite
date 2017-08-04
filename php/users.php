<?php
	include 'connect_database.php';

	$rows = $database->query('SELECT * FROM users');
	if($rows != FALSE) {
		echo "<select name='username'>"; 
		foreach($rows as $row){
			echo "<option value = '".$row['name']."'>".$row['name']."</option>"; 
		}
		echo "</select>"; 
	}
?>