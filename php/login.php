<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include 'connect_database.php';

$result = $database->query("SELECT * FROM users WHERE name = '" . $_POST["username"] . "' and password = '" . $_POST["password"] . "'");

$row  = mysqli_fetch_array($result);
if(is_array($row)) {
	$_SESSION["username"] = $row['name'];
	$_SESSION["password"] = $row['password'];
	$_SESSION["type"] = $row['type'];
	$_SESSION["loginError"] = 0;
	if($_SESSION["type"] == "admin"){
		header("Location: ../timetrack_admin.html"); 
	}
	else if($_SESSION["type"] == "general"){
		header("Location: ../timetrack_user.html"); 
	}
	
} 
else {
	$_SESSION["loginError"] = 1;
	header("Location: ../login.html");
}

?>