

<?php
require_once("connect.php");

$movie= $_POST['movie'];

$_2D= $_POST['2D'];
$_3D= $_POST['3D'];
$_4D= $_POST['4D'];

$_2dprice= $_POST['2dprice'];
$_3dprice= $_POST['3dprice'];
$_4dprice= $_POST['4dprice'];

$Saturday= $_POST['Saturday'];
$Sunday= $_POST['Sunday'];
$Monday= $_POST['Monday'];
$Tuesday= $_POST['Tuesday'];
$Wednesday= $_POST['Wednesday'];
$Thursday= $_POST['Thursday'];
$Friday= $_POST['Friday'];

$screen11= $_POST['screen11'];
$screen12= $_POST['screen12'];
$screen13= $_POST['screen13'];

$screen21= $_POST['screen21'];
$screen22= $_POST['screen22'];
$screen23= $_POST['screen23'];

$screen31= $_POST['screen31'];
$screen32= $_POST['screen32'];
$screen33= $_POST['screen33'];

$screen41= $_POST['screen41'];
$screen42= $_POST['screen42'];
$screen43= $_POST['screen43'];

$screen51= $_POST['screen51'];
$screen52= $_POST['screen52'];
$screen53= $_POST['screen53'];

$screen61= $_POST['screen61'];
$screen62= $_POST['screen62'];
$screen63= $_POST['screen63'];

$screen71= $_POST['screen71'];
$screen72= $_POST['screen72'];
$screen73= $_POST['screen73'];





$avatar= $_POST['avatar'];

 $insertQuery="INSERT INTO admin(movie, 2D, 3D, 4D, 2dprice, 3dprice, 4dprice, Saturday, Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, screen11, screen12, screen13, screen21, screen22, screen23, screen31, screen32, screen33, screen41, screen42, screen43, screen51, screen52, screen53, screen61, screen62, screen63, screen71, screen72, screen73, avatar) VALUES('$movie','$_2D','$_3D','$_4D','$_2dprice','$_3dprice','$_4dprice','$Saturday','$Sunday','$Monday','$Tuesday','$Wednesday','$Thursday','$Friday','$screen11','$screen12','$screen13','$screen21','$screen22','$screen23','$screen31','$screen32','$screen33','$screen41','$screen42','$screen43','$screen51','$screen52','$screen53','$screen61','$screen62','$screen63','$screen71','$screen72','$screen73','$avatar')";



$runQuery = mysqli_query($connect,$insertQuery);

if($runQuery==true){
  header("location: admin.php?action=true");
}else{
  header("location: admin.php?action=false");
}

?>
