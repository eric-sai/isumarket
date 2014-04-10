
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
	<div class="modal-header">	
		<h4>Profile Insert</h4>
	</div>
		<div>
			<?php 
			if(empty($_GET['error'] )== false)
			{
			
				echo "<li class=\"red\">{$_GET['error']}</li>";
			}			
			?>
					
		</div>
		<form action="../control/profileModify.php" method="post" enctype="multipart/form-data">
			<div>
				<label for="firstname">Firstname:</label>
				<input type="text" name="firstname" id= "firstname"  required title="Please enter your first name here"/>
			</div>
			<div>
				<label for="lastname">Last Name:</label>
				 <input type="text" name="lastname" id="lastname" required title="Please enter your last name here"/>
				</div>
			<div>
					<label for="avatar">Avatar:</label>
					<input type="file" name="avatar" id="avatar" />
			</div>
			<div>
				<label for="address">address:</label>
				
				<input type="text" name="address" id="address" required title="Please enter your hobbies here"/>
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
	
	</body>
</html>
