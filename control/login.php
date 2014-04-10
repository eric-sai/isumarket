<?php
//check log in, if not return back.
//how to identify the return figures 
include "../configuration/init.inc.php";

if(isset($_POST['username'], $_POST['password']))
{
	if(empty($_POST['username']))
	{
		$error = 'The username cannot be empty.';
		header("Location:../html/register.php?error=".$error);
	}

	if(empty($_POST['password']))
	{
		$error = 'The password cannot be empty.';
		header("Location:../html/register.php?error=".$error);
	}
// valid_credentials still didn't finish. 
    echo $_POST['username'];
    echo $_POST['password'];
//	echo valid_credentials($_POST['username'], $_POST['password']);
	if(valid_credentials($_POST['username'], $_POST['password']) === false)
	{
		$error = 'Username / Password incorrect.';
		header("Location:../html/register.php?error=".$error);
	}

	else
	{
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