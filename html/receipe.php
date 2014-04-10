<?php
include '../view/header.php'; 
?>
<h4>Thank you for your purchasing!</h4>
<h3>Order Information</h3>
<?php
//print out all the information.
$cartTotal=0;
?>
<table width="100%" border="1" cellspacing="0" cellpadding="6">
<tr>
<td width="18%" bgcolor="#C5DFFA"><strong>Product</strong></td>
<td width="45%" bgcolor="#C5DFFA"><strong>Product Description</strong></td>
<td width="10%" bgcolor="#C5DFFA"><strong>Unit Price</strong></td>
<td width="9%" bgcolor="#C5DFFA"><strong>Quantity</strong></td>
<td width="9%" bgcolor="#C5DFFA"><strong>Total</strong></td>
</tr>
<?php 
foreach ($_SESSION["cart_array"] as $each_item) {
	$item_id = $each_item['item_id'];
	$trade=getTrade($item_id);
	$price=$trade['price'];
	$product_name=$trade['p_name'];
	$details=$trade['description'];	
	$pricetotal = $price * $each_item['quantity'];
	$cartTotal = $pricetotal + $cartTotal;
	echo "<tr>";
	echo '<td><a href="product.php?id=' . $item_id . '">' . $product_name . '</a><br /><img src="../image/' . $item_id . '.jpg" alt="' . $product_name. '" width="40" height="52" border="1" /></td>';
	echo  '<td>' . $details . '</td>';
	echo '<td>$' . $price . '</td>';
	echo '<td>' . $each_item['quantity'] . '</td>';
	echo '<td>' . $pricetotal . '</td>';
	
	
	
	
	//step1:change the quantity of trade, according the trade_ID
//	updateQuantity($item_id,$each_item['quantity']);
	//step2:add $_Session['uid'], trade_ID, $_Post['shippAddress'], $_Post['payInfo'], $orderTime into makeorder
//	insertOrder($_SESSION['uid'],$item_id,$_POST['shipAddress'],$_POST['paymentInfo'],$each_item['quantity']);
	//step3: drop to the recipe page to printout all the trade Information
}
echo "</table>";
$cartTotal = "<div style='font-size:18px; margin-top:12px;' align='right'>Cart Total : ".$cartTotal." USD</div>";
echo $cartTotal;
echo "<h3>shipping information:</h3>";
echo "<h5> ship to:". $_GET['shipAddress']."</h5>";
unset ($_SESSION['cart_array']);
unset ($_SESSION['cartTotal']);
echo "<a href='index.php'> back to homepage</a>";
?>