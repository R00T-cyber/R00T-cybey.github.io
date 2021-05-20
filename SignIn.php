<!DOCTYPE html>
<html>
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="SignIn.css" rel="stylesheet" />
<head>
	<title>SignIn</title>
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

  
    <div class="container">
  
  <div class="inner-container">
   
    <div class="box">
      <h1>Sign In</h1>
       <form action="includes/SignIn.inc.php" method="post">

          <input type="text" name = "semail" placeholder="Email"/>
          <input type="password" name = "spassword" placeholder="Password"/>        
          <button name ="submit">Sign In</button>

        </form>

        <p><a href="ForgotPassword.php">Forgot Password?</a></p>
        <p>Not a member? <span><a href="SignUp.php">Sign Up</a></span></p>   
          
    </div>
    <?php 
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields</p>";
          }
          else if ($_GET["error"] == "Wronglogin") {
            echo "<p>Make Sure your Email is correct</p>";
          }           
        }
     ?>
  </div>
        
</div>
</body>
</html>
