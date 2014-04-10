<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta content="text/html; charset=UTF-8" http-equiv="content-type"></meta>
            <meta charset="utf-8"></meta>
            <meta content="Bootply" name="generator"></meta>
            <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"></meta>
            <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"></link>
            <?php include "../view/header.php"?>
            <link href="/bootstrap/img/favicon.ico" rel="shortcut icon"></link>
            <link href="/bootstrap/img/apple-touch-icon.png" rel="apple-touch-icon"></link>
            <link href="/bootstrap/img/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon"></link>
            <link href="/bootstrap/img/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon"></link>
      </head>
		<body>
        <table width="100%" border="1"> 
        <tr>
            <td width="300" height="300">
            <img src="<?php 
					$info = (file_exists("../image/{$_GET['tid']}.jpg")) ? "../image/{$_GET['tid']}.jpg" : "../image/default.jpg";
					echo $info;
					?>" alt="Avatar" />
            
            </td>
            <td>               
               <table width="100%" border="1"> 
                <?php
					$productInfo=getTrade($_GET['tid']);
					$user=getUidBytid($_GET['tid']);
				//	echo "user:".$uid['post_id'];
                    echo '<tr><td>Product name</td><td>'.$productInfo['p_name'].'</td></tr>';
					echo '<tr><td>category</td><td>'.$productInfo['category'].'</td></tr>';
					echo '<tr><td>price</td><td>'.$productInfo['price'].'</td></tr>';
					echo '<tr><td>quantity</td><td>'.$productInfo['quantity'].'</td></tr>';						
					echo '<tr><td>description</td><td>'.$productInfo['description'].'</td></tr>';
					echo '<tr><td>poster</td><td><a href="userHomepage.php?uid='.$user['user_ID'].'">'.$user['username'].'</a></td></tr>';
                ?>
                </table>
            </td>
        </tr>
        </table>
        <form action="../control/reply.php" method="post" id="commentform">
          <?php
		  $messages=getReplys($_GET['tid']);
		  $_SESSION['tid']=$_GET['tid'];
		  echo '<div class="row">';
		  while($msg = mysql_fetch_array($messages))
  		  {
			  echo '
			  			
						<ul>
							<li>User: <a href="userHomepage.php?uid='.$msg['poster_id'].'">'.$msg["username"].'</a>  &nbsp; &nbsp;&nbsp;&nbsp;	
							&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
							&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
							&nbsp; &nbsp;&nbsp;&nbsp;'.$msg["message"].'</li>
							<li>Time:'.$msg["time"].'</li>
						
					</ul>';
						
					
		  }
			  echo '</div>';
		  ?>
          <div>
            <textarea name="reply" rows="4" id="reply"  type="text" placeholder="Your comments..."></textarea>
          </div>

          <div><input type="submit" value="reply" id="submit" style="color:#808080;padding: 10px 46px 11px;margin-left:15px"></div>
        </form>
        </body>
    </html>