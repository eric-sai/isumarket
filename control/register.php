<?php 
include "../configuration/init.inc.php";
//still need to detect whether the username or email exits or not. 
if(isset($_POST['username'], $_POST['password'], $_POST['email']))
{
	//$errors = array();
	
	if(empty($_POST['username']))
	{
	//	$errors[] = 'The username field cannot be empty.';
		$error= 'The username field cannot be empty.';
		header("Location:../html/register.php?error=".$error);
	}
	
	if(user_exists($_POST['username']))
	{
		$error = 'The username you have entered is already in use.';
		header("Location:../html/register.php?error=".$error);
	}
	if(email_exists($_POST['email']))
	{
		$error = 'The email you have entered is already in use.';
		header("Location:../html/register.php?error=".$error);
	}	
	else {
	$username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];  
//    echo $password;
//   echo  $username;
	$tag="0";
	insertUser($username, $password, $email,$tag);
	
	$_SESSION['username'] = htmlentities($_POST['username']);
	$user=selectUserByUsername($_POST['username']);
	//	echo $user['user_ID'];
	$_SESSION['uid']=$id = $user['user_ID'];
	
	//$_SESSION['uid'] = $id = (int)fetch_user_id($_SESSION['username']);
	//the uid should be in encryption
	$page = "../html/userHomePage.php?uid=" . $id;
	header('Location: '.$page);
	}
}
?>