<?php include "../configuration/init.inc.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	
	
	//upload product infomation to database
	
	$tid=insertTrade($_POST["pname"],$_POST["category"],$_POST["price"],$_POST["description"],$_POST["quantity"]);
//	echo $tid;
	
	insertPost($_SESSION["uid"],$tid);
	//UploadImage
	//insert photo into the folder with uid.img
		$image=(empty($_FILES['img']['tmp_name'])) ? "*********" : $_FILES['img']['tmp_name'];
		echo $image;
		if(file_exists($image))
		{
			$src_size = getimagesize($image);
			if($src_size['mime'] === 'image/jpeg')
			{
				$src_img = imagecreatefromjpeg($image);
			}
			else if($src_size['mime'] === 'image/png')
			{
				$src_img = imagecreatefrompng($image);
			}
			else if($src_size['mime'] === 'image/gif')
			{
				$src_img = imagecreatefromgif($image);
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
					
				imagejpeg($thumb, "../image/{$tid}.jpg");
			}
		}
	
	//use session send value to trade.php
//	$_SESSION["tid"]=$tid;
	//$_SESSION["pname"]=$_POST["pname"];
	//$_SESSION["category"]=$_POST["category"];
	//$_SESSION["price"]=$_POST["price"];
	//$_SESSION["description"]=$_POST["description"];
	//$_SESSION["quantity"]=$_POST["quantity"];
	
	$page = "../html/Product.php?tid=".$tid;
	header('Location: '.$page);

?>