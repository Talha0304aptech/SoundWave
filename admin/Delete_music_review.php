<?php

include('include/config.php');

$rating_id=$_GET['id'];

$sql1 = "SELECT * FROM rating_music WHERE rating_id = {$rating_id}";

$result = mysqli_query($db,$sql1) or die("Query Failed : Select");
$row = mysqli_fetch_assoc($result);
$sql = "DELETE FROM rating_music WHERE rating_id = {$rating_id};";

// $sql .= "UPDATE category SET post = post-1 WHERE category_id = {$cat_id}";

if(mysqli_multi_query($db,$sql))
{
    echo "  <script> 
    alert('Music review rating delete');
    window.location.href='Music_review_rating.php'
    </script> ";}
else{

    echo "Query Failed";
}

?>