<?php

include('include/config.php');

$music_id=$_GET['id'];

$sql1 = "SELECT * FROM music WHERE music_id = {$music_id}";

$result = mysqli_query($db,$sql1) or die("Query Failed : Select");
$row = mysqli_fetch_assoc($result);

unlink("upload/".$row['filepath']);       //unlink() Means Delete Any File From Folder 

$sql = "DELETE FROM music WHERE music_id = {$music_id};";

// $sql .= "UPDATE category SET post = post-1 WHERE category_id = {$cat_id}";

if(mysqli_multi_query($db,$sql))
{
    echo "  <script> 
    alert('video delete');
    window.location.href='music.php'
    </script> ";}
else{

    echo "Query Failed";
}

?>