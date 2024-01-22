<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Loading main css file -->
  <link rel="stylesheet" href="style.css" />
    <style>
    /* .search-container {
        margin-top: 7rem;
    } */
</style>
</head>
<body>
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
            <li class="menu-item current-menu-item"><a href="searching.php"> <i class="bi bi-search"></i></a></li>
                    </ul>
                    <!-- .menu -->
                </nav>
                <!-- .main-navigation -->
                <div class="mobile-menu"></div>
            </div>
        </header>




<?php
// session_start();
// include "config.php";
include('include/config.php');
?>
<div class="container search-container">
    <!-- <div class="row"> -->
       <a href="" style="color: whitesmoke;" ></a>
        <center><div class="col-9 m-auto ">
        <h1 style="text-align: center; padding: 0 0 10px 0;">Search Video & Music</h1>
            <input type="search" name="search" id="search-input" placeholder="Search movie" style="background: var(--container-color); padding: 8px 12px; border-radius: 6px; width: 70%;color: whitesmoke;">
        </div></center>
    <!-- </div> -->
</div><br><br><br>

<div id="table-data" class="mt-5"></div>
<?php include('include/footer.php');?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    // Live Search
    $(document).ready(function() {
        $("#search-input").on("input", function() {
            var search_term = $(this).val();
            if (search_term != "") {


                $.ajax({
                    url: "live_search.php",
                    type: "POST",
                    data: {
                        search: search_term
                    },
                    success: function(data) {
                        $("#table-data").html(data);
                    }
                });
            } else {
                $('#table-data').html('');
            }
        });
    });
</script>
</html>






