<?php
// require 'includes/sessions.inc.php';
?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="Pay.css">
<title>Ship and Pay</title>

</head>

<body>
   <header>
       <div class="container-fluid nav-wrapper bg-dark py-0 fixed-top">
        <link rel="stylesheet" type="text/css" href="Pay.css">
         <h1 class="logo"> <span><img src= "Images/Lunatic_Logo.jpg" width="46.95" height="28"> </span> Lunatic Brain</h1>
              <nav>
              <ul>
                <li><a href="logout.php">Log out</a></li>
                <li><a href="#">Help</a></li>
              </ul>
            </nav>
        </div>
  </header>



<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<div class="row container-fluid">
<form class = "col-8">

     <p><h2>Payment Process</h2></p>

      <article class="card">
        <div class="card-body p-5">
          <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">Bank Transfer</a>
            </li>
          </ul>
              <p>Bank accaunt details</p>
              <dl class="param">
                <dt>BANK:</dt>
                <dd>Capitec</dd>
              </dl>
              <dl class="param">
                <dt>Account number:</dt>
                <dd>1658903275</dd>
              </dl>
              <dl class="param">
                <dt>Name:</dt>
                <dd>Takatso Masilela</dd>
              </dl>
              <dl class="param">
                <dt>BRANCH CODE: </dt>
                <dd>470 010</dd>
              </dl>
              <p><strong>Note:</strong> Please make sure you upload the correct document and check if the you used the correct account number.</p>
              <form action="" method="post" enctype="multipart/form-data">
                Please upload the proof of payment:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="button" onclick="window.location.href = 'ordernotification.php';" value="Upload file"/>
              </form>
  
      </article>

</form>
<form class = "col-4 flex-row">
  <div class="d-flex flex-column">
 
    <div class="p-2">
      <h2>Summary(3 items)</h2>
    </div>

    <div class="p-2">
      <p style="color:black;">Subtotal -----------------  R980</p>    
    </div>

    <div class="p-2">
      <p>Shipping </p>
    </div>

    <hr width="300">

    <div class="p-2">
      <p>Total ---------------------  R980</p>
    </div>

  </div>


</form>
</div>

 <footer>
        <hr style="height:5px;border-width:0;color:gray;background-color:gray">
        <center>
            <div id="pageFooter">Copyright | <a href="http://www.yoursite.com/storeadmin/">Admin</a></div>

            <span>&copy; <script>document.write(new Date().getFullYear());</script> Lunatic Brain Inc.&nbsp;| All Rights Reserved </span>
           

        </center>
    </footer>
</body>
</html>
