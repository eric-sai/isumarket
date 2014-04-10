<?php include "../view/header.php";
//input email and address

?>
<h4>Billing information</h4>

 <form action="../control/makeOrder.php" method="post" id="register-form" >
   <label>shipping address</label>
   <input type="text"  name="shipAddress" id="shipAddress" required>
   <label>payInfo</label>
	<input type="text" name="payInfo" id="payInfo"class="input-xlarge" required>
		    <div>
							<button class="btn btn-primary">make a order</button>
						</div>
    
  </form>