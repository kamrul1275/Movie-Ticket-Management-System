<?php
if(!isset($_COOKIE["currentUser"])){
  ("location:home-section.php");
}?>
<?php require_once("header.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaya Chobi</title>
    <link rel="stylesheet" href="assets/css/stylea.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars bg-dark mt-3 mr-3" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3><span>Chaya Chobi</span></h3>
      </div>
      <div class="right_area">
        <a href="logout_core_admin.php" class="logout_btn">Logout</a>
      </div>


    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->

    <?php
      if(isset($_COOKIE["currentUser"])){
        $currentUserTarget = $_COOKIE["currentUser"];

        $nameQuery= "SELECT * FROM admin_register WHERE username='$currentUserTarget'";
        $runNameQuery = mysqli_query($conn, $nameQuery);

        if($runNameQuery ==true){
          while($getRow = mysqli_fetch_array($runNameQuery)){  ?>

    <div class="mobile_nav">
      <div class="nav_bar">

        <img style="width:100px; height:100px; border-radius:50%;" class="profile_image" src="avatar/admin_photo/<?php echo $getRow['avatar'];?>" alt="">

      </div>
      <div class="mobile_nav_items">
        <a href="admin_data.php"><i class="fas fa-video"></i><i class="fas fa-play"></i><span>Trending</span></a>
        <a href="admin_upcoming.php"><i class="fas fa-video"></i><span>Upcoming</span></a>
        <a href="admin_trailer.php"><i class="fas fa-video"></i><span>Trailer</span></a>
        <a href="admin_booking.php"><i class="fas fa-info-circle"></i><span>Bookings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img style="width:100px; height:100px; border-radius:50%;" class="profile_image" src="avatar/admin_photo/<?php echo $getRow['avatar'];?>" alt="">
        <h4><?php echo $getRow['username']; ?></h4>
      </div>
      <a href="admin.php"><i class="fas fa-video"></i><span>Trending</span></a>
      <a href="admin_up.php"><i class="fas fa-video"></i><span>Upcoming</span></a>
      <a href="admin_tra.php"><i class="fas fa-video"></i><span>Trailer</span></a>
      <a href="admin_booking.php"><i class="fas fa-info-circle"></i><span>Bookings</span></a>
    </div>
    <!--sidebar end-->

    <?php

  }
}
}
?>

    <div class="content">
      <div style="margin-top:100px;">
        <?php require("blank.php"); ?>
      </div>
    </div>


    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
