
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
                        <link rel="stylesheet" href="assets/css/style1.css" type="text/css">
                        <!-- font awesome-->
                        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">


                        <title>CHAYA CHOBI</title>
                      </head>
                      <body>
                        <header>

                        </header>

                          <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
                            <div class="container">
                              <a class="navbar-brand" href="home-section1.php">CHAYA CHOBI |</a>

                        <button class="navbar-toggler" data-toggle="collapse" data-target="#ulli">
                          <span class="navbar-toggler-icon"></span>
                        </button>

                          <div class="collapse navbar-collapse text-center"  id="ulli">
                            <ul class="navbar-nav ml-auto">
                              <li>
                                <a class="nav-link" href="admin_data.php">Admin</a>
                              </li>
                              <li>
                                <a class="nav-link" href="movie-section2.php">Movies</a>
                              </li>
                              <li>
                                <a class="nav-link" href="admin_upcoming.php">Upcoming</a>
                              </li>
                              <li>
                                <a class="nav-link" href="admin_trailer.php">Trailer</a>
                              </li>

                            </ul>

                          </div>
                            </div>
                          </nav>






                      <section class="movie-part">
                        <div class=" container">
                          <br>
                      <br>
                          <h2 class="text-center text-info display-4 mt-3">Now Showing</h3>


                          <br>

                          <ul class="list-inline text-center">

                              <?php
                              // Create connection
                              $conn = new mysqli('localhost','root','','website_project');
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }
                              $sql= "SELECT * FROM admin WHERE avatar='movie1.jpg'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                              require("movie1.php");

                              }
                              }
                              $conn->close();

                              ?>

                              <!--End Movie 1-->


                              <?php
                              // Create connection
                              $conn = new mysqli('localhost','root','','website_project');
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }
                              $sql= "SELECT * FROM admin WHERE avatar='movie2.jpg'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                              require("movie2.php");

                              }
                              }
                              $conn->close();

                              ?>

                              <!--End Movie 2-->

                              <?php
                              // Create connection
                              $conn = new mysqli('localhost','root','','website_project');
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }
                              $sql= "SELECT * FROM admin WHERE avatar='movie3.jpg'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                              require("movie3.php");

                              }
                              }
                              $conn->close();

                              ?>

                              <!--End Movie 3-->

                              <?php
                              // Create connection
                              $conn = new mysqli('localhost','root','','website_project');
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }
                              $sql= "SELECT * FROM admin WHERE avatar='movie4.jpg'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                              require("movie4.php");

                              }
                              }
                              $conn->close();

                              ?>

                              <!--End Movie 4-->

                              <?php
                              // Create connection
                              $conn = new mysqli('localhost','root','','website_project');
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }
                              $sql= "SELECT * FROM admin WHERE avatar='movie5.jpg'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                              require("movie5.php");

                              }
                              }
                              $conn->close();

                              ?>

                              <!--End Movie 5-->

                              <?php
                              // Create connection
                              $conn = new mysqli('localhost','root','','website_project');
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }
                              $sql= "SELECT * FROM admin WHERE avatar='movie6.jpg'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                              require("movie6.php");

                              }
                              }
                              $conn->close();

                              ?>

                              <!--End Movie 6-->

                              <?php
                              // Create connection
                              $conn = new mysqli('localhost','root','','website_project');
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }
                              $sql= "SELECT * FROM admin WHERE avatar='movie7.jpg'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                              require("movie7.php");

                              }
                              }
                              $conn->close();

                              ?>

                              <!--End Movie 7-->

                              <?php
                              // Create connection
                              $conn = new mysqli('localhost','root','','website_project');
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }
                              $sql= "SELECT * FROM admin WHERE avatar='movie8.jpg'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                              require("movie8.php");

                              }
                              }
                              $conn->close();

                              ?>

                              <!--End Movie 8-->

                              <?php
                              // Create connection
                              $conn = new mysqli('localhost','root','','website_project');
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }
                              $sql= "SELECT * FROM admin WHERE avatar='movie9.jpg'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                              require("movie9.php");

                              }
                              }
                              $conn->close();

                              ?>

                              <!--End Movie 9-->

                              <?php
                              // Create connection
                              $conn = new mysqli('localhost','root','','website_project');
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }
                              $sql= "SELECT * FROM admin WHERE avatar='movie10.jpg'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                              require("movie10.php");

                              }
                              }
                              $conn->close();

                              ?>

                              <!--End Movie 10-->


                              <?php
                              // Create connection
                              $conn = new mysqli('localhost','root','','website_project');
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }
                              $sql= "SELECT * FROM admin WHERE avatar='movie11.jpg'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                              require("movie11.php");

                              }
                              }
                              $conn->close();

                              ?>

                              <!--End Movie 11-->

                              <?php
                              // Create connection
                              $conn = new mysqli('localhost','root','','website_project');
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }
                              $sql= "SELECT * FROM admin WHERE avatar='movie12.jpg'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                              require("movie12.php");

                              }
                              }
                              $conn->close();

                              ?>

                              <!--End Movie 12-->



                          </ul>
                          </div>
                        </div>
                      </section>

                      <section id="videosec">


                        <div class="video">

                            <h2 style="margin-top:60px;">Some Movie Trailers You Might Like</h2>

                            <div class="container">
                          <div class="slider-sections">
                          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <?php
                          // Create connection
                          $conn = new mysqli('localhost','root','','website_project');
                          // Check connection
                          if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                          }
                          $sql= "SELECT * FROM trailer WHERE avatar='movie1t.jpg'";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {

                                // output data of each row
                                while($row = $result->fetch_assoc()) {

                          require("link1.php");

                          }
                          }
                          $conn->close();

                          ?>

                          <?php
                          // Create connection
                          $conn = new mysqli('localhost','root','','website_project');
                          // Check connection
                          if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                          }
                          $sql= "SELECT * FROM trailer WHERE avatar='movie2t.jpg'";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {

                                // output data of each row
                                while($row = $result->fetch_assoc()) {

                          require("link2.php");

                          }
                          }
                          $conn->close();

                          ?>

                          <?php
                          // Create connection
                          $conn = new mysqli('localhost','root','','website_project');
                          // Check connection
                          if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                          }
                          $sql= "SELECT * FROM trailer WHERE avatar='movie3t.jpg'";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {

                                // output data of each row
                                while($row = $result->fetch_assoc()) {

                          require("link3.php");

                          }
                          }
                          $conn->close();

                          ?>

                          <?php
                          // Create connection
                          $conn = new mysqli('localhost','root','','website_project');
                          // Check connection
                          if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                          }
                          $sql= "SELECT * FROM trailer WHERE avatar='movie4t.jpg'";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {

                                // output data of each row
                                while($row = $result->fetch_assoc()) {

                          require("link4.php");

                          }
                          }
                          $conn->close();

                          ?>


                        </div>

                            <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/zSWdZVtXT7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                          </div>
                          </div>

                      </section>


                        <!-- bootstrap js-->
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
                      </body>
                    </html>
