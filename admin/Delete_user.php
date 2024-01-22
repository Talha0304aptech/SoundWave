<?php

include('include/config.php');

$user_id=$_GET['id'];

$sql1 = "SELECT * FROM user WHERE user_id = {$user_id}";

$result = mysqli_query($db,$sql1) or die("Query Failed : Select");
$row = mysqli_fetch_assoc($result);

       //unlink() Means Delete Any File From Folder 

$sql = "DELETE FROM user WHERE user_id = {$user_id};";

// $sql .= "UPDATE category SET post = post-1 WHERE category_id = {$cat_id}";

if(mysqli_multi_query($db,$sql))
{
    echo "  <script> 
    alert('user account delete');
    window.location.href='User_Account.php'
    </script> ";}
else{

    echo "Query Failed";
}

?>