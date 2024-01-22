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
    $album_videos_id=$_POST["album_videos_id"];
    $rating = $_POST["rating"];
    $comment = $_POST["comment"];

// echo $music_id;


    $stmt = $db->prepare("INSERT INTO album_rating_video ( user_name,album_videos_id,rating,review) VALUES ( ?, ?, ?,?)");
    $stmt->bind_param("siss", $name, $album_videos_id, $rating, $comment);

    if ($stmt->execute()) {
         echo "  <script> 
        alert('Your Review and Rating Submitted Successfully.');
        window.location.href='album_video_details.php?id={$album_videos_id}'
        </script> "; 
        // echo "Review submitted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // $stmt->close();
}

$db->close();
?>
