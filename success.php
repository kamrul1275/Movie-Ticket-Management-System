



 <html><head>
     <meta charset="utf-8">
     <meta name="description" content="bKash PGW Tokenized Payment with Valid Agreement">
     <meta name="author" content="Tahniat Ashraf Priyam">
     <title>Chaya Chobi</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/tokenized.css">
     <link rel="stylesheet" href="assets/css/style.css" type="text/css">
     <link rel="shortcut icon" type="image/x-icon" href="../../../assets/favicon.ico/favicon-32x32.png">
 </head>
     <body class="bg-light">
         <div id="tokenized-0001">
           <div class="container">
             <div class="row">
               <div class="col-md-12 order-md-1">
                 <div id="header">
                   <div id="banner" class="row">
                     <div class="col-12">
                       <div class="logoHolder">
                         <img src="assets/images/bkash_payment_logo.png" alt="bKash_logo" class="bannerLogo">
                       </div>
                     </div>
                   </div>
                   <div id="type" class="row">
                     <div class="col-12">
                                 &nbsp;
                             </div>
                           </div>



													 	<div class="bkash">
															<h1>Transaction Succeeded</h1>
															<h4>Thank You!</h4>
													 	</div>
													 <br><br><br>


                             </div>
                           </div>


                             </div>
                           </div>
                         </div>
                       </div>

                      <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-6">
                          <div style="height:200px; width:485px; background-color:#FAB310; border-radius:10px; padding-top:5px;" class="ticket text-center">
                            <h2>Chaya Chobi</h2>
                            <h3> <u><b>Ticket</b></u> </h3>
                            <?php

                            // Create connection
                            $conn = new mysqli('localhost','root','','website_project');
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                          $sql = mysqli_query($conn, "SELECT * FROM booking ORDER BY id DESC LIMIT 1");
                         $print_data = mysqli_fetch_row($sql);?>
                         <i>Your Ticket No.:</i>
                         <?php
                         echo $print_data[0];
                         echo "<br>";?>
                         <i>Your Mobile No.:</i>
                         <?php

                         echo $print_data[1];
                             $conn->close();
                             ?>
                          </div>
                        </div>
                      </div>

											<h4  class="text-center "><a style="text-decoration:none;" class="text-primary" href="movie-section.php">Back to movie section</a></h4>

         <script src="assets/js/axios.0.19.2.min.js"></script>
         <script src="assets/js/vue.2.5.22.js"></script>
         <script src="assets/js/master.1.0.js"></script>
         <script src="assets/js/v1.2.0-beta/0001.js"></script>

 </body>
 </html>
