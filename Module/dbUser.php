<?php

function insertUser($user, $pass, $email,$tag){
    $user = mysql_real_escape_string(htmlentities($user));
    $email = mysql_real_escape_string($email);
    $pass = sha1($pass);
 //   return $pass;
    if(mysql_query("INSERT INTO `user` (`username`, `password`, `email`,tag) VALUES ('{$user}', '{$pass}', '{$email}','{$tag}')"))
    {
        
        return true;
    }
    else
    {
    	$error="data cannot be inserted";
        echo $error;
    }
}
function valid_credentials($user, $pass)
{
	$user = mysql_real_escape_string($user);
//	$pass =3442064;
     $pass = sha1($pass);

	//$total = mysql_query("SELECT * FROM `user` WHERE `username` = '{$user}' AND `password` = ".$pass);
$total = mysql_query("SELECT user_ID FROM `user` WHERE `username` = '{$user}' AND `password` = '{$pass}'");
if(mysql_num_rows($total)===0)
	return false;
else
	return true;
//if(mysql_fetch_array($total) === '0')
//{return "test1";}
//else 
//{return "tst";}
//	return(mysql_result($total, 0) == '1') ? true : false;
	//return ($total == 1);
}
function user_exists($user)
{
	$user = mysql_real_escape_string($user);

	$total = mysql_query("SELECT user_ID FROM `user` WHERE `username` = '{$user}'");

	if(mysql_num_rows($total)===0)
	return false;
else
	return true;
}

function email_exists($email)
{
	$email = mysql_real_escape_string($email);

	$total = mysql_query("SELECT (`user_ID`) FROM `user` WHERE `email` = '{$email}'");

	if(mysql_num_rows($total)===0)
	return false;
else
	return true;
}


function selectUser($id){

        $id = (int)$id;

	$sql_query = "SELECT * FROM `user` WHERE `user_id` = ".$id;
	
$result = mysql_fetch_assoc (mysql_query($sql_query));
	
	return $result;
}


 function updateUser($username, $email,$uid){
$sql_query = "UPDATE `user` SET `username` = '".$username."', `email` = '".$email."' WHERE `user_id` = ".$uid;

if(mysql_query($sql_query)){
return TRUE;
}
else{
return FALSE;
}

}

function selectUserByUsername($username){

    $username = mysql_real_escape_string(htmlentities($username));
    

	$sql_query = "SELECT * FROM `user` WHERE `username` LIKE '{$username}'";
	
	$result = mysql_fetch_assoc (mysql_query($sql_query));
	
	
	return $result;
}


function selectAllUser(){
	$sql_query = "SELECT * FROM `users`";
	
	$result = mysql_query($sql_query);
	
	return $result;
}

function updatePassword($newPassword, $id){

    $id = (int)$id;
    $newPassword = sha1($newPassword);
    
	$sql_query = "UPDATE `users` SET `user_password` = '".newPassword."' WHERE `user_id` = ".$id;
	
	if(mysql_query($sql_query)){
		return TRUE;
	}
	else{
		return FALSE;
	}
	
}

/*
function updateUser($username, $firstname, $lastname, $email, $about, $id){
	$sql_query = "UPDATE `users` SET `user_username` = '".$username."', `user_firstname` = '".$firstname."', `user_lastname` = '".$lastname."', `user_email` = '".$email."', `user_about` = '".$about."' WHERE `user_id` = ".$id;

	if(mysql_query($sql_query)){
		return TRUE;
	}
	else{
		return FALSE;
	}

}*/

function deleteUser($id){

	$sql_query = "DELETE FROM `users` WHERE `user_id` = ".$id;

	if(mysql_query($sql_query)){
		return TRUE;
	}
	else{
		return FALSE;
	}
}

?>