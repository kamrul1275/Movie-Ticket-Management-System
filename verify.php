<?php

// require_once("config.php");

if(isset($_GET['vkey'])){
  $vkey= $_GET['vkey'];

  $mysqli= NEW MySQLi('localhost','root','','website_project');

  $resultSet = $mysqli->query("SELECT verified,vkey FROM register WHERE verified = 0 AND vkey= '$vkey' LIMIT 1");

  if($resultSet->num_rows == 1){
    $update= $mysqli->query("UPDATE REGISTER SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");

    if($update){
      echo "<h3>Your account has been verified. You may now login</h3>";
    }
    else{
      echo "Not verified";
      // echo $mysqli->error;
    }

  }
  else{
    echo "This account is invalid or already verified";
  }
}
else{
  die ("Something went wrong");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
      <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML, CSS, JavaScript">
      <meta name="author" content="John Doe">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>CHAYA CHOBI</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css" type="text/css">
<style>
  .center{
    display:flex;
    justify-content:center;
    aligh-items:center;

  }
  body{
    background-image: url(photo/bg2.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    background-attachment: fixed;
  }
</style>
  </head>
  <body>

  </body>
</html>
