<?php

  require_once("connect.php");

  $getID = $_REQUEST["id"];
  $dltquery1 = "DELETE FROM trailer WHERE id=$getID";
  $runDlquery1 = mysqli_query($connect,$dltquery1);

  if($runDlquery1==true){
    header("location: admin_tra.php?deleted");
  }

 ?>
