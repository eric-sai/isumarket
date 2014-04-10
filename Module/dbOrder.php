<?php
//insert post infomation
	function insertOrder($uid,$tid,$shipAddress,$payinfo,$quantity){
		$tempsql="insert into makeorder values('".$uid."','".$tid."',now(),'".$shipAddress."','".$payinfo."','".$quantity."')";
	//	echo $tempsql;	
		return mysql_query($tempsql);
	}
	
	//search orders according to uid, return tid
	function getOrder($uid){
		$sql_query = "SELECT trade_ID,quantity,orderTime FROM makeorder WHERE `consumer_id`=".$uid;
	//	echo $sql_query;	
		$result = mysql_query($sql_query);
		//print_r($result);
		return $result;
	}
?>