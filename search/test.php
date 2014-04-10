<?php include "search.php";
$formname="trade";
$selectlist=array("category");
$keywordlist=array("22222222222");
$orderAttribute="post_time DESC";
$relation='';
$result= matching($selectlist,$keywordlist,$relation, $orderAttribute);
 while($msg = mysql_fetch_array($result))
  		  {
			  print_r($msg);
			  echo"</br>";
		  }
?>