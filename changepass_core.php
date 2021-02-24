<?php
require_once("config.php");

$getCurrentUser = $_COOKIE['currentUser'];

$oldpass = htmlentities($_REQUEST["oldpass"]);
$newpass = htmlentities($_REQUEST["newpass"]);
$cpass = htmlentities($_REQUEST["cpass"]);

$checkOldPass = "SELECT * FROM register WHERE username='$getCurrentUser'";

$runQuery = mysqli_query($conn, $checkOldPass);
if($runQuery == true)
{
  if (mysqli_num_rows($runQuery) === 1) {
    {
      while ($getCurrentUserData = mysqli_fetch_array($runQuery)) {
        $userEmail = $getCurrentUserData["email"];
      }
    }
  }
}


if(isset($_COOKIE["currentUser"])){
  $currentUserTarget = $_COOKIE["currentUser"];

  if ($currentUserTarget == $getCurrentUser && $newpass == $cpass) {

      $haspass = $cpass;


        $newuser = $currentUserTarget;

      $updatepass = "UPDATE register SET password='$haspass' WHERE username='$newuser'";
      $runPassQuery = mysqli_query($conn, $updatepass);

      if($runPassQuery== true){

          setcookie("currentUser",$newuser,"",time()-(86400*50));
          header("location:changepass.php?change_pass=Password changed!");
      }

  }
  else {
    header("location:changepass.php?dontmatch=Password Doesn't Match!");
  }


}
 ?>
