<?php
include 'database.php';
session_start();

if(isset($_SESSION['login_user'])){
header("location: home.php"); // Redirecting To Profile Page
}
?>
<?php

 if(isset($_POST["add_to_cart"])){
	 echo '<script>alert("Please log in or Sign Up!!")</script>';  
     echo '<script>window.location="index.php"</script>'; 
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">

    <!-- CSS only -->

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Home.css">
   
     
    <title>Lunatic Brain Clothing</title>

    <style>

        .align-right{
            text-align: right;
            border: 0;
        }
    </style>
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
        <!-- <div style="background-image: url('img_girl.jpg');"> -->
      <section = class="container-fluid">
        <!-- Slideshow container -->
        <div class ="slideshow-container" >

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="images/waterbottles.jpg" style="width:45%" class="center">
        </div>

        <div class="mySlides fade" >
            <img src="images/Lunatic_Logo.jpg" style="width:35%" class="center">
        </div>
  
        <div class="mySlides fade">
            <img src="images/yellow hat.jpeg" style="width:28%" class="center">
        </div>
  
        <div class="mySlides fade">
            <img src="images/hat.jpg" style="width:25%" class="center">
        </div>

        <div class="mySlides fade">
            <img src="images/Hoodie and cap.jpg" style="width:50%" class="center">
        </div>

        <div class="mySlides fade">
            <img src="images/cap.jpg" style="width:35%" class="center">
        </div>

        <div class="mySlides fade">
            <img src="images/couple wearing brand.jpg" style="width:35%" class="center">
        </div>

        <div class="mySlides fade">
            <img src="images/owner.jpg" style="width:35%" class="center">
        </div>
  
        <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        
        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
         </div>
    </section>


    <p>
        <h2><center>All Sales</center> </h2>
    </p>
    <section>
        <div style="background-image: url('Images/clothes.jpg');" style="background-color:" />
        <div class=" pdPic row text-center justify-content-between">
            <div class="col-md-4">
              <img src="images/black & orange shirt.jpeg" alt="T-shirt" >
               <ul class ="ulProducts" >
                <li><b>Black & Orange shirt</b></li>
              </ul>              
            </div>

            <div class="col-md-4">
            <img src="images/black & pink hoodie.jpeg" alt="cap">
              <ul class ="ulProducts">
                <li><b>Black & Pink Hoodie</b></li>
              </ul> 
            </div>

            <div class="col-md-4">
                <img src="images/black hat.jpeg" alt="hat">
                <ul class ="ulProducts">
                <li><b>Black Hat</b></li>
              </ul> 
            </div>

            <div class="col-md-4">
              <img src="images/pink sweater.jpeg" alt="Hoodie">
              <ul class ="ulProducts">
                <li><b>Pink Sweater</b></li>
              </ul>
            </div>

            <div class="col-md-4">
              <img src="images/pants.jpeg" alt="Hoodie">
              <ul class ="ulProducts">
                <li><b>Orange Pants</b></li>
              </ul>
            </div>

            <div class="col-md-4">
              <img src="images/grey shirt.jpeg" alt="Hoodie">
              <ul class ="ulProducts">
                <li><b>Grey shirt</b></li>
              </ul>
            </div>
          </div>
    </section>

    <!-- JavaScript Bundle with Popper -->

    <script src="scripts/Lunatic_jav.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="bootstrap/js/popper.min.js"></script>
    <script type="bootstrap/js/jquery-3.6.0.min.js"></script>
       
    <footer>
        <hr style="height:5px;border-width:0;color:gray;background-color:gray">
        <center>
            <button type="button" class="btn btn-dark">Delivery</button>
            <button type="button" class="btn btn-dark">Pick Up</button>

        </center>
    </footer>

</body>
</html>

