<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

	include 'connect_database.php';

	$rows = $database->query("SELECT * FROM admin_overview WHERE name = '" . $_SESSION["username"] . "'");
	if($rows != FALSE) {
		foreach($rows as $row){
			$output .= '
			<tr>
				<td style="display:none">' . $row['id'] . '</td>
				<td style="text-overflow:clip">' . $row['date'] . '</td>
				<td>' . $row['project'] . '</td>
				<td>' . $row['hours'] . '</td>
				<td>' . $row['description'] . '</td>
			</tr>';
		}
		echo $output;
	}
?>