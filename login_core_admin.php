<?php
  require_once("config.php");

  $userInputName= $_REQUEST["username"];
  $userInputpwd= $_REQUEST["password"];

  $matchquery = "SELECT * FROM admin_register WHERE username='$userInputName' AND password='$userInputpwd'";

  $runmatchquery=  mysqli_query($conn, $matchquery);

  $checkcount = mysqli_num_rows($runmatchquery);
  if ($runmatchquery== true) {
    if ($checkcount ===1) {
     setcookie("currentUser", $userInputName, time()+(86400*7));
      header("location: adminhome.php");
    }

    else {
      header("location: about-section.php?wrong_info");
    }
  }
 ?>
