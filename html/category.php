<?php 
include '../view/header.php';
	if(isset($_GET["page"])){
				$page=$_GET["page"];
			}
			else{
				$page=1;
			}
$relation='';
$orderAttribute="post_time Desc";
$selectlist=array("category");
$result=matchingLimit($selectlist,array($_GET['cal']),$relation, $orderAttribute,($page-1)*8,8);
?>
<html>
<body>
    <div class="container">
		
		<div class="row"><!-- start nav -->
			<div class="span12">
			  <div class="navbar"></div><!-- /navbar -->
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
             </div><!-- end sidebar -->		
          </div>
          
          <div class="span7 popular_products">
		        <h4>Newest products</h4><br />
		        <div class="row">
		       
		            <div id="wrap" >

		              <ul class="thumbnails">
		             
		                 <?php
						 	if(mysql_num_rows($result)===0){
								echo "<li></li>No search result";
							}
		                      while($msg = mysql_fetch_array($result))
  		                              {
  		                              if($msg['state']=="selling")
  		                              {
		                               echo "<li id='".$msg['trade_ID']."'>";
		                               echo " <form action='cart.php' method='post'>";
                                       echo  "<img height=100 width=200 alt='' src='../image/".$msg['trade_ID'].".jpg' />";
                                       echo "<br clear='all' />";
                                       echo  "<div><a href='product.php?tid=".$msg['trade_ID']."'><span class='name'>". $msg['p_name']."  Price</span></a>: $ <span class='price'>" .$msg['price']."</span></div>";
                                       echo "<input type='hidden' name='pid' id='pid' value='".$msg['trade_ID']. "'/>";
                                       
                                      // echo "<input type='hidden' name='cal' id='cal' value='".$_GET['cal']. "'/>";
                                      if (isset($_SESSION['uid']) )
                                      {
                                       echo"<button class='btn btn-primary'>Add </button>";
                                      }
                                      else {echo "please register our website to get chance for shopping!";
                                      }
                                     echo "</form>" ;   
                                      echo "</li>"; 
                                      $_SESSION['category']=$_GET['cal']; 
  		                              }
                                       
                                      
  		  }
		?>
			
		</ul>
		
		<br clear="all" />
	
	                     </div>
	<?php
		  
          	echo '<a href="?page=1&cal='.$_GET['cal'].'"> 1 </a><a href="?page='.($page+1).'&cal='.$_GET['cal'].'"> next</a>';
		  ?>
	</div>	
	</div>	
	
</div>
	
</body>
<?php include "../view/footer.php"?>
</html>


