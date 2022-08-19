<?php
//  if(isset($_SESSION['username'])){
//     header('location:login.php');
//  }
// session_start($_SESSION['username'])
// if(!isset($_SESSION['username'])){
//     header("location:login.php");
// }
// include_once('./validation.php');
// session_strart($_GET['username']);
// if(isset($_SESSION['username'])){
// 	header("Location: index.php");
// 	exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/home.css">
    <link rel="icon" href="./images/otaku.png" type="image/x-icon">
    <script src="./style/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Kanit:wght@500&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
    <title>|| श्री ||</title>
</head>
<body>

    <!-- <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <img src="./images/logo-pink.png" alt="">
        <li><a href="">Home</a></li>
        <li><a href="">Custom Pc Build</a></li>
        <li><a href="">Custom Keybord</a></li>
        <li><a href="">Details</a></li>
        <li><a href="">About Us</a></li>
        <li><a href="logout.php">Log Out</a></li>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="./images/logo-pink.png" alt="" class="mylogo-nav"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home.php">Home</a>
      <a class="nav-item nav-link" href="update.php">Update | Delete</a>
		<a class="nav-item nav-link" href="cart_details.php">Orders</a>
      <a class="nav-item nav-link" href="details.php">Details</a>
      <a class="nav-item nav-link" href="logout.php">Log Out</a>
    </div>
  </div>
  
</nav>

<div class="container bbxs">
    <h1 class="fontorio">MANAGE CUSTOMER <br> HARDWARE.</h1>
    <h6 class="fontorio-s">Welcom to SuperPage.</h6>
    <h6 class="fontorio-s">Do whatever your want.</h6>
</div>

</body>
</html>
