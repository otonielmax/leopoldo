<?php
	session_start();

	if (isset($_SESSION['nombre1'])) {
		$_SESSION = array();	
	}
	session_destroy();
	
	header("Location: login.php");
?>