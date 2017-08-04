<?php
	include 'connect_database.php';
	
	$rows = $database->query('SELECT * FROM admin_overview');
	if($rows != FALSE) {
		foreach($rows as $row){
			$output .= '
			<tr>
				<td style="display:none">' . $row['id'] . '</td>
				<td>' . $row['date'] . '</td>
				<td>' . $row['name'] . '</td>
				<td>' . $row['project'] . '</td>
				<td>' . $row['hours'] . '</td>
				<td style="white-space:normal">' . $row['description'] . '</td>
			</tr>';
		}
		echo $output;
	}
?>