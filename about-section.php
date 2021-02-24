<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Tanvir Ahmed">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- style css-->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!-- font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">


    <title>CHAYA CHOBI</title>
  </head>
  <body>

    <!-- bootstrap js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>




  <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="home-section.php">CHAYA CHOBI |</a>

<button class="navbar-toggler" data-toggle="collapse" data-target="#ulli">
  <span class="navbar-toggler-icon"></span>
</button>

  <div class="collapse navbar-collapse text-center"  id="ulli">
    <ul class="navbar-nav ml-auto">
      <li>
        <a class="nav-link" href="home-section.php">Home</a>
      </li>
      <li>
        <a class="nav-link" href="reg-section.php">Sign In</a>
      </li>

      <li>
        <a class="nav-link" href="about-section.php">About</a>
      </li>
    </ul>

  </div>
    </div>
  </nav>



<section id="about-section">
  <div class="about-section">
    <div class="container text-center text-white">



      <div class="row ">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
          <br>
          <img class="image_logo"src="img/team/11.jpg" alt="" height="330px" width="480px">
        </div>
        <div class="col-md-3">

        </div>
      </div>

            <div class="row">
              <div class="news col-md-12">
                <br>
              <h2 class="title_page">About Chaya Chobi</h2>
              <hr>
              <h4>The Multiplex Cinema Theatre in Bangladesh</h4>
              <p> Chaya Chobi : Show Motion Limited, incorporated in 19th December 2002, pioneered the modern Multiplex Movie Theater industry with Chaya Chobi brand in Bangladesh.</p>
              <p> The First Multiplex Cinema Theatre in Bangladesh Chaya Chobi : Show Motion Limited, incorporated in 19th December 2002, pioneered the modern Multiplex Movie Theater industry with STAR Cineplex brand in Bangladesh. With lucid vision for the entertainment development in the country, the local and foreign promoters of Show Motion Ltd. started the first international quality state-of-the-art multiplex cinema theatre on 8th October 2004 in Bangladesh at Bashundhara City Mall at Panthapath, Dhaka.</p>
              <p>In January 2019, Chaya Chobi opened another branch in Shimanto Shambhar.The new branch has 3 fully digital cinema screens with state-of-the-art 3D Projection Technology, Silver Screens, Dolby-Digital Sound and stadium seating. One of the 3 halls will have ATMOS sound system which will make the movie watching even more brilliant. Hall 1 has a seating capacity of 263, Hall 2 has that of 253 and 3 has the capacity of 221, totaling to more than 730 seats.</p>
              <p>To further increase its presence, in October 2019, Chaya Chobi has opened its third and newest branch in SKS Tower, Mohakhali, Dhaka. This branch is all about sophistication and comfort of the customers. The halls have spacious seating arrangement with full and half reclining chairs and loungers with the best of facilities. The VIP hall has arrangement for ‘seating in pairs’ for the first time ever in Bangladesh. This new branch has fully digital screens with state of the art 3D projection technology, silver screens and ATMOS surround sound system. The halls in SKS tower will provide the best of experiences to people and further ensure the amazing quality of Chaya Chobi.</p>

              <p>Chaya Chobi, Bashundhara City shooping mall branch has six fully digital cinema screens with state-of-the-art 3D Projection Technology, Silver Screens, Dolby-Digital Sound and stadium seating. With a total capacity of
                  1,600 seats the theater has large lobby with full concession stands serving pop-corns, soft drinks, ice-creams and many other items. In addition to scheduled shows, Chaya Chobi also caters to special corporate bookings, red-carpet premieres and private events. Visit www.chayachobi.com for updated movie schedules and online ticket purchase
              </p>
              <br>
              <h4>Our Goal</h4>
              <p>Our goal is to provide the most modern, comfortable, cinema viewing experience of Hollywood and quality Dhallywood releases for a locally adjusted price for our youth and family centered audiences in Dhaka . We aim to be the highest-value entertainment provider in Bangladesh with integrity &amp; professionalism in every step.</p>
          </div>
            </div>
            <div class="row">
              <div class="col-md-12 ">
                <br><br>
                <img class="image_logo"src="photo/chayachobi.jpg" alt="" height="100px" width="100px">
                <br>
                <br>
                <p class="font-italic">chayachobi@yahoo.com</p>
                  <p>+880181629656

                  <p class="lead font-weight-bold">Daffodil International University, Dhaka</p>

          <?php
            if (isset($_REQUEST["wrong_info"])) {
              echo'<b style="color:red"> Username or Password is wrong!</b>';
            }
           ?>
          <button class="btn btn-outline-light" data-toggle="modal" data-target="#btn">Admin</button>
                 <div class="modal" id="btn">
                   <div class="modal-dialog">
                     <div class="modal-content">
                       <div class="modal-header bg-success ">
                         <p style="font-size: 40px;">Admin Please Login!</p>

                       </div>





                       <div class="modal-body text-dark">
                         <form class="" action="login_core_admin.php" method="post">

                           <div class="form-group">
                             <input type="text" name="username" value="" placeholder="Username" class="form-control">
                           </div>
                           <div class="form-group">
                             <input type="password" name="password" value="" placeholder="Password" class="form-control">
                           </div>
                           <div class="form-group">
                             <button id="loginbutton" name="loginbtn" value="login" class="btn btn-primary">Submit</button>
                           </div>



                         </form>
                        </div>

                       <div class="modal-footer">

                       </div>
                     </div>

                   </div>
                 </div>









          <!--button-->
        <!--  <button class="btn btn-outline-light" data-toggle="modal" data-target="#btn">Feedback</button>
                 <div class="modal" id="btn">
                   <div class="modal-dialog">
                     <div class="modal-content">
                       <div class="modal-header bg-success ">
                         <h4 class="modal-title">Contact-Us</h4>
                         <button class="close" data-dismiss="modal">&times;</button>
                       </div>

                       <div class="modal-body text-dark">
                         <p>+8801816299924, +8801969018528</p>
                         <p class="font-italic">tanvirahmedshawon@yahoo.com</p>

                         <p class="lead font-weight-bold">Jagannath University, Dhaka</p>
                       </div>
                       <div class="form-group">
                         <input type="email" name="" value="" placeholder="Your Feedback" class="form-control">
                       </div>
                       <div class="form-group">
                         <input type="text" name="" value="" placeholder="Username" class="form-control">
                       </div>
                       <div class="form-group">
                         <input type="text" name="" value="" placeholder="Password" class="form-control">
                       </div>
                       <div class="text-info lead">
                         <p class="lead">Stay Connected</p>
                       </div>
                       <div class="modal-footer">
                         <button class="btn btn-outline-success lead btn-block">Submit</button>
                         <button class="close text-danger" data-dismiss="modal">Close</button>
                       </div>
                     </div>

                   </div>
                 </div>-->
        </div>
      </div>
    </div>
  </div>


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
        <b>Develop by Partho & Mizan</b>
      </div>
    </div>
  </div>



</section>
