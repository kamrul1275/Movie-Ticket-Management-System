<?php

require_once("config.php");

$name= $_POST['name'];
$mobile= $_POST['mobile'];
$screen= $_POST['screen'];
$price= $_POST['price'];
$seat= $_POST['seat'];
$total= $price*$seat;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Tanvir Ahmed">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap css-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- style css-->
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <!-- font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <style>
  body  {
    background-image: url("avatar/bg.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 470px;
  }
  </style>

  <title>CHAYA CHOBI</title>

</head>


  <body>

    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home-section1.php">CHAYA CHOBI |</a>

  <button class="navbar-toggler" data-toggle="collapse" data-target="#ulli">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse text-center"  id="ulli">
      <ul class="navbar-nav ml-auto">
        <li>
          <a class="nav-link" href="home-section1.php">Home</a>
        </li>
        <li>
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li>
          <a class="nav-link" href="offer-section.php">Upcoming</a>
        </li>
        <li>
          <a class="nav-link" href="movie-section.php">Movies</a>
        </li>
        <li>
          <a class="nav-link" href="about-section1.php">About</a>
        </li>
      </ul>

    </div>
      </div>
      <div style="padding-right:110px;" class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="logout_core.php">Logout</a>
          <a class="dropdown-item" href="changepass.php">Change Password</a>
        </div>
      </div>
    </nav>


    <form style="margin-top:160px;" class="text-center" action="checkout.php" method="POST">
      <div class="row">
        <div class="col-md-3">

        </div>

        <div style="font-size:22px; background:#00000045;  word-spacing: 2px;" class="col-md-3 py-5 border border-primary text-white">
          <p> <b>Name: </b> <i><?php echo "$name"; ?></i> </p>
          <p> <b>Mobile No.: </b> <i><?php echo "$mobile"; ?></i> </p>
          <p> <b>Screen: </b> <i><?php echo "$screen"; ?></i> </p>
          <p> <b>No of seats: <i></b> <?php echo "$seat"; ?></i> </p>
          <p> <b>Price: <i></b> Tk <?php echo "$total"; ?></i> </p>


          <button type="submit"  name="submit" class="btn btn-info">Confirm</button>
        </div>


      </div>

    </form>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
