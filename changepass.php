<?php require_once("header.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Tanvir Ahmed">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    body{
      background-image: url(photo/bg2.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: top;
      background-attachment: fixed;
    }
  </style>
    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- style css-->
    <link rel="stylesheet" href="style.css">
    <!-- font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">


    <title>CHAYA CHOBI</title>
  </head>
  <body>






      <br>
      <br>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <br />
          <b style="color:green">
            <?php
            if (isset($_REQUEST['change_pass'])) {
              echo $_REQUEST["change_pass"];
            }

            elseif (isset($_REQUEST['dontmatch'])) {
              echo $_REQUEST["dontmatch"];
            }?>
          <div class="card bg-info">

            <div class="card-body">

              <p class="text-light">Change Password</p>




              <form class="" action="changepass_core.php" method="post">

                <div class="form-group">
                  <input type="text" name="oldpass" value="" placeholder="Old Password" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="newpass" value="" placeholder="New Password" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="cpass" value="" placeholder="Confirm Password" class="form-control">
                </div>
                <div class="form-group">
                  <button name="passwordchangebtn" type="submit" value="Change Password" class="btn btn-outline-light btn-block">Submit</button>
                </div>

              </form>

    </div>
    </div>
        </div>
        <div class="col-md-4">

        </div>
      </div>
<p class="text-center"><a  href="profile.php"> <- Back to my profile</a></p>








    <!-- bootstrap js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
