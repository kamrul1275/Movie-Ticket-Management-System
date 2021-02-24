

<?php
require_once("connect.php");

$movie= $_POST['movie'];
$link= $_POST['link'];
$avatar= $_POST['avatar'];


 $insertQuery="INSERT INTO trailer(movie, link, avatar) VALUES('$movie','$link','$avatar')";

$runQuery = mysqli_query($connect,$insertQuery);

if($runQuery==true){
  header("location: admin_tra.php?action=true");
}else{
  header("location: admin_tra.php?action=false");
}

?>
