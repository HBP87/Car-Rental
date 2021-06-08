<?php
  $email = $_GET['username'];
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="css/stylebook.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="topnav" id="myTopnav">
    <a href="index.php">Home</a>
    <a href="Booknow.php" class="active">BookNow</a>
    <a href="#Contactus">Contact Us</a>
    <a href="#aboutus">About Us</a>
    <button id="LS">Login/SignUp</button>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>

  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center"><img src="assets/hatchback.jpg" width="100%">
        <a href="hatchback.php?username=<?=$email?>">
          <p>Hatch Back</p>
        </a></div>
      <div class="col-md-4 text-center"><img src="assets/sedan.jpg" width="100%">
        <a href="sedan.php?username=<?=$email?>">
          <p>Sedan</p>
        </a></div>
      <div class="col-md-4 text-center"><img src="assets/suv.jpg" width="100%">
        <a href="suv.php?username=<?=$email?>">
          <p>SUV</p>
        </a></div>
    </div>
  </div>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>


</body>

</html>