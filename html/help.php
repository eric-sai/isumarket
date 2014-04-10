<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <link id="switch_style" href="bootstrap/css/united/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/jquery.rating.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php include "../view/header.php";?>
  </head>

  <body>

    <div class="container">
    
   <div class="row">
	<div class="span3">
	<ul class="breadcrumb">
    <li>Categories</span></li>
</ul>
<div class="span3 product_list">
	<ul class="nav">
		<?php 
		 $val="motos";echo "<li><a href='category.php?cal=".$val ."'>motos </a></li> </br>";	
		 $val="furnitures";echo "<li><a href='category.php?cal=".$val ."'>furnitures </a></li> </br>";
		 $val="sports";echo "<li><a href='category.php?cal=".$val ."'>sports </a></li> </br>";
		 $val="book";echo "<li><a href='category.php?cal=".$val ."'>books </a></li> </br>";
		 $val="rent house";echo "<li><a href='category.php?cal=".$val ."'>rent house </a></li> </br>";
		 $val="wearing";echo "<li><a href='category.php?cal=".$val ."'>wearing </a></li> </br>";
		 $val="electronics";echo "<li><a href='category.php?cal=".$val ."'>electronics </a></li> </br>";
		 $val="others";echo "<li><a href='category.php?cal=".$val ."'>others </a></li> </br>";
		 ?>
	</ul>
	</div>
	</div>
	<div class="span9">
<div class="page-header">
    <h1>Contact us</h1>
  </div>
<p>
please contact with us. We are happy to help you
</p>
 <h2>Our location</h2>
	<h3>Address:</h3>
	<p>Store: ISU market<br />Street address:246 North Hyland<br />Store Town: Ames, IA<br />ZIP:50014</p>	
	<p>phone number: 5111111111</p>
      
  

  <!-- Misc Elements -->
  
  </div><!-- /row -->

	</div>

</div>

</div> <!-- /container -->

</body>
</html>