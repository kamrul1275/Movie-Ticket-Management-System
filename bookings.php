<?php
if(!isset($_COOKIE["currentUser"])){
  ("location:home-section.php");

}?>

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
    table, th, td {
      border: 1px solid #AAA3A2;
    }

input.largerCheckbox {
    width: 20px;
    height: 20px;
}
</style>

    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- style css-->




    <title>CHAYA CHOBI</title>
    </head>
  <body>

<div class="row">


  <div class="col-md-2">
  </div>


  <div class="col-md-8 ml-5">
    <h2>Ticket List</h2>
    <table style="width:1000px;" class="text-light text-center bg-dark"">
      <tr>
        <td class="p-3" style="font-size:22px;"><b>S.N</b></td>
        <td class="p-3" style="font-size:22px;"><b>Ticket No.</b></td>
        <td class="p-3" style="font-size:22px;"><b>Phone No.</b></td>

      </tr>


      <?php

      // Create connection
      $conn = new mysqli('localhost','root','','website_project');
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

    $sql = "SELECT * FROM booking";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
      $snCount=1;
            // output data of each row
            while($row = $result->fetch_assoc()) {?>

      <tr>
        <td> <?php echo $snCount;  $snCount++;?> </td>

        <td>00100<?php echo $row["id"]; ?> </td>
        <td> <?php echo $row["phone"]; ?> </td>

    </td>

      </tr>
           <?php

           }
       }
       $conn->close();
       ?>

    </table>

  </div>



  </div>


</div>
<br><br><br>




 <div style="margin-top:500px;" class="bg-dark text-light pt-1">
  <div class="row">
    <hr>
    <div class="col-md-1 mt-1">

    </div>
    <div class="col-md-6">
      <b>Chaya Chobi Motion Limited 2020 © All Rights Reserved.</b>
    </div>
    <div class="col-md-2">

    </div>
    <div class="col-md-3 ">
      <b>Develop by Tanvir & Kashfi</b>
    </div>
  </div>
</div>
        </section>



    <!-- bootstrap js-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
