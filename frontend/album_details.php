<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1" />

    <title>About Us</title>
    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css" />

    <!--[if lt IE 9]>
      <script src="js/ie-support/html5.js"></script>
      <script src="js/ie-support/respond.js"></script>
    <![endif]-->
    <!-- <style>
        .album_img{
            width: 70%;
        } -->
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
        <?php
  $album_id = $_GET['id'];
  //  $conn=mysqli_connect("localhost","root","","crud_operations") or die("connection failed");
  include('include/config.php');
  $query = "select * from album where album_id = {$album_id}";
  $data2 = mysqli_query($db, $query) or die("querry dailed");
  if (mysqli_num_rows($data2) > 0) {
    while ($rows2 = mysqli_fetch_assoc($data2)) {

?>

        <main class="main-content">
            <div class="fullwidth-block inner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="content">

                           <?php   echo '  <h2 class="entry-title">' . $rows2['album_name'] . '</h2> 
                               <div class="album_img">
                                 <img src="../admin/upload/' . $rows2['album_img'] . ' " alt="post image" class="img-fluid" />
                                 </div>
                                 ';?>
                                <!-- <p class="leading">
                    Lorem ipsum  
                    laudantium illum, incidunt eligendi?
                  </p> -->
                                <!-- <p>
                    Sed ut perspiciatis unde omnis iste natus error sit
                     
                  </p>

                  <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus
                     
                  </p> -->  <?php }
  } ?>
                            </div>


                        </div>

                        <div class="col-md-4 col-md-push-1">
                            <aside class="sidebar">
                                <div class="widget">
                                    <h3 class="widget-title">ALL Videos</h3>
                                    <ul class="discography-list">
                                        <?php
                                        $album_id = $_GET['id'];

                                        include('include/config.php');
                                        $query = "select * from album_videos where album_id = {$album_id}";
                                        $data = mysqli_query($db, $query) or die("querry dailed");
                                        if (mysqli_num_rows($data) > 0) {
                                            while ($rows = mysqli_fetch_assoc($data)) {
                                        

                                               echo ' <a href="album_video_details.php?id=' . $rows['album_videos_id'] . '"><li>
                                               
                                                    <figure class="cover">
                                                        <img src="../admin/upload/' . $rows['filepath'] . ' " alt="thumbnail 1" />
                                                    </figure>
                                                    <div class="detail">
                                                        <h3><a>' . $rows['name'] . '</a></h3>
                                                        <span class="year">' . $rows['year'] . '</span>
                                                        <span class="track">' . $rows['genre'] . '</span>
                                                    </div>
                                                </li> </a>';
                                                ?>

                                                 <li>
                    
                                        <?php }
                                        } ?>
                                    </ul>
                                </div>
                            </aside>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>