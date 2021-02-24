
<?php

//fetch.php;

if(isset($_POST["username"]))
{
 $connect = new PDO("mysql:host=localhost; dbname=website_project", "root", "");

 $query = "
 SELECT * FROM register
 WHERE username = '".trim($_POST["username"])."'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $total_row = $statement->rowCount();

 if($total_row == 0)
 {
  $output = array(
   'success' => true
  );

  echo json_encode($output);
 }
}

?>
