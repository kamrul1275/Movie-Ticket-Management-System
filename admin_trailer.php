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
    <?php require("enablecheck.php"); ?>

        <section id="admin-section">

              <div class="row">
                <div class="col-md-4">

                </div>


                <div class="col-md-5">

                  <form class="bg-light border border-dark" action="upcoming_trailer_core.php" method="post" >

                    <h2 class="text-center">Input Upcoming Movies Trailer </h2>

                    <hr>
                          <div class="container">
                            <div class="form-group px-5 border border-info py-2">
                                <input type="text" name="movie" value="" placeholder="Movie Name" class="form-control text-center">
                            </div>
                            <div class="form-group px-5 border border-info py-2">
                                <input type="text" name="link" value="" placeholder="Movie Link" class="form-control text-center">
                            </div>
                            <div class="form-group px-5 border border-info py-2">
                                  <input type="file" name="avatar" value="" placeholder="" class="form-control">
                              </div>

                              <div class="form-group px-5">
                                  <button  name="submit" value="submit" class="btn btn-outline-success btn-block">Submit</button>
                              </div>
                          </div>
                        </div>
                      </div>
                  </form>
                </div>
              </div>


<br><br><br>
<p class="text-center"><?php
if(isset($_REQUEST["action"])){
  if($_REQUEST["action"]=="true"){
    echo "<font color='green'>Data inserted!</font>";
  }
  else{
    echo "<font color='red'>Data not inserted!</font>";
  }

}


if(isset($_REQUEST["deletedup"])){
  echo "<font color='red'>Data has been Deleted!</font>";

}
?></p>
          <div class="row">

                <div class="col-md-2">
                </div>


                <div class="col-md-8 ml-5">
                  <table style="width:1000px;" class="text-light text-center bg-dark">
                    <tr>
                      <td class="p-3" style="font-size:22px;"><b>S.N</b></td>
                      <td class="p-3" style="font-size:22px;"><b>Date</b></td>
                      <td class="p-3" style="font-size:22px;"><b>Movie</b></td>
                      <td class="p-3" style="font-size:22px;"><b>Picture</b></td>

                      <td class="p-3" style="font-size:22px;"><b>Action</b></td>
                    </tr>


                    <?php

                    // Create connection
                    $conn = new mysqli('localhost','root','','website_project');
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                  $sql = "SELECT * FROM upcoming_trailer";
                  $result = $conn->query($sql);


                  if ($result->num_rows > 0) {
                    $snCount=1;
                          // output data of each row
                          while($row = $result->fetch_assoc()) {?>

                    <tr>
                      <td> <?php echo $snCount;  $snCount++;?> </td>

                      <td> <?php echo $row["movie"]; ?> </td>
                      <td> <?php echo $row["link"]; ?> </td>
                          <td><center><img width="60px" src="avatar/upcoming_trailer/<?php echo $row["avatar"]; ?>" alt=""/></center></td>





                  <td> <a class="btn btn-info my-2" onclick="return confirm('Are You Sure?');" href="deletedata_upcoming_trailer.php?id=<?php echo $row["id"]; ?>">Delete</a>
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
<br><br><hr><hr><br><br>



<div class="row">
  <div class="col-md-4">

  </div>


  <div class="col-md-5">

    <form class="bg-light border border-dark" action="trailer_core.php" method="post" >

      <h2 class="text-center">Input Movies Trailer </h2>

      <hr>
            <div class="container">
              <div class="form-group px-5 border border-info py-2">
                  <input type="text" name="movie" value="" placeholder="Movie Name" class="form-control text-center">
              </div>
              <div class="form-group px-5 border border-info py-2">
                  <input type="text" name="link" value="" placeholder="Movie Link" class="form-control text-center">
              </div>
              <div class="form-group px-5 border border-info py-2">
                    <input type="file" name="avatar" value="" placeholder="" class="form-control">
                </div>

                <div class="form-group px-5">
                    <button  name="submit" value="submit" class="btn btn-outline-success btn-block">Submit</button>
                </div>
            </div>
          </div>
        </div>
    </form>
  </div>
</div>


<br><br><br>
<p class="text-center"><?php
if(isset($_REQUEST["action"])){
if($_REQUEST["action"]=="true"){
echo "<font color='green'>Data inserted!</font>";
}
else{
echo "<font color='red'>Data not inserted!</font>";
}

}


if(isset($_REQUEST["deleted"])){
echo "<font color='red'>Data has been Deleted!</font>";

}
?></p>
<div class="row">

  <div class="col-md-2">
  </div>


  <div class="col-md-8 ml-5">
    <table style="width:1000px;" class="text-light text-center bg-dark"">
      <tr>
        <td class="p-3" style="font-size:22px;"><b>S.N</b></td>
        <td class="p-3" style="font-size:22px;"><b>Date</b></td>
        <td class="p-3" style="font-size:22px;"><b>Movie</b></td>
        <td class="p-3" style="font-size:22px;"><b>Picture</b></td>

        <td class="p-3" style="font-size:22px;"><b>Action</b></td>
      </tr>


      <?php

      // Create connection
      $conn = new mysqli('localhost','root','','website_project');
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

    $sql = "SELECT * FROM trailer";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
      $snCount=1;
            // output data of each row
            while($row = $result->fetch_assoc()) {?>

      <tr>
        <td> <?php echo $snCount;  $snCount++;?> </td>

        <td> <?php echo $row["movie"]; ?> </td>
        <td> <?php echo $row["link"]; ?> </td>
            <td><center><img width="60px" src="avatar/trending_trailer/<?php echo $row["avatar"]; ?>" alt=""/></center></td>


          <td> <a class="btn btn-info my-2" onclick="return confirm('Are You Sure?');" href="deletedata_trailer_core.php?id=<?php echo $row["id"]; ?>">Delete</a>
          </td>

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




<div class="bg-dark text-light pt-1">
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
