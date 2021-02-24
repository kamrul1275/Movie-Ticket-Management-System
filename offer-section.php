<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Chaya Chobi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500.700'>


<!-- bootstrap css-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- style css-->

<link rel="stylesheet" href="assets/css/style_offer.css" type="text/css">

</head>
<body>

  <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
    <div class="container">
      <a style="font-size: 1.20rem;" class="navbar-brand" href="home-section1.php">CHAYA CHOBI |</a>

<button class="navbar-toggler" data-toggle="collapse" data-target="#ulli">
  <span class="navbar-toggler-icon"></span>
</button>

  <div class="collapse navbar-collapse text-center"  id="ulli">
    <ul class="navbar-nav ml-auto">
      <li>
        <a style="font-size: 0.96rem;" class="nav-link " href="home-section1.php">Home</a>
      </li>
      <li>
        <a style="font-size: 0.96rem;" class="nav-link" href="profile.php">Profile</a>
      </li>
      <li>
        <a style="font-size: 0.96rem;" class="nav-link" href="offer-section.php">Upcoming</a>
      </li>
      <li>
        <a style="font-size: 0.96rem;" class="nav-link" href="movie-section.php">Movies</a>
      </li>
      <li>
        <a style="font-size: 0.96rem;" class="nav-link" href="about-section1.php">About</a>
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
<!-- partial:index.partial.html -->
<br>
<h3 class="title  display-4">Upcoming Movies</h3>

<div id="app" class="container">

    <?php
    // Create connection
    $conn = new mysqli('localhost','root','','website_project');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql= "SELECT * FROM upcoming WHERE avatar='movie1.jpg'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {

    require("umovie1.php");

    }
    }
    $conn->close();

    ?>

    <!--End Movie 1-->
    <?php
    // Create connection
    $conn = new mysqli('localhost','root','','website_project');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql= "SELECT * FROM upcoming WHERE avatar='movie2.jpg'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {

    require("umovie2.php");

    }
    }
    $conn->close();

    ?>

    <!--End Movie 2-->

    <?php
    // Create connection
    $conn = new mysqli('localhost','root','','website_project');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql= "SELECT * FROM upcoming WHERE avatar='movie3.jpg'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {

    require("umovie3.php");

    }
    }
    $conn->close();

    ?>

    <!--End Movie 3-->

    <?php
    // Create connection
    $conn = new mysqli('localhost','root','','website_project');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql= "SELECT * FROM upcoming WHERE avatar='movie4.jpg'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {

    require("umovie4.php");

    }
    }
    $conn->close();

    ?>

    <!--End Movie 4-->

    <?php
    // Create connection
    $conn = new mysqli('localhost','root','','website_project');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql= "SELECT * FROM upcoming WHERE avatar='movie5.jpg'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {

    require("umovie5.php");

    }
    }
    $conn->close();

    ?>

    <!--End Movie 5-->
    <?php
    // Create connection
    $conn = new mysqli('localhost','root','','website_project');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql= "SELECT * FROM upcoming WHERE avatar='movie6.jpg'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {

    require("umovie6.php");

    }
    }
    $conn->close();

    ?>

    <!--End Movie 6-->

    <?php
    // Create connection
    $conn = new mysqli('localhost','root','','website_project');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql= "SELECT * FROM upcoming WHERE avatar='movie7.jpg'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {

    require("umovie7.php");

    }
    }
    $conn->close();

    ?>

    <!--End Movie 7-->

    <?php
    // Create connection
    $conn = new mysqli('localhost','root','','website_project');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql= "SELECT * FROM upcoming WHERE avatar='movie8.jpg'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {

    require("umovie8.php");

    }
    }
    $conn->close();

    ?>

    <!--End Movie 8-->

</div>


<section id="videosec">


  <div class="video">

      <h2 style="margin-top:60px;">Some Movie Trailers You Might Like</h2>


    <div class="slider-sections">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php
    // Create connection
    $conn = new mysqli('localhost','root','','website_project');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql= "SELECT * FROM upcoming_trailer WHERE avatar='movie1.jpg'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {

    require("ulink1.php");

    }
    }
    $conn->close();

    ?>

    <?php
    // Create connection
    $conn = new mysqli('localhost','root','','website_project');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql= "SELECT * FROM upcoming_trailer WHERE avatar='movie2.jpg'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {

    require("ulink2.php");

    }
    }
    $conn->close();

    ?>

    <?php
    // Create connection
    $conn = new mysqli('localhost','root','','website_project');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql= "SELECT * FROM upcoming_trailer WHERE avatar='movie3.jpg'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {

    require("ulink3.php");

    }
    }
    $conn->close();

    ?>

    <?php
    // Create connection
    $conn = new mysqli('localhost','root','','website_project');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql= "SELECT * FROM upcoming_trailer WHERE avatar='movie4.jpg'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {

    require("ulink4.php");

    }
    }
    $conn->close();

    ?>


  </div>

      <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/zSWdZVtXT7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
    </div>
    </div>

</section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script><script  src="assets/offer/script.js"></script>


  <!-- bootstrap js-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
