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
<h1>Super Cool Live Comment Box</h1>
<form action="../trade/reply.php" method="post" id="commentform" style="width:400px">

 <div  id="living-effect" class="textarea-wrapper">
  <textarea class="living-textarea validate[required]" id="comment" type="text" placeholder="Your comments..."></textarea>
 </div>  
 
 <div  class="submit-wrapper">
  <input  type="submit"value="reply" id="submit" class="living-submit" style="color:#808080;padding: 10px 46px 11px;margin-left:15px;font-size:14px">
 </div>
 
 <div  class="info-wrapper">
  <div id="comments"></div>
 </div>
</form>
</body>
</html>




