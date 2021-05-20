<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="SignUp.css" rel="stylesheet" />
	<title>SignUp</title>
  <!-- CSS only -->

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

<div>
    <div class="inner-container">
     
      <div class="box ">
      <h1>Sign Up</h1>
        <form action="includes/SignUp.inc.php" method="post">
          <input type="text" name = "name" placeholder = "Name"/>
          <input type="text"  name = "email" placeholder="Email"/>
          <input type="password" name = "password" placeholder="Password"/>
          <input type="password" name="cpassword"placeholder="Confirm Password"/>       
          <button name = "submit">Sign Up</button>
         
        </form>
      </div>
      <?php 
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields</p>";
          }
          else if ($_GET["error"] == "invalidUsername") {
            echo "<p>Choose a proper name</p>";
          }
          else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper Email</p>";
          }
          else if ($_GET["error"] == "passworddontmatch") {
            echo "<p>Passwords Dont Match</p>";
          }
          else if ($_GET["error"] == "nametaken") {
            echo "<p>Sorry! the name already exist</p>";
          }
           else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
          }
           else if ($_GET["error"] == "none") {
            echo "<p>You have Signed Up!</p>";
          }
        }
     ?>

    </div>
</div>
</body>
</html>
