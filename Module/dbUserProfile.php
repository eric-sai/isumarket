<?php

function set_profile_info($userID, $lastname,$firstname,$sex,$address)
{
	mysql_query("INSERT INTO `isumarket`.`user_profile` 
			(`user_ID`, `address`, `sex`, `last_name`, `first_name`) 
			VALUES ('{$userID}', '{$address}', '{$sex}', '{$lastname}', '{$firstname}');"  );
}


function selectUserProfile($id){

        $id = (int)$id;

	$sql_query = "SELECT * FROM `user_profile` WHERE `user_id` = ".$id;
	
	$result = mysql_fetch_assoc (mysql_query($sql_query));
	
	return $result;
}
function updateUserProfile($uid, $lastname,$firstname,$sex,$address){
	$sql_query = "UPDATE `user_profile` SET  `first_name` = '".$firstname."', `last_name` = '".$lastname."', `sex` = '".$sex."', `address` = '".$address."' WHERE `user_ID` = ".$uid;

	if(mysql_query($sql_query)){
		return TRUE;
	}
	else{
		return FALSE;
	}

}
function profileExits($id)
{
	$sql_query = "SELECT address FROM `user_profile` WHERE `user_id` = ".$id;
	$total = mysql_query($sql_query);
	if(mysql_num_rows($total)===0)
		return false;
	else
		return true;
}





function deleteUserProfile($gid){

	$sql_query = "DELETE FROM `userprofile` WHERE `ProfileID` = ".$gid;

	if(mysql_query($sql_query)){
		return TRUE;
	}
	else{
		return FALSE;
	}
}

?>