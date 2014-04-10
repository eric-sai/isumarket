<?php	
	//insert reply infomation
	function insertReply($uid,$tid,$msg){
		$tempsql="insert into reply (`poster_ID`,`trade_ID`,`time`,`message`)values('".$uid."','".$tid."',now(),'".$msg."')";
		echo $tempsql;	
		return mysql_query($tempsql);
	}
	
	//search all replys under the product with given trade_id
    function getReplys($tid){		
		$sql_query = "SELECT poster_id, username, message, time FROM user u,reply r WHERE u.user_id=r.poster_id and r.trade_id=".$tid;
	//	echo $sql_query;	
		$result = mysql_query($sql_query);
		
		return $result;
	}
	
?>