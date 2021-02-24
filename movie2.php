<li class="list-inline-item">
  <div class="card">
      <div class="imgBx">
        <a href="#"><img  src="avatar/trending/<?php echo $row["avatar"]; ?>" alt="" class="explore-image image2" height="230px" width="240px"></a>
      </div>


  <div class="pt-2 mb-3 text-center">
     <div class="contentBx">
       <a href="#" class=" buy" data-toggle="modal" data-target="#details-2">Details</a >
       <a href="#" class=" buy" data-toggle="modal" data-target="#booking-2">Book Now!</a >
     </div>
    <div class="modal" id="details-2">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header bg-danger">
           <h4 class="modal-title text-light display-4">
             <h2><?php
             echo $row["movie"];
             ?></h2>
           </h4>
           <button class="close text-white" data-dismiss="modal">&times;</button>
         </div>

         <div class="modal-body text-left">

           <h4><span class="">Shows:</span></h4><b>

             <?php
             if ($row["screen11"]=='') {

             }
             else {?>

               <?php echo $row["screen11"]; echo "<br>"; ?>

             <?php } ?>



             <?php
             if ($row["screen12"]=='') {

             }
             else {?>

               <?php echo $row["screen12"]; echo "<br>"; ?>

             <?php } ?>



             <?php
             if ($row["screen13"]=='') {

             }
             else {?>

               <?php echo $row["screen13"]; echo "<br>"; ?>

             <?php } ?>



             <?php
             if ($row["screen21"]=='') {

             }
             else {?>

               <?php echo $row["screen21"]; echo "<br>"; ?>

             <?php } ?>



             <?php
             if ($row["screen22"]=='') {

             }
             else {?>

               <?php echo $row["screen22"]; echo "<br>"; ?>

             <?php } ?>



             <?php
             if ($row["screen23"]=='') {

             }
             else {?>

               <?php echo $row["screen23"]; echo "<br>"; ?>

             <?php } ?>

             <?php
             if ($row["screen31"]=='') {

             }
             else {?>

               <?php echo $row["screen31"]; echo "<br>"; ?>

             <?php } ?>



             <?php
             if ($row["screen32"]=='') {

             }
             else {?>

               <?php echo $row["screen32"]; echo "<br>"; ?>

             <?php } ?>



             <?php
             if ($row["screen33"]=='') {

             }
             else {?>

               <?php echo $row["screen33"]; echo "<br>"; ?>

             <?php } ?>

             <?php
             if ($row["screen41"]=='') {

             }
             else {?>

               <?php echo $row["screen41"]; echo "<br>"; ?>

             <?php } ?>



             <?php
             if ($row["screen42"]=='') {

             }
             else {?>

               <?php echo $row["screen42"]; echo "<br>"; ?>

             <?php } ?>



             <?php
             if ($row["screen43"]=='') {

             }
             else {?>

               <?php echo $row["screen43"]; echo "<br>"; ?>

             <?php } ?>


             <?php
             if ($row["screen51"]=='') {

             }
             else {?>

               <?php echo $row["screen51"]; echo "<br>"; ?>

             <?php } ?>



             <?php
             if ($row["screen52"]=='') {

             }
             else {?>

               <?php echo $row["screen52"]; echo "<br>"; ?>

             <?php } ?>



             <?php
             if ($row["screen53"]=='') {

             }
             else {?>

               <?php echo $row["screen53"]; echo "<br>"; ?>

             <?php } ?>


             <?php
             if ($row["screen61"]=='') {

             }
             else {?>

               <?php echo $row["screen61"]; echo "<br>"; ?>

             <?php } ?>



             <?php
             if ($row["screen62"]=='') {

             }
             else {?>

               <?php echo $row["screen62"]; echo "<br>"; ?>

             <?php } ?>



             <?php
             if ($row["screen63"]=='') {

             }
             else {?>

               <?php echo $row["screen63"]; echo "<br>"; ?>

             <?php } ?>




           <br>
           <h4>Price</h4>
           <?php
           if ($row["2D"]=='') {

           }
           else {?>

             <?php
             echo "2D: Tk ";
             echo $row["2dprice"];
             echo "<br>";  ?>

           <?php } ?>

           <?php
           if ($row["3D"]=='') {

           }
           else {?>

             <?php
             echo "3D: Tk ";
             echo $row["3dprice"];
             echo "<br>";?>

           <?php } ?>

           <?php
           if ($row["4D"]=='') {

           }
           else {?>

             <?php
             echo "4D: Tk "; echo $row["4dprice"];  ?>

           <?php } ?>


         </div>



       </div>
     </div>
   </div>

   <div class="modal" id="booking-2">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header bg-info">
           <h4 class="modal-title text-light">Book Ticket</h4>
           <button class="close text-white" data-dismiss="modal">&times;</button>
         </div>

           <div class="modal-body">

            <form class="text-left text-light" action="book-confirm.php" method="POST">
              <div class="form-group">
                <label class="text-dark">Name</label>
                <input name="name" type="text" class="form-control">
              </div>
              <div class="form-group">
                <label class="text-dark">Mobile No</label>
                <input name="mobile" type="Mobile" class="form-control">
              </div>
                <div class="form-group">

                <select name="screen" class="selectpicker">
                    <optgroup label="Select">

                      <?php
                      if ($row["screen11"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen11"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen12"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen12"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen13"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen13"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen21"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen21"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen22"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen22"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen23"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen23"];  ?>
                        </option>
                      <?php } ?>


                      <?php
                      if ($row["screen31"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen31"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen32"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen32"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen33"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen33"];  ?>
                        </option>
                      <?php } ?>


                      <?php
                      if ($row["screen41"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen41"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen42"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen42"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen43"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen43"];  ?>
                        </option>
                      <?php } ?>


                      <?php
                      if ($row["screen51"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen51"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen52"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen52"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen53"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen53"];  ?>
                        </option>
                      <?php } ?>


                      <?php
                      if ($row["screen61"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen61"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen62"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen62"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen63"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen63"];  ?>
                        </option>
                      <?php } ?>


                      <?php
                      if ($row["screen71"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen71"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen72"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen72"];  ?>
                        </option>
                      <?php } ?>



                      <?php
                      if ($row["screen73"]=='') {

                      }
                      else {?>
                        <option>
                        <?php echo $row["screen73"];  ?>
                        </option>
                      <?php } ?>




                    </optgroup>


                  </select>



                  <select name="price" class="selectpicker">
                    <optgroup label="Select">

                      <?php
                      if ($row["2D"]=='') {
                      }
                      else {?><option name="price">
                        <?php echo $row["2dprice"] ; echo " Tk 2D"; ?>
                        </option>
                      <?php } ?>

                      <?php
                      if ($row["3D"]=='') {
                      }
                      else {?><option name="price">
                        <?php echo $row["3dprice"] ; echo " Tk 3D"; ?>
                        </option>
                      <?php } ?>

                      <?php
                      if ($row["4D"]=='') {
                      }
                      else {?><option name="price">
                        <?php echo $row["4dprice"] ; echo " Tk 4D"; ?>
                        </option>
                      <?php } ?>





                    </optgroup>
                  </select>
                </div>
                <div class="form-group">
                  <label class="text-dark">Seats</label>
                  <select name="seat" class="selectpicker">
                    <optgroup label="Select">
                      <option name="seat">1</option>
                      <option name="seat">2</option>
                      <option name="seat">3</option>
                      <option name="seat">4</option>
                    </optgroup>
                  </select>
                </div>


                  <button type="submit"  name="submit" class="btn btn-info">Pay Online</button>



              </form>
            </div>
             </div>
           </div>
         </div>

  </div>
  </div>

</li>
