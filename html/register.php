<html>
<head>
<?php //also need to delete the script from other website. //check user exit
include "../view/header.php"?>

  <link class="cssdeck" rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="bootstrap-responsive.css" class="cssdeck">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
  
  <link href="runnable.css" rel="stylesheet" />
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
 <script src="http://code.angularjs.org/1.2.3/angular.min.js"></script>
  <script>
 
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#register-form").validate({
    
        // Specify the validation rules
        rules: {
            username: {
             required:true,
                
},
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            repeatPassword:{
               required:true,
               equalTo:"#password"
            } ,
        },
       
        // Specify the validation error messages
        messages: {
            username: {
                required:"Please create correct user name",
                	
                    },           
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address",
            agree: "Please accept our policy"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
</head>
<body>
<?php 
if(empty($_GET['error'] )== false)
{
	
						echo "<li class=\"red\">{$_GET['error']}</li>";
}




?>
  <!--  The form that will be parsed by jQuery before submit  -->
  <div class="" id="loginModal">
  <div class="modal-header">	
		<h3>Have an Account?</h3>
	</div>
  <div class="modal-body">
  <div class="well">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#create" data-toggle="tab">Create Account</a></li>
				<li><a href="#login" data-toggle="tab">LogIn</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
			<div class="tab-pane active in" id="create">
  <form action="../control/register.php" method="post" id="register-form" >
  
                        <label>Username</label>
						<input type="text" value="" name="username" id="username"ng-pattern="/^[a-zA-Z0-9]{4,10}$/" required>
						<label>password</label>
						<input type="password" value="" name="password" id="password"class="input-xlarge" required>
						<label>repeat password</label>
						<input type="password" value="" name="repeatPassword" id="repeatPassword" required >
						<label>Email</label>
						 <input type="email" name="email" id="email" ng-model="text" required>
		    <div>
							<button class="btn btn-primary">Create Account</button>
						</div>
    
  </form>
  </div>
			<div class="tab-pane fade" id="login">
					<form class="form-horizontal" action='../control/login.php' method="POST">
						<fieldset>
							<div id="legend">
								<legend class="">Login</legend>
							</div>    
							<div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="username">Username</label>
								<div class="controls">
									<input type="text" id="username" name="username" placeholder="" class="input-xlarge">
								</div>
							</div>
							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Password</label>
								<div class="controls">
									<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
								</div>
							</div>
							<div class="control-group">
								<!-- Button -->
								<div class="controls">
									<button class="btn btn-success">Login</button>
								</div>
							</div>
						</fieldset>
					</form>                
				</div>
		</div>			
  </div>
  </div>
  </div>
</body>
<?php include "../view/footer.php"?>
</html>