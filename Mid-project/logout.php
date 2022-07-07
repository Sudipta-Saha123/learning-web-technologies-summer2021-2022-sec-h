<?php 

	session_start();
	session_destroy();
	
	setcookie('status', 'true', time()-3, '/');
	header('location: login.php');
?>