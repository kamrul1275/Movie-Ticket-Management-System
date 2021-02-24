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


    <!-- font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">


    <title>CHAYA CHOBI</title>
    </head>
  <body>
    <?php require("enablecheck.php"); ?>

        <section id="admin-section">



            <?php
            if(!isset($_COOKIE["currentUser"])){
              ("location:home-section.php");

            }?>


              <div class="row">
                <div class="col-md-4">

                </div>


                <div class="col-md-5">
                  <form class="bg-light border border-dark" action="savedata_core.php" method="post" >
                    <h2 class="text-center">Input Data </h2>

                    <hr>
                          <div class="container">
                            <div class="form-group px-5 border border-info py-2">
                                <input type="text" name="movie" value="" placeholder="Movie Name" class="form-control text-center">
                            </div>
                          </div>


                             <div class="container">
                              <div class=" form-group px-5 border border-info">


                                <div class=" form-group text-center">


                                    <input type="checkbox" id="chkPan" class="form-group largerCheckbox m-2" onclick="EnableDisableTextbox(this)" name="2D" value="2D"><b>2D</b>



                                    <input type="checkbox" id="chkPan1" class="form-group largerCheckbox m-2" onclick="EnableDisableTextbox1(this)" name="3D" value="3D"><b>3D</b>



                                    <input type="checkbox" id="chkPan2" class="form-group largerCheckbox m-2" onclick="EnableDisableTextbox2(this)"name="4D" value="4D"><b>4D</b>



                                  <br>
                                  <b>2D</b>

                                  <input id="txtPanNumber" disabled="disabled" class="form-control" type="text" name="2dprice" value="" placeholder="Price">
                                  <br>
                                  <b>3D</b>

                                  <input id="txtPanNumber1" disabled="disabled" class="form-control" type="text" name="3dprice" value="" placeholder="Price">
                                  <br>
                                  <b>4D</b>

                                  <input id="txtPanNumber2" disabled="disabled" class="form-control" type="text" name="4dprice" value="" placeholder="Price">


                                </div>

                                <div class="">


                                </div>

                              </div>
                            </div>





                          <div class="container display-5">
                            <div class="checkbox-card form-group px-4 border border-info">
                              <label for="">Day</label>
                              <div class="checkbox form-group ">
                                <label>

                                  <input type="checkbox" name="Saturday" value="Saturday" class="checkme largerCheckbox m-1"><i><b>Saturday</b></i>
                                </label>
                              </div>
                              <div class="passport-box form-group">


                                <label>

                                   <div class="container">
                                    <div class="checkbox-card1 form-group px-4 border border-info">



                                      <div class="checkbox form-group">

                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen11" value="Saturday Screen-1: 9.00 a.m"><i><b>Saturday Screen-1: 9.00 a.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen12" value="Saturday Screen-2: 2.00 p.m"><i><b>Saturday Screen-2: 2.00 p.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen13" value="Saturday Screen-3: 6.00 p.m"><i><b>Saturday Screen-3: 6.00 p.m</b></i>
                                        </label>

                                      </div>

                                    </div>
                                  </div>

                                </label>


                              </div>

                            </div>
                          </div>


                          <div class="container display-5">
                            <div class="checkbox-card form-group px-4 border border-info">
                              <label for="">Day</label>
                              <div class="checkbox form-group ">
                                <label>

                                  <input type="checkbox" name="Sunday" value="Sunday" class="checkme largerCheckbox m-1"><i><b>Sunday</b></i>
                                </label>
                              </div>
                              <div class="passport-box form-group">


                                <label>

                                   <div class="container">
                                    <div class="checkbox-card1 form-group px-4 border border-info">



                                      <div class="checkbox form-group">

                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen21" value="Sunday Screen-1: 9.00 a.m"><i><b>Sunday Screen-1: 9.00 a.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen22" value="Sunday Screen-2: 2.00 p.m"><i><b>Sunday Screen-2: 2.00 p.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen23" value="Sunday Screen-3: 6.00 p.m"><i><b>Sunday Screen-3: 6.00 p.m</b></i>
                                        </label>

                                      </div>



                                    </div>
                                  </div>

                                </label>

                              </div>

                            </div>
                          </div>

                          <div class="container display-5">
                            <div class="checkbox-card form-group px-4 border border-info">
                              <label for="">Day</label>
                              <div class="checkbox form-group ">
                                <label>

                                  <input type="checkbox" name="Monday" value="Monday" class="checkme largerCheckbox m-1"><i><b>Monday</b></i>
                                </label>
                              </div>
                              <div class="passport-box form-group">


                                <label>

                                   <div class="container">
                                    <div class="checkbox-card1 form-group px-4 border border-info">



                                      <div class="checkbox form-group">

                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen31" value="Monday Screen-1: 9.00 a.m"><i><b>Monday Screen-1: 9.00 a.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen32" value="Monday Screen-2: 2.00 p.m"><i><b>Monday Screen-2: 2.00 p.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen33" value="Monday Screen-3: 6.00 p.m"><i><b>Monday Screen-3: 6.00 p.m</b></i>
                                        </label>

                                      </div>

                                    </div>
                                  </div>

                                </label>


                              </div>

                            </div>
                          </div>

                          <div class="container display-5">
                            <div class="checkbox-card form-group px-4 border border-info">
                              <label for="">Day</label>
                              <div class="checkbox form-group ">
                                <label>

                                  <input type="checkbox" name="Tuesday" value="Tuesday" class="checkme largerCheckbox m-1"><i><b>Tuesday</b></i>
                                </label>
                              </div>
                              <div class="passport-box form-group">


                                <label>

                                   <div class="container">
                                    <div class="checkbox-card1 form-group px-4 border border-info">



                                      <div class="checkbox form-group">

                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen41" value="Tuesday Screen-1: 9.00 a.m"><i><b>Tuesday Screen-1: 9.00 a.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen42" value="Tuesday Screen-2: 2.00 p.m"><i><b>Tuesday Screen-2: 2.00 p.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen43" value="Tuesday Screen-3: 6.00 p.m"><i><b>Tuesday Screen-3: 6.00 p.m</b></i>
                                        </label>

                                      </div>

                                    </div>
                                  </div>

                                </label>


                              </div>

                            </div>
                          </div>

                          <div class="container display-5">
                            <div class="checkbox-card form-group px-4 border border-info">
                              <label for="">Day</label>
                              <div class="checkbox form-group ">
                                <label>

                                  <input type="checkbox" name="Wednesday" value="Wednesday" class="checkme largerCheckbox m-1"><i><b>Wednesday</b></i>
                                </label>
                              </div>
                              <div class="passport-box form-group">


                                <label>

                                   <div class="container">
                                    <div class="checkbox-card1 form-group px-4 border border-info">



                                      <div class="checkbox form-group">

                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen51" value="Wednesday Screen-1: 9.00 a.m"><i><b>Wednesday Screen-1: 9.00 a.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen52" value="Wednesday Screen-2: 2.00 p.m"><i><b>Wednesday Screen-2: 2.00 p.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen53" value="Wednesday Screen-3: 6.00 p.m"><i><b>Wednesday Screen-3: 6.00 p.m</b></i>
                                        </label>

                                      </div>

                                    </div>
                                  </div>

                                </label>


                              </div>

                            </div>
                          </div>

                          <div class="container display-5">
                            <div class="checkbox-card form-group px-4 border border-info">
                              <label for="">Day</label>
                              <div class="checkbox form-group ">
                                <label>

                                  <input type="checkbox" name="Thursday" value="Thursday" class="checkme largerCheckbox m-1"><i><b>Thursday</b></i>
                                </label>
                              </div>
                              <div class="passport-box form-group">


                                <label>

                                   <div class="container">
                                    <div class="checkbox-card1 form-group px-4 border border-info">



                                      <div class="checkbox form-group">

                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen61" value="Thursday Screen-1: 9.00 a.m"><i><b>Thursday Screen-1: 9.00 a.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen62" value="Thursday Screen-2: 2.00 p.m"><i><b>Thursday Screen-2: 2.00 p.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen63" value="Thursday Screen-3: 6.00 p.m"><i><b>Thursday Screen-3: 6.00 p.m</b></i>
                                        </label>

                                      </div>

                                    </div>
                                  </div>

                                </label>


                              </div>

                            </div>
                          </div>

                          <div class="container display-5">
                            <div class="checkbox-card form-group px-4 border border-info">
                              <label for="">Day</label>
                              <div class="checkbox form-group ">
                                <label>

                                  <input type="checkbox" name="Friday" value="Friday" class="checkme largerCheckbox m-1"><i><b>Friday</b></i>
                                </label>
                              </div>
                              <div class="passport-box form-group">


                                <label>

                                   <div class="container">
                                    <div class="checkbox-card1 form-group px-4 border border-info">



                                      <div class="checkbox form-group">

                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen71" value="Friday Screen-1: 9.00 a.m"><i><b>Friday Screen-1: 9.00 a.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen72" value="Friday Screen-2: 2.00 p.m"><i><b>Friday Screen-2: 2.00 p.m</b></i>
                                        </label>
                                        <label>

                                          <input style="font" type="checkbox" class="checkme1 largerCheckbox m-2" name="screen73" value="Friday Screen-3: 6.00 p.m"><i><b>Friday Screen-3: 6.00 p.m</b></i>
                                        </label>

                                      </div>

                                    </div>
                                  </div>

                                </label>


                              </div>

                            </div>
                          </div>


                          <div class="container">
                            <div class="form-group px-5 border border-info py-2">
                                  <input type="file" name="avatar" value="" placeholder="" class="form-control">
                              </div>
                          </div>


                            <div class="form-group px-5">
                                <button  name="submit" value="submit" class="btn btn-outline-success btn-block">Submit</button>
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
                  <table style="width:1000px;" class="text-light text-center bg-dark">
                    <tr>
                      <td class="p-3" style="font-size:22px;"><b>S.N</b></td>
                      <td class="p-3" style="font-size:22px;"><b>DB ID</b></td>
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

                  $sql = "SELECT id, movie, avatar FROM admin";
                  $result = $conn->query($sql);


                  if ($result->num_rows > 0) {
                    $snCount=1;
                          // output data of each row
                          while($row = $result->fetch_assoc()) {?>

                    <tr>
                      <td> <?php echo $snCount;  $snCount++;?> </td>
                      <td> <?php echo $row["id"]; ?> </td>
                      <td> <?php echo $row["movie"]; ?> </td>


                      <td><center><img width="60px" src="avatar/trending/<?php echo $row["avatar"]; ?>" alt=""/></center></td>


                  <td> <a class="btn btn-info my-2" onclick="return confirm('Are You Sure?');" href="deletedata_core.php?id=<?php echo $row["id"]; ?>">Delete</a>
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
    <script src="assets/js/jquery-latest.min.js"></script>
    <script src="js/jquery-latest.min.js"></script>
<script>
	$(function(){
		$(".checkme").click(function(event) {
			var x = $(this).is(':checked');
			if (x == true) {
				$(this).parents(".checkbox-card").find('.passport-box').show();
				$(this).parents(".checkbox-card").find('.apply-box').hide();
			}
			else{
				$(this).parents(".checkbox-card").find('.passport-box').hide();
				$(this).parents(".checkbox-card").find('.apply-box').show();
			}
		});
	})
  $(function(){
		$(".checkme1").click(function(event) {
			var x = $(this).is(':checked');
			if (x == true) {
				$(this).parents(".checkbox-card1").find('.passport-box1').show();
				$(this).parents(".checkbox-card1").find('.apply-box1').hide();
			}
			else{
				$(this).parents(".checkbox-card1").find('.passport-box1').hide();
				$(this).parents(".checkbox-card1").find('.apply-box1').show();
			}
		});
	})
</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
