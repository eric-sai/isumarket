    <!DOCTYPE html>
    <html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/jquery.rating.css" rel="stylesheet"><?php include "../view/header.php"?>            
   </head>
  <body>

    <div class="container">
		
		<div class="row"><!-- start nav -->
			<div class="span12">
			  <div class="navbar">
				</div><!-- /navbar -->
			</div>
		</div><!-- end nav -->	 <div class="row">
		<div class="span3">
			<!-- start sidebar -->
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
</div><!-- end sidebar -->		</div>
		  
		  
     <div class="span7">
     <img src="../css/images/carousel_1.jpg" alt="">
     </div>
              
         

		  
		
        <div class="span2">
		
		 <div class="roe">
		<h4>Newsletter</h4><br />
		<p>Sign up for our weekly newsletter and stay up-to-date with the latest offers, and newest products.</p>
		
		    <form class="form-search">
    <input type="text" class="span2" placeholder="Enter your email" /><br /><br />
    <button type="submit" class="btn pull-right">Subscribe</button>
    </form>
		</div><br /><br />
            <a href="#"><img alt="" title="" src="../css/images/paypal_mc_visa_amex_disc_150x139.gif" /></a>
			<a href="#"><img alt="" src="../css/images/bnr_nowAccepting_150x60.gif" /></a>

		</div>
	  
      </div>
<script src="../js/jquery.min.js"></script>
<script src="../script/bootstrap.js"></script>
<script src="../script/jquery.rating.pack.js"></script>
      
</body>
        <?php include "../view/footer.php"?>
    </html>