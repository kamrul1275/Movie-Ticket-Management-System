<?php

  require_once("connect.php");

  $getID = $_REQUEST["id"];
  $dltquery = "DELETE FROM upcoming WHERE id=$getID";
  $runDlquery = mysqli_query($connect,$dltquery);

  if($runDlquery==true){
    header("location: admin_up.php?deleted");
  }

 ?>
