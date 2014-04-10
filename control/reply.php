<?php include "../configuration/init.inc.php"?>
<?php
	insertReply($_SESSION["uid"],$_SESSION["tid"],$_POST["reply"]);
	
	
	$page = "../html/Product.php?tid=".$_SESSION["tid"];
	header('Location: '.$page);
?>