<?php

include('include/config.php');

if (isset($_FILES['video_img']) ) 
{
    $errors = array();

    $file_name = $_FILES['video_img']['name'];
    $file_size = $_FILES['video_img']['size'];
    $file_tmp = $_FILES['video_img']['tmp_name'];
    $file_type = $_FILES['video_img']['type'];
    $tmp=explode('.',$file_name);
    $file_ext =  end($tmp);
    $extensions = array("jpeg","jpg","png","avif","JPEG","JPG","PNG","AVIF");

    if (in_array($file_ext,$extensions) === false)
    {        
        $errors[] = "This Extension file Not Allowed,Please Choose a JPG or PNG file.";
    }
    if ($file_size > 2097152) // 2MB 
    {
        $errors[] = "file size must be 2mb or lower.";    
    }
    if(empty($errors)==true){

        move_uploaded_file($file_tmp,"upload/".$file_name);
    }
    else{
        print_r($errors);
        die();
    }
}



$video_name=mysqli_real_escape_string($db,$_POST["video_name"]);
$artist_name=mysqli_real_escape_string($db,$_POST["artist_name"]);
$year_name=mysqli_real_escape_string($db,$_POST["year_name"]);
$genre_name=mysqli_real_escape_string($db,$_POST["genre_name"]);
// $release_date=date('y-m-d',strtotime($_POST["release_date"]));
$movie_desc=mysqli_real_escape_string($db,$_POST["video_desc"]);
$video_trailer=mysqli_real_escape_string($db,$_POST["video_trailer"]);
$album_name=mysqli_real_escape_string($db,$_POST["album_name"]);                            
//$author = $_SESSION["user_id"];


$sql = "INSERT INTO album_videos(name,artist,year,genre,description,filepath,trailer,album_id)              
VALUES ('$video_name','$artist_name','$year_name','$genre_name','$movie_desc','$file_name','$video_trailer','$album_name')";


if(mysqli_query($db,$sql))
{
    // header("Location: {$hostname}/admin/post.php"); 
    // echo "<p style='Color:red; text-align:center; margin:10px 0px; '>Added Movie</p>";
    // header("location: add_video.php");
    echo "  <script> 
        alert('Added Album Video');
        window.location.href='add_album_video.php'
        </script> ";
}
else{

    echo "<div class'alert alert-danger'>Query Failed.</div>";
}

?>