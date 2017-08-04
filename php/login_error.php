<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if($_SESSION["loginError"]){
	echo '<p class="text-center" style="color:red">Invalid login - please try again.</p>';
	$_SESSION["loginError"] = 0;
}

?>