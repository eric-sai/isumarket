<?php 

 include "../view/header.php";
 
//var_dump($_SESSION);

//if(isset($_SESSION['uid']) &&  ($_SESSION['uid'] != $_GET['uid']))
//{
//	header("Location:edit_profile.php?uid=".$_SESSION['uid']);
//}
echo $_SESSION['uid'];
if(isset($_POST['lastname'], $_POST['firstname'],$_POST['sex'],$_POST['address'],$_POST['username'],$_POST['email']))
{
	
	if(empty($_FILES['avatar']['tmp_name']) === false)
	{
		$temp = explode('.', $_FILES['avatar']['name']);
		$file_ext = end($temp);
		//$file_ext = end(explode('.', $_FILES['avatar']['name']));
		
		if(in_array(strtolower($file_ext), array('jpg', 'jpeg', 'png', 'gif')) === false)
		{
			$errors = 'Your avatar must be an image.';
			header("Location:../html/userProfile.php?error=".$error);
		}
	}
	
	$lastname=$_POST['lastname'];
	$firstname=$_POST['firstname'];
	$sex= $_POST['sex'];
	$address=$_POST['address'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	if(empty($errors))
	{
		updateUserProfile($_SESSION['uid'], $lastname,$firstname,$sex,$address);
		updateUser($username, $email,$_SESSION['uid']);
		//insert photo into the folder with uid.img
		$avatar=(empty($_FILES['avatar']['tmp_name'])) ? false : $_FILES['avatar']['tmp_name'];
		if(file_exists($avatar))
		{
			$src_size = getimagesize($avatar);
			if($src_size['mime'] === 'image/jpeg')
			{
				$src_img = imagecreatefromjpeg($avatar);
			}
			else if($src_size['mime'] === 'image/png')
			{
				$src_img = imagecreatefrompng($avatar);
			}
			else if($src_size['mime'] === 'image/gif')
			{
				$src_img = imagecreatefromgif($avatar);
			}
			else
			{
				$src_img = false;
			}
		
			if($src_img !== false)
			{
				$thumb_width = 150;
				if($src_size[0] <= $thumb_width)
				{
					$thumb = $src_img;
				}
				else
				{
					$new_size[0] = $thumb_width;
					$new_size[1] = ($src_size[1] / $src_size[0]) * $thumb_width;
					$thumb = imagecreatetruecolor($new_size[0], $new_size[1]);
					imagecopyresampled($thumb, $src_img, 0, 0, 0, 0, $new_size[0], $new_size[1], $src_size[0], $src_size[1]);
				}
					
				imagejpeg($thumb, "../photos/{$_SESSION['uid']}.jpg");
			}
		}
	//update user table and user's profile table
		$page = "../html/userHomePage.php?uid=" . $_SESSION['uid'];
		header('Location: '.$page);
	}
		
}



?>