
<?php

include('include/config.php');

if (empty($_FILES['new_video_img']['name']))
{
    $file_name = $_POST['old_image'];
    
    
}else{

    $errors = array();

    $file_name = $_FILES['new_video_img']['name'];
    $file_size = $_FILES['new_video_img']['size'];
    $file_tmp = $_FILES['new_video_img']['tmp_name'];
    $file_type = $_FILES['new_video_img']['type'];
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

// $movie_id=mysqli_real_escape_string($conn,$_POST["movie_id"]);
// $movie_name=mysqli_real_escape_string($conn,$_POST["movie_name"]);
// $release_date=mysqli_real_escape_string($conn,$_POST["release_date"]);
// $movie_trailer=mysqli_real_escape_string($conn,$_POST["movie_trailer"]);
// $movie_desc=mysqli_real_escape_string($conn,$_POST["movie_desc"]);
// $movie_genre=mysqli_real_escape_string($conn,$_POST["movie_genre"]);

$video_id=mysqli_real_escape_string($db,$_POST["video_id"]);
$video_name=mysqli_real_escape_string($db,$_POST["video_name"]);
$artist_name=mysqli_real_escape_string($db,$_POST["artist_name"]);
$year_name=mysqli_real_escape_string($db,$_POST["year_name"]);
$genre_name=mysqli_real_escape_string($db,$_POST["genre_name"]);
// $release_date=date('y-m-d',strtotime($_POST["release_date"]));
$movie_desc=mysqli_real_escape_string($db,$_POST["video_desc"]);
$video_trailer=mysqli_real_escape_string($db,$_POST["video_trailer"]);
$video_Category=mysqli_real_escape_string($db,$_POST["video_Category"]);                            
//$author = $_SESSION["user_id"];

$sql = "UPDATE video SET name='{$video_name}' , artist='{$artist_name}', year='{$year_name}', genre='{$genre_name}', description='{$movie_desc}', filepath='{$file_name}',trailer='{$video_trailer}',ctg_id={$video_Category}
        WHERE video_id={$video_id}";        

        $result = mysqli_query($db,$sql);
        if ($result) 
        {
            // header("Location: http://localhost/PHP/eProject(3rdSem)/Admin-Movie_Ticket_Booking_System/coderthemes.com/Movie.php");    
            echo "  <script> 
        alert('update successfully');
        window.location.href='video.php'
        </script> ";                 
        }
        else{
            echo "  <script> 
        alert('Query Failed');
        window.location.href='video.php'
        </script> "; 

            // echo "Query Failed";
        }

?>


