<?php

include('include/config.php');

$video_id=$_GET['id'];

$sql1 = "SELECT * FROM video WHERE video_id = {$video_id}";

$result = mysqli_query($db,$sql1) or die("Query Failed : Select");
$row = mysqli_fetch_assoc($result);

unlink("upload/".$row['filepath']);       //unlink() Means Delete Any File From Folder 

$sql = "DELETE FROM video WHERE video_id = {$video_id};";

// $sql .= "UPDATE category SET post = post-1 WHERE category_id = {$cat_id}";

if(mysqli_multi_query($db,$sql))
{
    echo "  <script> 
    alert('video delete');
    window.location.href='video.php'
    </script> ";}
else{

    echo "Query Failed";
}

?>