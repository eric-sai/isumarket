
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR.xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv"Content-Type" content="text/html; charset=utf-8" />
		<?php //also need to delete the script from other website. //check user exit
include "../view/header.php"?>

  <link class="cssdeck" rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="bootstrap-responsive.css" class="cssdeck">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  
  <link href="runnable.css" rel="stylesheet" />
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
 <script src="http://code.angularjs.org/1.2.3/angular.min.js"></script>
		<title>Edit Your Profile</title>
	</head>
	<body>
	<div>
	<div class="modal-header">	
		<h4>Edit Profile</h4>
	</div>
		<div>
			<?php 
			
                  if(empty($_GET['error'] )== false)
                  {
	
						echo "<li class=\"red\">{$_GET['error']}</li>";
                    }	
			?>		
		</div>
		<form action="../control/editProfile.php" method="post" enctype="multipart/form-data">
			<div>
				<label for="username">username:</label>
				<input type="text" name="username" id= "username"  required value=
				<?php  echo $_SESSION['username']?>>
			</div>
			
			<div>
				<label for="email">email:</label>
				<input type="email" name="email" id= "email"  required value=
				<?php $user=selectUserByUsername($_SESSION['username']); echo $user['email']?>>
			</div>
			
			<div>
				<label for="firstname">Firstname:</label>
				<input type="text" name="firstname" id= "firstname"  required value=
				<?php $userprofile=selectUserProfile($_SESSION['uid']); echo $userprofile['first_name']?>>
			</div>
			<div>
				<label for="lastname">Last Name:</label>
				 <input type="text" name="lastname" id="lastname" required value=
				<?php $userprofile=selectUserProfile($_SESSION['uid']); echo $userprofile['last_name']?>>
			<div>
					<label for="avatar">original:</label>
						<img src="<?php 
					$info = (file_exists("../photos/{$_SESSION['uid']}.jpg")) ? "../photos/{$_SESSION['uid']}.jpg" : "../photos/default.jpg";
					echo $info;
					?>" alt="Avatar" />
					change:
					<input type="file" name="avatar" id="avatar" />
			</div>
			<div>
				<label for="address">address:</label>
				
				<input type="text" name="address" id="address"  value=
				<?php echo $userprofile['address'];?>/>
				<?php echo"your address: ". $userprofile['address'];?>
			</div>
			<div>
                 <label > sex 
                        <input type="radio" name="sex" id="sex" value="female"> female
                        <input type="radio" name="sex" id="sex" value="male"> male 
                 </label>
            </div>
			<div class="controls">
								<button class="btn btn-primary">Submit</button>
								</div>
		
	
	
		</form>
	</div>
	</body>
</html>
