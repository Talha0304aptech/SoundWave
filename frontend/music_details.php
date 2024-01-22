<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: login.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet"
    type="text/css" />
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Loading main css file -->
  <link rel="stylesheet" href="style.css" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Loading main css file -->
  <link rel="stylesheet" href="style.css" />
  <style>
    .product-details-page {
      padding: 20px;
    }

    .product-details-page h2 {
      font-weight: bold;
    }

    .product-details-page .price {
      margin-top: 30px;
      font-size: 20px;
      font-weight: bold;
    }

    .product-details-page .price del {
      font-weight: 100;
      font-size: 17px;
    }

    .product-details-page .product-info {
      text-align: left;
    }

    .product-details-page .product-info .title {
      font-weight: bold;
      font-size: 16px;
      margin-right: 20px;
    }

    .product-details-page .product-info .data {
      font-size: 16px;
    }

    .product-details-page .product-info .colors {
      list-style: none;
    }

    .product-details-page .product-info .colors li {
      display: inline-block;
      width: 25px;
      height: 25px;
      border: 2px solid white;
    }

    .product-details-page .product-info .colors li.active {
      border: 2px solid black;
    }

    .product-details-page .product-info .colors .red {
      background-color: red;
    }

    .product-details-page .product-info .colors .blue {
      background-color: blue;
    }

    .product-details-page .product-info .colors .green {
      background-color: green;
    }

    .product-details-page .product-info .colors .yellow {
      background-color: yellow;
    }

    .product-details-page .product-info .sizes {
      list-style: none;
    }

    .product-details-page .product-info .sizes li {
      font-weight: bold;
      cursor: pointer;
      display: inline-block;
      line-height: 25px;
      width: 25px;
      height: 25px;
      background: BlanchedAlmond;
      text-align: center;
      border: 2px solid white;
    }

    .product-details-page .product-info .sizes li.active {
      border: 2px solid black;
    }

    .product-details-page .product-info .sizes li a {
      color: #333;
    }

    .owl-carousel .owl-nav button.owl-next,
    .owl-carousel .owl-nav button.owl-prev {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 40px;
      height: 40px;
      border-radius: 50%;
      font-size: 40px;
      padding-bottom: 5px !important;
      line-height: 0;
    }

    .owl-theme .owl-nav [class*=owl-]:hover {
      opacity: 0.5;
    }

    .owl-nav button.owl-next {
      right: 10px;
    }

    .owl-nav button.owl-prev {
      left: 10px;
    }

    * {
      color: rgb(165, 143, 143);
    }
  </style>
</head>

<body style="background-color: black;"> <header class="site-header">
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
  <?php
  $music_id = $_GET['id'];
  //  $conn=mysqli_connect("localhost","root","","crud_operations") or die("connection failed");
  include('include/config.php');
  $query = "select * from music where music_id = {$music_id}";
  $data = mysqli_query($db, $query) or die("querry dailed");
  if (mysqli_num_rows($data) > 0) {
    while ($rows = mysqli_fetch_assoc($data)) {
  ?>

      <div class='container product-details-page'>
        <div class='row'>
          <br><br>
          <div class="col-md-4">

            <?php echo '<h2>' . $rows['name'] . ' </h2>' ?>
            <!-- <h5>Product sub title</h5> -->
            <div class="price">
              <!-- <p>$ 1900.00 <del>$ 2000.00</del></p> -->
              
            </div>
            <hr />
            <div class="product-info">
              <div class='row'>
                <div class="col-md-6">
                  <p class="title">Artist:</p>
                </div>
                <div class="col-md-6">
                  <?php echo ' <p class="data"> ' . $rows['artist'] . '</p>' ?>
                </div>
              </div>
              <div class='row'>
                <div class="col-md-6">
                  <p class="title">Year:</p>
                </div>
                <div class="col-md-6">
                  <?php echo ' <p class="data"> ' . $rows['year'] . '</p>' ?>
                </div>
              </div>
              <div class='row'>
                <div class="col-md-6">
                  <p class="title">Genre:</p>
                </div>
                <div class="col-md-6">
                  <?php echo ' <p class="data"> ' . $rows['genre'] . '</p>' ?>
                </div>
              </div>
            </div>
            <hr />
            <div class="product-info">
              <div class='row' >
                <div class="col-md-6" >
                  <p class="title">description:</p>
                  
                </div>
                <!-- <div class="col-md-6">
                
                </div> -->
                <?php echo ' <p class="data" > <br> <br> &nbsp;  &nbsp;  &nbsp;  &nbsp;  ' . $rows['description'] . '</p> ';?>
              </div>

            </div> 
            <!-- <hr /> -->
            
          </div><br><br>
          
       
          <div class="col-md-8" ><br>
            <div class="owl-carousel owl-theme " >
              <iframe style="float: right;" width="600" height="350" <?php echo ' src=" ' . $rows['trailer'] . ' " ' ?>title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            
            </div>
          </div>
        </div>

      </div>
  <?php }
  } ?>
   <style>
        /* body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        } */

        /* header {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        } */

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color:#191919;
            box-shadow: 0 0 10px rgb(0,0,0,0);
            border-radius: 5px;
}
        

        /* #reviews {
            margin-top: 20px;
        } */

        .review {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #fff;
        }

        /* form {
            margin-top: 20px;
        } */

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            background-color: #333;
        }

        input[type="submit"] {
            background-color: orangered;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }


    
/* form {
    width: 300px;
} */

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

.star-rating input:checked ~ label:before {
    color: #FFD700;
}
    </style>
    <br><br><br>
  <main>

<form action="submit_review_music.php" method="post">
<!-- <form action="submit_review.php" method="post" id="reviewForm"> -->


  <input type="hidden" value="<?php $music_id = $_GET['id'];   echo $music_id;?>" name="music_id"/>
<center><h1>Review and Rating</h1></center>

    <label for="username" >Your Name:</label>
    <input type="text" id="username" name="name" required>

    <!-- <label for="rating">Rating :</label> -->
    <!-- <input type="number" id="rating" name="rating" min="1" max="5" required> -->
    <label for="rating">Rating:</label>
    <div class="star-rating">
        <input type="radio" id="star5" name="rating" value="5" ><label for="star5" ></label>
        <input type="radio" id="star4" name="rating" value="4"><label for="star4"></label>
        <input type="radio" id="star3" name="rating" value="3"><label for="star3"></label>
        <input type="radio" id="star2" name="rating" value="2"><label for="star2"></label>
        <input type="radio" id="star1" name="rating" value="1"><label for="star1"></label>
    </div><br>
    <label for="comment">Your Review:</label>
    <textarea id="comment" name="comment" rows="4" required></textarea>

    <input type="submit" value="Submit Review" >
</form>
</main>

<br><br>



<?php
 $music_id = $_GET['id'];
?>

<div class="fullwidth-block testimonial-section " >


       
              <?php
              include('include/config.php');
              $query = "select user_name,name,rating,review 
          from rating_music a
          inner join
          music b
          on a.music_id=b.music_id where b.music_id={$music_id}";

              $music_data = mysqli_query($db, $query) or die("querry dailed");
              if (mysqli_num_rows($music_data) > 0) {
              echo '  <div class="container" data-bg-color="#191919" style="width: 70%; border-radius: 6px;">
                <div class="quote-slider" height:300px;>
                  <ul class="slides">';

                while ($music_rows = mysqli_fetch_assoc($music_data)) {

                  echo '  <li>
                <blockquote >
                  <p>' . $music_rows['review'] . '</p>

                  <div class="star-rating"> ';

                  for ($i = 1; $i <= $music_rows['rating']; $i++) {
                    echo ' <input type="radio" id="star5" name="rating" value='. $music_rows['rating'] .'><label for="star5" style="color: #FFD700;"></label>';
                  }
                  echo '  </div><br>

                 <span>Music Name: <Span style="color: whitesmoke;">' . $music_rows['name'] . '</Span></span><br>
                  <cite>' . $music_rows['user_name'] . '</cite>
                  
                </blockquote>
              </li>';
                }
              
          echo '    
            </ul>
          </div>
        </div>
      ';} ?>
    <?php include('include/footer.php');?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
    $(".owl-carousel").owlCarousel({
      //   loop: true,
      margin: 10,
      items: 1,
      dots: false,
      nav: true,
      navSpeed: 1000
    });
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/app.js"></script>
</body>

</html>