
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1" />

  <title>contact us</title>
  <!-- Loading third party fonts -->
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css" />
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <!-- Loading main css file -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!--[if lt IE 9]>
      <script src="js/ie-support/html5.js"></script>
      <script src="js/ie-support/respond.js"></script>
    <![endif]-->
</head>

<body>
  <div id="site-content">
  <?php
 session_start();?>
  <header class="site-header">
            <div class="container">
                <a href="index.php" id="branding">
                <img src="dummy/nav_logo.png" alt="Site Title"  /></a>
                <nav class="main-navigation">
                    <button type="button" class="toggle-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="menu">
                        <li class="menu-item ">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="menu-item"><a href="Categories.php">Categories</a></li>
                        <li class="menu-item current-menu-item"><a href="about.php">About</a></li>
                        
                        <?php 
                    
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
                            $loggedin= true;
                          }
                          else{
                            $loggedin = false;
                          }
                        if(!$loggedin){
                      echo '<li class="menu-item "><a href="Account.php">Register</a></li>'  ;
                     }
                     if($loggedin){
                        echo '<li class="menu-item "><a href="logout.php"> <i class="bi bi-box-arrow-left"></i> Logout</a></li>' ;
                       }
                       
            
            ?>
            <li class="menu-item"><a href="searching.php"> <i class="bi bi-search"></i></a></li>
                    </ul>
                    <!-- .menu -->
                </nav>
                <!-- .main-navigation -->
                <div class="mobile-menu"></div>
            </div>
        </header>
    <!-- .site-header -->

    <main class="main-content">
      <div class="fullwidth-block inner-content">
        <div class="container">
          <h2 class="page-title">Contact Us</h2>
          <div class="row">
            <div class="col-md-6">
              <form action="sent_mail.php" method="post" class="contact-form">

                <label for="inputlastname" class="form-label text-dark">Name</label>
                <input type="text" name="name" class="form-control" required>

                <label for="inputEmail4" class="form-label text-dark">Email</label>
                <input type="email" name="email" class="form-control" required>

                <textarea name="message" class="form-label" placeholder="Write You'r Message//" rows="2" style="border-radius: 13px; position: relative;
                top: 14px;" required></textarea>

                <input type="submit" class="btn btn-warning" value="Send" name="send">
              </form>
            </div>
            <div class="col-md-6">
              <div class="map-wrapper"><br>
                <!-- <div class="map"></div>  -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28945.102833012435!2d66.99698451083982!3d24.927373300000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f90157042d3%3A0x93d609e8bec9a880!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1702577917867!5m2!1sen!2s" width="550px" height="300px"></iframe>

                <address>
                  <div class="row">
                    <div class="col-sm-6">
                      <strong>Company Name INC.</strong>
                      <span>40 Sibley St, Detroit</span>
                    </div>
                    <div class="col-sm-6">
                      <!-- <a href="mailto:office@companyname.com">office@companyname.com</a> -->
                      
                      
                      <br />
                      <a href="tel:532930098891">(532) 930 098 891</a>
                    </div>
                  </div>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .testimonial-section -->
    </main>
    <!-- .main-content -->

<?php    

// session_start();
include('include/footer.php'); ?>
    <!-- .site-footer -->
  </div>
  <!-- #site-content -->

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
  <script src="js/plugins.js"></script>
  <script src="js/app.js"></script>
</body>

</html>