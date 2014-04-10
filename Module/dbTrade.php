<?php	
	//upload product infomation to database, set state to selling
	function insertTrade($pname, $category, $price, $description,$quantity){
		$tempsql="insert into trade (`p_name`,`category`,`state`,`price`,`description`,`quantity`)values('".$pname."','".$category."','selling','".$price."','".$description."','".$quantity."')";
		//echo $tempsql;	
		mysql_query($tempsql);
		
		$sql_query = "SELECT max(trade_ID) FROM `trade` WHERE `p_name`='".$pname."' and `category`='".$category."' and `state`= 'selling' and `price`=".$price." and `description`='".$description."' and `quantity`=".$quantity;
	//echo $sql_query;	
		$result = mysql_fetch_assoc (mysql_query($sql_query));
		//echo $result['max(trade_ID)'];
		
		return $result['max(trade_ID)'];
	}
	
	//insert post infomation
	function insertPost($uid,$tid){
		$tempsql="insert into post (`poster_ID`,`trade_ID`,`post_time`)values('".$uid."','".$tid."',now())";
	//	echo $tempsql;	
		return mysql_query($tempsql);
	}
	
	//search a trade by its trade_id
	function getTrade($tid){
		$sql_query = "SELECT * FROM `trade` WHERE `trade_id`=".$tid;
		//echo $sql_query;	
		$result = mysql_fetch_assoc (mysql_query($sql_query));
		//print_r($result);
		return $result;
	}
	function getTradeByuid($uid)
	{
		$sql_query = "SELECT trade_ID FROM post WHERE `poster_id`=".$uid;
		//	echo $sql_query;
		$result = mysql_query($sql_query);
		//print_r($result);
		return $result;
	}
	function getUidBytid($tid)
	{
		$sql_query = "SELECT u.username,u.user_ID FROM post p, user u WHERE `trade_ID`=".$tid." and u.user_ID=p.poster_ID";
		//	echo $sql_query;
	$result = mysql_fetch_assoc (mysql_query($sql_query));
		//echo $re;
		//print_r($result);
		return $result;
	}
	function getPostTime($postTime,$startRecord,$endRecord)
	{
		$sql_query="SELECT * FROM  post p, trade t WHERE  `post_time` > '".$postTime."' and t.trade_ID=p.trade_ID order by post_time Desc limit ".$startRecord.",".$endRecord;
	//	echo $sql_query;
		$result = mysql_query($sql_query);
		return $result;
	}
	function updateQuantity($tid,$quantity)
	{
		$sql_query = "SELECT quantity FROM `trade` WHERE `trade_id`=".$tid;
		//echo $sql_query;	
		$result = mysql_fetch_assoc (mysql_query($sql_query));
	// still have quantity, no change on state
		$new_quantity=$result["quantity"]-$quantity;
	//	$sql_query = "UPDATE trade SET `quantity` = ".$new_quantity." WHERE `trade_ID` = ".$tid;
		if($new_quantity==0){
			$sql_query = "UPDATE trade SET `quantity` = " .$new_quantity.",`state` = 'Ordered' WHERE `trade_ID` = ".$tid;
		}
		else{
			$sql_query = "UPDATE trade SET `quantity` = ".$new_quantity." WHERE `trade_ID` = ".$tid;
		}
		
		if(mysql_query($sql_query)){
			return TRUE;
		}
		else{
			return FALSE;
		}
	//quantity is zero, change state
	
	}
?>