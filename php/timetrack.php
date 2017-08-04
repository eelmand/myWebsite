<?php	
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

	include 'connect_database.php';
	
	$statement = $database->prepare("INSERT INTO admin_overview (date, name, project, hours, description) VALUES(?,?,?,?,?)");
	$statement->bind_param("sssds", $date, $name, $project, $hours, $description);
	

	$name = $_SESSION["username"];
	$date = $_POST['date'];
	//$start_time = $_POST['start-time'];
	//$end_time = $_POST['end-time'];
	$hours = $_POST['hours-worked'];
	$project = $_POST['project-option'];
	$description = $_POST['work-done'];

	//$time_start = strtotime($start_time);
	//$time_end = strtotime($end_time);
	//$time_worked = $time_end - $time_start;
	//$hours_temp = explode(".", date("H.i",$time_worked));
	//$hours = ($hours_temp[0] + "." + ($hours_temp[1]/60));

	$statement->execute();
	$_SESSION['hoursSubmitted'] = True;
	header("Location: ../timetrack_user.html");
?>