<?php
if(!isset($_COOKIE["currentUser"])){
  ("location:home-section.php");
}?>

<?php require_once("header.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Tanvir Ahmed">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylep.css" type="text/css">

    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>CHAYA CHOBI</title>
  </head>
  <body>


    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand text-light" href="home-section1.php">CHAYA CHOBI |</a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#ulli">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center"  id="ulli">
      <ul class="navbar-nav ml-auto">
        <li>
          <a class="nav-link  text-light" href="home-section1.php">Home</a>
        </li>
        <li>
          <a class="nav-link text-light" href="profile.php">Profile</a>
        </li>
        <li>
          <a class="nav-link text-light" href="offer-section.php">Upcoming</a>
        </li>
        <li>
          <a class="nav-link text-light" href="movie-section.php">Movies</a>
        </li>
        <li>
          <a class="nav-link text-light" href="about-section1.php">About</a>
        </li>
      </ul>




    </div>
      </div>
      <div style="padding-right:110px;" class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        </a>

        <div  class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="logout_core.php">Logout</a>
          <a class="dropdown-item" href="changepass.php">Change Password</a>
        </div>
      </div>

    </nav>

  <div class="animation-area">

    <?php
      if(isset($_COOKIE["currentUser"])){
        $currentUserTarget = $_COOKIE["currentUser"];

        $nameQuery= "SELECT * FROM register WHERE username='$currentUserTarget'";
        $runNameQuery = mysqli_query($conn, $nameQuery);

        if($runNameQuery ==true){
          while($getRow = mysqli_fetch_array($runNameQuery)){  ?>


            <div class="profile-section">
              <div class="container text-center text-white">
                <div class="row">
                  <div class="col-md-12">
                    <div class="proimg">
                      <br>

                      <img style="margin-top:50px; margin-left:0px; width:280px; height:300px; border-radius:10px;" class="proimg" src="avatar/<?php echo $getRow['avatar'];?>" alt="">

                    </div>




                    <h3 class="text-light">WELCOME!</h3>
                    <b style=" color:black; font-weight: bold;" class=" display-4"> <?php echo $getRow['firstname'];?> </b>
                    <b style=" color:black; font-weight: bold;" class="lead display-4"> <?php echo $getRow['surname'];?> </b>
                    <hr>

                    <i  style="font-size: 20px; color:black; font-weight: bold;" class=""> <?php echo $getRow['email'];?> </i>
                    <br>

                    <b  style="font-size: 20px; color:black;" class=" ">Birthday: <?php echo $getRow['birthday'];?> </b>
                    <br>

                    <b  style="font-size: 20px; color:black;" class=" display-5"> <?php echo $getRow['phone'];?> </b>

                    <br>
                    <br>
                    <br>
                    <br>



                  </div>
                </div>
              </div>
            </div>

            <?php

          }
        }
      }
     ?>
     <ul class="box-area">
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
     </ul>



     <div class="bg-dark text-light pt-1 mt-5">
       <div class="row">
         <hr>
         <div class="col-md-1 mt-1">

         </div>
         <div class="col-md-6">
           <b>Chaya Chobi Motion Limited 2020 © All Rights Reserved.</b>
         </div>
         <div class="col-md-2">

         </div>
         <div class="col-md-3 ">
           <b>Develop by Tanvir & Kashfi</b>
         </div>
       </div>
     </div>

  </div>
    <!-- bootstrap js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
