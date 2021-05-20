<?php

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:green;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>


<!DOCTYPE html>
<html>
<head>

	<title>Shopping Cart</title>

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="Cart.css">

</head>
<body>


	  <header>
       <div class="container-fluid nav-wrapper bg-dark py-0 fixed-top">

         <h1 class="logo"> <span><img src= "Images/Lunatic_Logo.jpg" width="46.95" height="28"> </span> Lunatic Brain</h1>

            <nav>
              <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Shop.php">Shop</a></li>
                <li><a href="SignIn.php">Sign In</a></li>
                <li><a href="SignUp.php">Sign Up</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
                <li><a href="Cart.php"><img src="cart-icon.png"/> Cart</a></li>
              </ul>
            </nav>

        </div>
  </header> 


  <div style="padding-top: 100px " class ="cart container">
  	<h2>Shopping Cart</h2>


<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="emptyDiv cart align-content-center">
	<?php
	if(isset($_SESSION["shopping_cart"])){
	    $total_price = 0;
	?>	
	<table class="table">
	<tbody>
	<tr>
	<td></td>
	<td>ITEM NAME</td>
	<td>QUANTITY</td>
	<td>UNIT PRICE</td>
	<td>ITEMS TOTAL</td>
	</tr>	
	<?php		
	foreach ($_SESSION["shopping_cart"] as $product){
	?>
	<tr>
	<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
	<td><?php echo $product["name"]; ?><br />
	<form method='post' action=''>
	<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
	<input type='hidden' name='action' value="remove" />
	<button type='submit' class='remove'>Remove Item</button>
	</form>
	</td>
	<td>
	<form method='post' action=''>
	<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
	<input type='hidden' name='action' value="change" />
	<select name='quantity' class='quantity' onchange="this.form.submit()">
	<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
	<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
	<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
	<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
	<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
	</select>
	</form>
	</td>
	<td><?php echo "R".$product["price"]; ?></td>
	<td><?php echo "R".$product["price"]*$product["quantity"]; ?></td>
	</tr>
	<?php
	$total_price += ($product["price"]*$product["quantity"]);
	}
	?>
	<tr>
	<td colspan="5" align="right">
	<strong>TOTAL: <?php echo "R".$total_price; ?></strong>
	</td>
	</tr>
	</tbody>
	</table>
	<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
	<div>
	<a href="Shop.php"><button type="button" class=" ConShop btn btn-dark">Continue Shopping</button></a>
	<a href="Billing.php"><button type="button" class="btn btn-dark" style="float:right;">Checkout</button></a>
	</div>		
	  <?php
	}else{
		echo "

		<style> 
		.emptyDiv {
  			background-color: white;
		}
		</style>
		<style> 
		.emptyCart {
  			display: flex;
  			justify-content: center;
		}
		</style>
		<div class='emptyCart'><img src='empty-cart-icon.png' width='200' height='200'></div>
		<h3 style = 'text-align: center;'>Your cart is empty!</h3>
		<div class ='col-md-12 text-center' ><a href='Shop.php'><button type='button' class='btn btn-dark' style='float:center;''>Return to Shop</button></a></div>";

		}
	?>
</div>

<div style="clear:both;"></div>
<script src="scripts/Lunatic_jav.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="bootstrap/js/popper.min.js"></script>
<script type="bootstrap/js/jquery-3.6.0.min.js"></script>
</body>
</html>