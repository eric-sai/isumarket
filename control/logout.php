<?php
	/*session_unset();
	setcookie();*/

	session_start();
	$username = $_SESSION['username'];
	
	unset($_COOKIE['username']);
	session_destroy();

	//$page = "Main_HomePage.php";
	header("Location:../html/index.php");
	die();
?>