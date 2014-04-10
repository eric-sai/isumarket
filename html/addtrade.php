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
       		<form action="../control/addtradeToDB.php" method="post" id="trade-form" novalidate="novalidate" enctype="multipart/form-data">
  
   				<label>Product name</label>
				<input type="text" value="" name="pname" id="pname" ng-pattern="/^[a-zA-Z0-9]{4,10}$/"  required>	
				<label> category</label>
				<select name="category" id=category multiple>
                  <option value="motos">motos
                  </option> 
                  <option value="furnitures">furnitures
                  </option> 
                    <option value="sports">sports
                  </option>
                    <option value="books">books
                  </option>
                    <option value="rent house">rent house
                  </option>
                    <option value="wearing">wearing
                  </option>
                    <option value="electronics">electronics
                  </option>
                    <option value="others">others
                  </option>
                 </select>
				<label>price</label>
				$<input type="number" value="" name="price" id="price" ng-pattern="/^[0-9]/" required>
                <label>quantity</label>
				<input type="number" name="quantity" id="quantity" ng-pattern="/^[0-9]/" required>
                <label>image</label>
				<div id="preview">
   				<img id="imghead" name="imghead" width=100 height=100 border=0 src='<%=request.getContextPath()%>/images/defaul.jpg'>
				</div>
				<input type="file" id="img" name="img" onChange="previewImage(this)" /> 
    			<label>description</label>
                <input name="description" type="text" id="description" value="" maxlength="255">
		    	<div>
				<button class="btn btn-primary">Add trade</button>
				</div>
    
  			</form>          
  	   </body>
       
<!--upload image script-->
<style type="text/css">
#preview{width:260px;height:190px;border:1px solid #000;overflow:hidden;}
#imghead {filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=image);}
</style>
<script type="text/javascript">


                //鍥剧墖涓婁紶棰勮    IE鏄敤浜嗘护闀溿�
        function previewImage(file)
        {
          var MAXWIDTH  = 260; 
          var MAXHEIGHT = 180;
          var div = document.getElementById('preview');
          if (file.files && file.files[0])
          {
              div.innerHTML ='<img id=imghead>';
              var img = document.getElementById('imghead');
              img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                img.style.marginTop = rect.top+'px';
              }
              var reader = new FileReader();
              reader.onload = function(evt){img.src = evt.target.result;}
              reader.readAsDataURL(file.files[0]);
          }
          else //鍏煎IE
          {
            var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
            file.select();
            var src = document.selection.createRange().text;
            div.innerHTML = '<img id=imghead>';
            var img = document.getElementById('imghead');
            img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
            var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
            status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
            div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
          }
        }
        function clacImgZoomParam( maxWidth, maxHeight, width, height ){
            var param = {top:0, left:0, width:width, height:height};
            if( width>maxWidth || height>maxHeight )
            {
                rateWidth = width / maxWidth;
                rateHeight = height / maxHeight;
                
                if( rateWidth > rateHeight )
                {
                    param.width =  maxWidth;
                    param.height = Math.round(height / rateWidth);
                }else
                {
                    param.width = Math.round(width / rateHeight);
                    param.height = maxHeight;
                }
            }
            
            param.left = Math.round((maxWidth - param.width) / 2);
            param.top = Math.round((maxHeight - param.height) / 2);
            return param;
        }
</script>
    
       <script>
	   src="http://code.angularjs.org/1.1.5/angular.js">
		
	   
	   function validateNum(value) {
			if( /^\d|(\d*\.\d+)*/.test(value)) {
				var length = value.toString().length;
				if(20 <= length || 30 >= length) {
					return true;
				}
				return false;
			}
			return false;
		}
		
	   $("#quantity").blur( function(event) {
			var el = event.target;
			if(validateNum(el.value)){
				return true;
			}
			else{
				
			}
			$(el).focus();	//鍒ゆ柇澶辫触涓嶅厑璁稿叾澶卞幓鐒︾偣銆�
		});
	   
	   </script>
       
		<?php include "../view/footer.php"?>        
</html>