<?php

$database = new mysqli("localhost", "davideelman", "timetrack", "pbtimetrack");
if ($database->connect_errno) {
    echo "Failed to connect to MySQL: (" . $database->connect_errno . ") " . $database->connect_error;
    header("Refresh:3");
}

?>