
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1" />

  <title>Home</title>
  <!-- Loading third party fonts -->
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Loading main css file -->
  <link rel="stylesheet" href="style.css" />


  <style>
    a {
      text-decoration: none;

      label {
        display: block;
        margin-top: 10px;
      }

      .star-rating {
        display: inline-block;
      }

      .star-rating input {
        display: none;
      }

      .star-rating label {
        float: right;
        padding: 0;
        cursor: pointer;
      }

      .star-rating label:before {
        content: '\2605';
        font-size: 30px;
      }

      .star-rating input:checked~label:before {
        color: #FFD700;
      }
    }
  </style>
</head>

<body class="header-collapse">
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
                        <li class="menu-item current-menu-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="menu-item"><a href="Categories.php">Categories</a></li>
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
            <li class="menu-item"><a href="searching.php"> <i class="bi bi-search"></i></a></li>
                    </ul>
                    <!-- .menu -->
                </nav>
                <!-- .main-navigation -->
                <div class="mobile-menu"></div>
            </div>
        </header>
    <!-- .site-header -->

    <div class="hero">
      <div class="slider">
        <ul class="slides">
          <li class="lazy-bg" data-background="dummy/slide-1.jpg">
            <div class="container">
              <h2 class="slide-title">CONNECT ON SOUND WAVE</h2>
              <h3 class="slide-subtitle">
                Get The High Quality Assets Created <br />By Top Industry
                Artists
              </h3>
              <!-- <p class="slide-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Fugiat aliquid minus nemo sed est.</p> -->

              <a href="about.php" class="button cut-corner">Read More</a>
            </div>
          </li>
          <li class="lazy-bg" data-background="dummy/slide-2.jpg">
            <div class="container">
              <h2 class="slide-title">Tranding Now Sound Wave</h2>
              <h3 class="slide-subtitle">
                Get The High Quality Assets Created <br />By Top Industry
                Artists
              </h3>
              <!-- <p class="slide-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Fugiat
								aliquid minus nemo sed est.</p> -->

              <a href="about.php" class="button cut-corner">Read More</a>
            </div>
          </li>
          <li class="lazy-bg" data-background="dummy/slide-3.jpg">
            <div class="container">
              <h2 class="slide-title">
                All You Need To Create<br />
                Amazing Videos & Song
              </h2>
              <h3 class="slide-subtitle">
                Get The High Quality Assets Created <br />By Top Industry
                Artists
              </h3>
              <!-- <p class="slide-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Fugiat
								aliquid minus nemo sed est.</p> -->

              <a href="about.php" class="button cut-corner">Read More</a>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <main class="main-content">
      <div class="fullwidth-block testimonial-section">
        <div class="container">
          <div class="quote-slider">
            <ul class="slides">
              <?php
              include('include/config.php');
              $query = "select user_name,name,rating,review 
          from rating_music a
          inner join
          music b
          on a.music_id=b.music_id ";

              $music_data = mysqli_query($db, $query) or die("querry dailed");
              if (mysqli_num_rows($music_data) > 0) {
                while ($music_rows = mysqli_fetch_assoc($music_data)) {

                  echo '  <li>
                <blockquote>
                  <p>' . $music_rows['review'] . '</p>

                  <div class="star-rating"> ';

                  for ($i = 1; $i <= $music_rows['rating']; $i++) {
                    echo '<label  style="color: #FFD700;"><i class="bi bi-star-fill"></i></label>';
                  }
                  echo '  </div><br>

                 <span>Music Name: <Span style="color: whitesmoke;">' . $music_rows['name'] . '</Span></span><br>
                  <cite>' . $music_rows['user_name'] . '</cite>
                  
                </blockquote>
              </li>';
                }
              } ?>

              <?php
              include('include/config.php');
              $query = "select user_name,name,rating,review 
              from rating_video a
              inner join
              video b
              on a.video_id=b.video_id";

              $video_data = mysqli_query($db, $query) or die("querry dailed");
              if (mysqli_num_rows($video_data) > 0) {
                while ($video_rows = mysqli_fetch_assoc($video_data)) {

                  echo '  <li>
                <blockquote>
                  <p>' . $video_rows['review'] . '</p>

                  <div class="star-rating"> ';

                  for ($i = 1; $i <= $video_rows['rating']; $i++) {
                    echo '<label  style="color: #FFD700;"><i class="bi bi-star-fill"></i></label>';
                  }
                  echo '  </div><br>

                 <span>Video Name: <Span style="color: whitesmoke;">' . $video_rows['name'] . '</Span></span><br>
                  <cite>' . $video_rows['user_name'] . '</cite>
                  
                </blockquote>
              </li>';
                }
              } ?>

              <?php
              include('include/config.php');
              $query = "select user_name,name,rating,review 
              from album_rating_video a
              inner join
              album_videos b
              on a.album_videos_id=b.album_videos_id";

              $album_data = mysqli_query($db, $query) or die("querry dailed");
              if (mysqli_num_rows($album_data) > 0) {
                while ($album_rows = mysqli_fetch_assoc($album_data)) {

                  echo '  <li>
                <blockquote>
                  <p>' . $album_rows['review'] . '</p>

                  <div class="star-rating"> ';

                  for ($i = 1; $i <= $album_rows['rating']; $i++) {
                    echo '<label  style="color: #FFD700;"><i class="bi bi-star-fill"></i></label>';
                  }
                  echo '  </div><br>

                 <span>Album Video Name: <Span style="color: whitesmoke;">' . $album_rows['name'] . '</Span></span><br>
                  <cite>' . $album_rows['user_name'] . '</cite>
                  
                </blockquote>
              </li>';
                }
              } ?>
            </ul>
          </div>
        </div>
      </div>
      <!-- .testimonial-section -->

      

      <div class="fullwidth-block why-chooseus-section " data-bg-color="#191919">
<br>
        <div class="container">
         <center> <h2 class="section-title">
            Latest Music
          </h2></center>

          <div class="row">
            <?php
            include('include/config.php');
            $query = "SELECT * FROM music
          ORDER BY music_id DESC
          LIMIT 6;";

            $data = mysqli_query($db, $query) or die("querry dailed");
            if (mysqli_num_rows($data) > 0) {
              while ($rows = mysqli_fetch_assoc($data)) {
            ?>

            <?php echo '   <div class="col-md-4 event ">
              
              <a href="music_details.php?id=' . $rows['music_id'] . '">  

               <div class="feature">
              
                <figure class="cut-corner">
                <div class="entry-date" style="width: 88px;">
                <div class="date">New</div>
                <span class="month"></span>
              </div>
                  <img src="../admin/upload/' . $rows['filepath'] . ' " alt="" />
                </figure>
                <h3 class="feature-title">' . $rows['name'] . '</h3>
              
              </div></a>
              
            </div>
             ';
              }
            } ?>
            
          </div>
        </div>
        <!-- .container -->
      </div>

      <div class="container">
       
        <center> <h2 class="section-title">
            Latest Video's

          </h2></center>
        <div class="row">
          <?php
          include('include/config.php');
          $query = "SELECT * FROM video
          ORDER BY video_id DESC
          LIMIT 6;";

          $data1 = mysqli_query($db, $query) or die("querry dailed");
          if (mysqli_num_rows($data1) > 0) {
            while ($rows1 = mysqli_fetch_assoc($data1)) {
          ?>

          <?php echo '   <div class="col-md-4 event">
               <a href="video_details.php?id=' . $rows1['video_id'] . '"> 
              <div class="feature">
              
                <figure class="cut-corner">
                <div class="entry-date" style="width: 100px;">
                <div class="date">New</div>
                <span class="month"></span>
              </div>
                  <img src="../admin/upload/' . $rows1['filepath'] . ' " alt="" />
                </figure>
                <h3 class="feature-title">' . $rows1['name'] . '</h3>
               
              </div></a>
              
            </div>
             ';
            }
          } ?>

        </div>
      </div>
      <!-- .why-chooseus-section -->

    </main>
    <!-- .main-content -->


    <?php
    include('include/footer.php'); ?>
  </div>
  <!-- #site-content -->

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/app.js"></script>
</body>

</html>