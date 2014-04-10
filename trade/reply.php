<?php include "../configuration/init.inc.php"?>
<?php
	insertReply($_SESSION["uid"],$_SESSION["tid"],$_POST["reply"]);
	
	$page = "Product.php";
	header('Location: '.$page);
?>