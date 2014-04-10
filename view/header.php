<?php include "../configuration/init.inc.php"?>

 <!-- The majority of HTML and all CSS here is from Bootstrap bt Twitter. Used with love and highly reccomended. -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ISU Market</title>
    <link href="../html/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="../html/bootstrap-responsive.css" rel="stylesheet">
 
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="../html/index.php">ISU Market</a>
          <div class="nav-collapse">
            <ul class="nav pull-right">
              <li><a href="../html/cart.php">View Cart/Check Out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
	<div>
	<div class="span2 title">
      <h1>ISU market</h1>
	  <p class="lead">Only the best!</p>
	</div>
	<div class="span2">&nbsp;</div>	
	<div class="span1">&nbsp;</div>	
	<div class="span1">&nbsp;</div>	
	<div class="span1">&nbsp;</div>	
	<div class="span1">&nbsp;</div>	
   <div class="span3 customer_service">
						<h4>FREE delivery on ALL orders</h4>
						<h4><small>Customer service: 0800 8475 548</small></h4>
					</div>
					</div>
					<div class="row"><!-- start nav -->
			<div class="span12">
			  <div class="navbar">
					<div class="navbar-inner">
					  <div class="container" style="width: auto;">
	<ul class="nav nav-pills" >
			
			<?php
			if(isset($_SESSION['uid'])) 
			{
			$id=$_SESSION['uid'];
				echo "<li><a href='../html/userHomePage.php?uid=". $id."'>".$_SESSION['username'].".ISUM</a></li>";
				echo "	<div class='span1'>&nbsp;</div>	";
				echo "<li><a href='../control/logout.php'> Log Out!</a></li>";
				echo "	<div class='span1'>&nbsp;</div>	";
				echo " <li><a href='../html/addtrade.php'>sell</a></li>";
			}
			else
			{
			echo "<li><a href='register.php'> You.ISUM</a></li>";
			}
			?>
			<div class='span1'>&nbsp;</div>	
			<li>
            <a href="../html/todayDeal.php">today's deal</a></li>
            <div class='span1'>&nbsp;</div>
            <li>
            <a href="../html/help.php">Help</a></li></ul>
	 <ul class="nav pull-right">
						   <li class="divider-vertical"></li>
							<form class="navbar-search" action="../html/search.php" method="get">
								<input type="text" class="search-query" id="search" name="search" placeholder="Search">
								<button class="btn btn-primary btn-small search_btn" type="submit">Go</button>
							</form>
							
						  
	</ul>
	
  </div>
					</div><!-- /navbar-inner -->
				</div><!-- /navbar -->
			</div>
		</div><!-- end nav -->
		 </head>