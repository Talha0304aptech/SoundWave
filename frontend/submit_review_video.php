<?php

//    $servername = "localhost";
//    $username = "root";
//    $password = "";
//    $dbname = "talha_database";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
include('include/config.php');
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $product_id = $_POST["product"];
    $name = $_POST["name"];
    $video_id=$_POST["video_id"];
    $rating = $_POST["rating"];
    $comment = $_POST["comment"];

// echo $music_id;


    $stmt = $db->prepare("INSERT INTO rating_video ( user_name,video_id,rating,review) VALUES ( ?, ?, ?,?)");
    $stmt->bind_param("siss", $name, $video_id, $rating, $comment);

    if ($stmt->execute()) {
         echo "  <script> 
        alert('Your Review and Rating Submitted Successfully.');
        window.location.href='video_details.php?id={$video_id}'
        </script> "; 
        // echo "Review submitted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // $stmt->close();
}

$db->close();
?>
