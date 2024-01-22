<?php
session_start(); // Start the session

// Check if the Super Admin is logged in (you may use a more secure method for this in a real application)
if (!isset($_SESSION['super_admin_logged_in']) || $_SESSION['super_admin_logged_in'] !== true) {
    header("location: superAdmin_Login.php"); // Redirect to the login page if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow&display=swap');

        body {
            font-family: 'Barlow', sans-serif;
        }

        a:hover {
            text-decoration: none;
        }

        .border-left {
            border-left: 2px solid var(--primary) !important;
        }


        .sidebar {
            top: 0;
            left: 0;
            z-index: 100;
            overflow-y: auto;
        }

        .overlay {
            background-color: rgb(0 0 0 / 45%);
            z-index: 99;
        }

        /* sidebar for small screens */
        @media screen and (max-width: 767px) {

            .sidebar {
                max-width: 18rem;
                transform: translateX(-100%);
                transition: transform 0.4s ease-out;
            }

            .sidebar.active {
                transform: translateX(0);
            }

        }
    </style>
</head>

<body>
    <!-- overlay -->
    <div id="sidebar-overlay" class="overlay w-100 vh-100 position-fixed d-none"></div>

    
    <!-- sidebar -->
<div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
  <br>
  <img src="../frontend/dummy/nav_logo.png" alt="" >
  <br><br>
  <!-- <h1 class=" text-primary d-flex my-4 justify-content-center"></h1> -->
  <div class="list-group rounded-0">
    <a href="index.php" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
      <span class="bi bi-border-all"></span>
      <span class="ml-2">Dashboard</span>
    </a>
    <a href="User_Account.php" class="list-group-item list-group-item-action border-0 align-items-center">
      <span class="bi bi-person-circle"></span>
      <span class="ml-2">User Account</span>
    </a>
    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#sale-collapse">
      <div>
        <span class="bi bi-star-fill"></span>
        <span class="ml-2">review rating</span>
      </div>
      <span class="bi bi-chevron-down small"></span>
    </button>
    <div class="collapse" id="sale-collapse" data-parent="#sidebar">
      <div class="list-group">
        <a href="Music_review_rating.php" class="list-group-item list-group-item-action border-0 pl-5 ">Music review rating</a>
        <a href="video_review_rating.php" class="list-group-item list-group-item-action border-0 pl-5">Video review rating</a>
        <a href="album_review_rating.php" class="list-group-item list-group-item-action border-0 pl-5">Album review rating</a>
      </div>
    </div>
<!-- ========== -->
    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#sale-collap">
      <div>
        <span class="bi bi-camera-video"></span>
        <span class="ml-2">video</span>
      </div>
      <span class="bi bi-chevron-down small"></span>
    </button>
    <div class="collapse" id="sale-collap" data-parent="#sidebar">
      <div class="list-group">
        <a href="add_video.php" class="list-group-item list-group-item-action border-0 pl-5 ">Add Video</a>
        <a href="video.php" class="list-group-item list-group-item-action border-0 pl-5">Video</a>
      </div>
    </div>

    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapse">
      <div>
        <span class="bi bi-music-note-beamed"></span>
        <span class="ml-2">Music</span>
      </div>
      <span class="bi bi-chevron-down small"></span>
    </button>

    <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
      <div class="list-group">
        <a href="add_music.php" class="list-group-item list-group-item-action border-0 pl-5">Add Music</a>
        <a href="music.php" class="list-group-item list-group-item-action border-0 pl-5">Music</a>
      </div>
    </div>
    <!-- album -->
    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapses">
      <div>
        <span class="bi bi-journal-album"></span>
        <span class="ml-2">Album</span>
      </div>
      <span class="bi bi-chevron-down small"></span>
    </button>
    
    <div class="collapse" id="purchase-collapses" data-parent="#sidebar">
      <div class="list-group">
        <a href="create_album.php" class="list-group-item list-group-item-action border-0 pl-5">Create Album</a>
        <a href="add_album_video.php" class="list-group-item list-group-item-action border-0 pl-5">Add Video</a>
        <a href="album.php" class="list-group-item list-group-item-action border-0 pl-5">Album</a>
      </div>
    </div>
  </div>
</div>


    <div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">
        <!-- top nav -->
        <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
            <!-- close sidebar -->
            <button class="btn py-0 d-lg-none" id="open-sidebar">
                <span class="bi bi-list text-primary h3"></span>
            </button>
            <div class="dropdown ml-auto">
                <button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                    <span class="bi bi-person text-primary h4"></span>
                    <span>admin</span>
                    <span class="bi bi-chevron-down ml-1 mb-2 small"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                    <a class="dropdown-item" href="superadminlogout.php">Logout</a>
                    <!-- <a class="dropdown-item" href="#">Settings</a> -->
                </div>
            </div>
        </nav>

        <!-- main content -->
        <main class="p-4 min-vh-100">
            <div class="container-fluid">

                <!-- start page title -->
                <!-- <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">Starter</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> -->
                <!-- end page title -->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h2>Add Album video</h2>

                                <div class="tab-content mt-3">
                                    <div class="tab-pane show active" id="basic-form-preview">
                                        <!-- <form action="" method="POST"> -->
                                        <form action="save_add_album_video.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="mt-1 mb-3 col-2">

                                                    <label for="exampleInputEmail1" class="form-label">video Name : </label>
                                                </div>
                                                <div class=" col-10">
                                                    <input type="text" name="video_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
                                                </div>


                                                <div class="mt-1 mb-3 col-2">
                                                    <label for="exampleInputEmail1" class="form-label">Artist Name : </label>
                                                </div>
                                                <div class=" col-10">
                                                    <input type="text" name="artist_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>

                                                </div>
                                                <div class="mt-1 mb-3 col-2">
                                                    <label for="exampleInputEmail1" class="form-label">Year : </label>
                                                </div>
                                                <div class=" col-10">
                                                    <input type="number" name="year_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
                                                </div>

                                                <div class="mt-1 mb-3 col-2">
                                                    <label for="exampleInputEmail1" class="form-label">Genre : </label>
                                                </div>
                                                <div class=" col-10">
                                                    <input type="text" name="genre_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
                                                </div>

                                                <div class="mt-1 mb-3 col-2">
                                                    <label for="exampleInputEmail1" class="form-label">Image : </label>
                                                </div>
                                                <div class=" col-10">
                                                    <input type="file" name="video_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                </div>

                                                <!-- <div class="mt-1 mb-3 col-2">
                                                    <label for="exampleInputEmail1" class="form-label">Release Date : </label>
                                                </div>
                                                <div class=" col-10">
                                                    <input type="date" name="release_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Genre">
                                                </div>
-->
                                                <div class="mt-1 mb-3 col-2">
                                                    <label for="exampleInputEmail1" class="form-label">Trailer link : </label>
                                                </div>
                                                <div class=" col-10">
                                                    <input type="text" name="video_trailer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
                                                </div> 

                                                <div class="mt-1 mb-3 col-2">
                                                    <label for="exampleInputEmail1" class="form-label">Description : </label>
                                                </div>
                                                <div class="col-10">
                                                    <textarea name="video_desc" class="form-control" id="example-textarea" rows="5" required></textarea>
                                                </div>

                                                <div class="mt-3 mb-3 col-2">
                                                    <label for="exampleInputEmail1" class="form-label">Select Album : </label>
                                                </div>
                                                <div class="mt-2 col-10">
                                                    <select name="album_name" class="form-select" id="example-select" required>
                                                        <option disabled>Select Album</option>
                                                        <?php
                                                        include('include/config.php');
                                                        $sql = "SELECT * FROM album"; // if there is anyname same username record be not be inserted
                                                        $result = mysqli_query($db, $sql) or die("Query Failed");
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo "<option value='{$row['album_id']}'>{$row['album_name']}</option>";
                                                            }
                                                        }
                                                        else{
                                                            echo "'><option> create album</option>";
                                                        }
                                                        ?>
                                                        
                                                    </select>
                                                </div>


                                            </div>
                                            <button type="submit" name="add_video" class="btn btn-primary">ADD</button>
                                        </form>
                                    </div> <!-- end preview-->

                                </div> <!-- end tab-content-->

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container -->
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(() => {

            $('#open-sidebar').click(() => {

                // add class active on #sidebar
                $('#sidebar').addClass('active');

                // show sidebar overlay
                $('#sidebar-overlay').removeClass('d-none');

            });


            $('#sidebar-overlay').click(function() {

                // add class active on #sidebar
                $('#sidebar').removeClass('active');

                // show sidebar overlay
                $(this).addClass('d-none');

            });

        });
    </script>
   
</body>

</html>