<?php 
include "../view/header.php";
//variable: $_SESSION["cart_array"], this variable stores the pid 
//this one can 
 foreach ($_SESSION["cart_array"] as $each_item) { 
		$item_id = $each_item['item_id'];
	
 //step1:change the quantity of trade, according the trade_ID
 		updateQuantity($item_id,$each_item['quantity']);
 //step2:add $_Session['uid'], trade_ID, $_Post['shippAddress'], $_Post['payInfo'], $orderTime into makeorder
 		insertOrder($_SESSION['uid'],$item_id,$_POST['shipAddress'],$_POST['paymentInfo'],$each_item['quantity']);
 //step3: drop to the recipe page to printout all the trade Information
     $page = "../html/receipe.php?shipAddress=" . $_POST['shipAddress'];
				header('Location: '.$page);
 }
 

 
?>
