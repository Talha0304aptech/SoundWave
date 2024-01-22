
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1" />

  <title>Categories</title>
  <!-- Loading third party fonts -->
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css" />
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <!-- Loading main css file -->
  <link rel="stylesheet" href="style.css" />

  <!--[if lt IE 9]>
      <script src="js/ie-support/html5.js"></script>
      <script src="js/ie-support/respond.js"></script>
    <![endif]-->
    <style>
      a{
        text-decoration: none;
      }
      .check{
        text-decoration: none;

        color: white;
      }
    </style>
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
                        <li class="menu-item current-menu-item"><a href="Categories.php">Categories</a></li>
                        <li class="menu-item"><a href="about.php">About</a></li>
                        
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
            <li class="menu-item "><a href="searching.php"> <i class="bi bi-search"></i></a></li>
                    </ul>
                    <!-- .menu -->
                </nav>
                <!-- .main-navigation -->
                <div class="mobile-menu"></div>
            </div>
        </header>
    <!-- .site-header -->
    
    <main class="main-content">
      <div class="fullwidth-block gallery">
        <div class="container">
          <div class="content fullwidth">
          <div class="filter-links" style="float: right;"><a href="Categories.php" >Music's</a>
              <a href=""  class="current">Video's </a></div>
            <h2 class="entry-title">Categories</h2>
            <div class="filter-links filterable-nav">
             
              <select class="mobile-filter">
                <option value="*">Show all</option>

                <option value=".ALBUM">ALBUM</option>
                <option value=".ARTIST">ARTIST</option>
                <option value=".YEAR">YEAR</option>
                <option value=".GENRE">GENRE</option>
                <option value=".LANGUAGE ">LANGUAGE </option>
              </select>
              <a href="#" class="current" data-filter="*">Show all</a>

              <a href="index.php" data-filter=".ALBUM">ALBUM</a>
              <a href="#" data-filter=".ARTIST">ARTIST</a>
              <a href="#" data-filter=".YEAR">YEAR </a>
              <a href="#" data-filter=".GENRE">GENRE</a>
              <a href="#" data-filter=".LANGUAGE ">LANGUAGE </a>

              
            </div>
            
            <div class="filterable-items">

              <!-- <div class="filterable-items"> -->
              <?php
              include('include/config.php');
              $query = ('SELECT * FROM video where ctg_id =1');

              $data = mysqli_query($db, $query);

              while ($row = mysqli_fetch_assoc($data)) {
                // $product_id = $row['productId'];


                echo ' <div class="filterable-item ARTIST">
               
                  <a href="video_details.php?id=' . $row['video_id'] . '"
                    ><figure>
                      <img src="../admin/upload/' . $row['filepath'] . ' "/>
                      <center> <h4 class="check">' . $row['artist'] . '</h4> </center>
                      </figure
                  ></a>
                 
                </div>  ';
              } ?>



              <?php

              $query = ('SELECT * FROM album');

              $data1 = mysqli_query($db, $query);

              while ($row1 = mysqli_fetch_assoc($data1)) {
                // $product_id = $row['productId'];


                echo ' <div class="filterable-item ALBUM">
               
                  <a href="album_details.php?id=' . $row1['album_id'] . '"
                    ><figure>
                      <img src="../admin/upload/' . $row1['album_img'] . ' "/>
                      <center> <h4 class="check">' . $row1['album_name'] . '</h4> </center>
                     
                      </figure
                  ></a>
                 
                </div>  ';
              } ?>

              <?php

              $query = ('SELECT * FROM talha_database.video where ctg_id =2');

              $data2 = mysqli_query($db, $query);

              while ($row2 = mysqli_fetch_assoc($data2)) {
                // $product_id = $row['productId'];


                echo ' <div class="filterable-item YEAR">
             
                <a href="video_details.php?id=' . $row2['video_id'] . '"
                  ><figure>
                    <img src="../admin/upload/' . $row2['filepath'] . ' "/>
                    <center> <h4 class="check">' . $row2['year'] . '</h4> </center>
                    </figure
                ></a>
               
              </div>  ';
              } ?>

              <?php

              $query = ('SELECT * FROM talha_database.video where ctg_id =3');

              $data3 = mysqli_query($db, $query);

              while ($row3 = mysqli_fetch_assoc($data3)) {
                // $product_id = $row['productId'];


                echo ' <div class="filterable-item GENRE">
             
                <a href="video_details.php?id=' . $row3['video_id'] . '"
                  ><figure>
                    <img src="../admin/upload/' . $row3['filepath'] . ' "/>
                    <center> <h4 class="check">' . $row3['genre'] . '</h4> </center>
                    </figure
                ></a>
               
              </div>  ';
              } ?>


              <?php

              $query = ('SELECT * FROM talha_database.video where ctg_id =4');

              $data4 = mysqli_query($db, $query);

              while ($row4 = mysqli_fetch_assoc($data4)) {
                // $product_id = $row['productId'];


                echo ' <div class="filterable-item LANGUAGE">
             
                <a href="video_details.php?id=' . $row4['video_id'] . '"
                  ><figure>
                    <img src="../admin/upload/' . $row4['filepath'] . ' "/>
                    <center> <h4 class="check">' . $row4['name'] . '</h4> </center>
                    </figure
                ></a>
               
              </div>  ';
              } ?>
              <!-- <div class="filterable-item ALBUM">
                  <a href="dummy/large-gallery/gallery-2.jpg"
                    ><figure>
                      <img src="dummy/gallery-2.jpg" alt="gallery 2" />
                      <figcaption>year</figcaption>
                      </figure
                  ></a>
                </div> -->
             
            </div>
          </div>
        </div>
      </div>


      <!-- .testimonial-section -->
    </main>
    <!-- .main-content -->

    <?php
    include('include/footer.php'); ?>
    <!-- .site-footer -->
  </div>
  <!-- #site-content -->

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/app.js"></script>
</body>

</html>