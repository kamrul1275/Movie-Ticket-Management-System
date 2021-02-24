

<?php
require_once("connect.php");

$number= $_POST['number'];


 $insertQuery="INSERT INTO booking(phone) VALUES('$number')";



$runQuery = mysqli_query($connect,$insertQuery);

if($runQuery==true){
  header("location: success.php?action=true");
}else{
  header("location: success.php?action=false");
}

?>
