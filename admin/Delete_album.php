<?php

include('include/config.php');

$album_id=$_GET['id'];

$sql1 = "SELECT * FROM album WHERE album_id = {$album_id}";

$result = mysqli_query($db,$sql1) or die("Query Failed : Select");
$row = mysqli_fetch_assoc($result);

unlink("upload/".$row['album_img']);       //unlink() Means Delete Any File From Folder 

$sql = "DELETE FROM album WHERE album_id = {$album_id}";

// $sql .= "UPDATE category SET post = post-1 WHERE category_id = {$cat_id}";

if(mysqli_multi_query($db,$sql))
{
    echo "  <script> 
    alert('Album delete');
    window.location.href='album.php'
    </script> ";}
else{

    echo "Query Failed";
}

?>