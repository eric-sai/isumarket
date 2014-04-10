<?php 
include_once "../view/header.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR.xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv"Content-Type" content="text/html; charset=utf-8" />
		
	</head>
	<body>
	
	<?php $user=selectUser($_GET["uid"]);
	// need to check whether the profile has been written or not? 
	?>

		<div>
			<?php 
			if(user_exists($user['username']) === false)
			{
				echo 'That use does not exist';
			}
			if(!profileExits($_SESSION['uid']))
			{
				$page = "../html/userProfile.php";
				header('Location: '.$page);
			}
			else
			{
				?>
				<div class="nav" align="center">
				<h1><?php echo $user['username']. "  "; ?><?php if(isset($_SESSION['uid']) && ($_SESSION['uid'] == $_GET['uid'])) 
					echo "<a href=\"editUserProfile.php?uid={$_SESSION['uid']}\">[Edit]</a>";?></h1>
				<img src="<?php 
					$info = (file_exists("../photos/{$_GET['uid']}.jpg")) ? "../photos/{$_GET['uid']}.jpg" : "../photos/default.jpg";
					echo $info;
					?>" alt="Avatar" />
				<p>Email Address: <?php echo $user['email']; ?></p>
				</div>
				<?php
			}
			?>		
		</div>	
		 <div class="container-fluid">
     <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                 sell list
                </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">
                <div class="accordion-inner">
                 <div class="row">
		       
		            <div id="wrap" >

		              <ul class="thumbnails">
                <?php 
                $tids= getTradeByuid($_GET["uid"]);
                //    echo $tids;
                while($row = mysql_fetch_array($tids))
                {
                	$tid=$row['trade_ID'];
                	$msg=getTrade($tid);
                	echo "<li id='".$msg['trade_ID']."'>";
                	echo  "<img height=100 width=200 alt='' src='../image/".$msg['trade_ID'].".jpg' />";
                	echo "<br clear='all' />";
                	echo  "<div><a href='product.php?tid=".$msg['trade_ID']."'><span class='name'>". $msg['p_name']."  Price</span></a>: $ <span class='price'>" .$msg['price']."</span></div>";
                	echo "</li>";
                }
                ///////////////////////
              
                ?>
                </ul>
		
		<br clear="all" />
	
	                     </div>
	
	</div>	
                </div>
              </div>
            </div>
               <?php if(isset($_SESSION['uid']) && ($_SESSION['uid'] == $_GET['uid'])) 
              {?>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                buy list
                </a>
              </div>
           
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                 <div class="row">
		       
		            <div id="wrap" >

		              <ul class="thumbnails">
                <?php 
               $tids= getOrder($_GET["uid"]);
           //    echo $tids;
               while($row = mysql_fetch_array($tids))
                {
                	
                	////
               	$tid=$row['trade_ID'];
               	$msg=getTrade($tid);
                	echo "<li id='".$msg['trade_ID']."'>";
                	echo  "<img height=100 width=200 alt='' src='../image/".$msg['trade_ID'].".jpg' />";
                	echo "<br clear='all' />";
               	echo  "<div><a href='product.php?tid=".$msg['trade_ID']."'><span class='name'>". $msg['p_name']."  Price</span></a>: $ <span class='price'>" .$msg['price']."</span></div>";
                	echo "</li>";
                }
                ?>
                </ul>
		
		<br clear="all" />
	
	                     </div>
	
	</div>	
                   </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                 message list
                </a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
            
                <?php 
               $tids= getTradeByuid($_GET["uid"]);
           //    echo $tids;
               while($row = mysql_fetch_array($tids))
                {
               	$tid=$row['trade_ID'];
           //    	echo $tid;
               	$trade=getTrade($tid);
            //   	echo $trade['p_name'];
               	$row1=mysql_fetch_array(getReplys($tid));
           //    	echo $row1['username'];
             //  	while($row1=mysql_fetch_array(getReplys($tid)))
              // 			{
            //   echo $row1['username'];
                
               	if(($row1['username']!=null) && ($row1['username']!=$_SESSION['username']))
               	{
                	echo "<li id='".$trade['trade_ID']."'>";
                //	echo $row1[1];
                	echo 	"<div><a href='product.php?tid=".$trade['trade_ID']."'>". $trade['p_name']."</a>: ".$row1['username']." :".$row1['message'];
                	echo "<br clear='all' />";
                    echo "</li>";
               	}
              // 			}
                }
                ?>
                
                 
                   </div>
              </div>
            </div>
          </div>
    </div>
    <?php }?>
	</body>
<script type="text/javascript" src="../script/jquery.js"></script>
<script type="text/javascript" src="../script/bootstrap-collapse.js"></script>

<?php include_once "../view/footer.php";?>


</html>


