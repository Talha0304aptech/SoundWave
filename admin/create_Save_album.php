<?php

include('include/config.php');

if (isset($_FILES['album_img']) ) 
{
    $errors = array();

    $file_name = $_FILES['album_img']['name'];
    $file_size = $_FILES['album_img']['size'];
    $file_tmp = $_FILES['album_img']['tmp_name'];
    $file_type = $_FILES['album_img']['type'];
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




$album_name=mysqli_real_escape_string($db,$_POST["album_name"]);

$sql = "SELECT album_name FROM album WHERE album_name = '{$album_name}' "; // if there is anyname same username record be not be inserted
$result = mysqli_query($db, $sql) or die("Query Failed");
if (mysqli_num_rows($result) > 0) {
    echo "<script> 
    alert('This Name Album Already Exists');
    window.location.href='create_album.php'
    </script>";
} else {

    $sql1 = "INSERT INTO album(album_name,album_img) 
                        VALUES ('$album_name','$file_name')";
    if (mysqli_query($db, $sql1)) {

        // echo "aaaaaa";
        // die;
         echo "  <script> 
alert('album added');
window.location.href='create_album.php'
</script> "; 
    }
}

// $sql = "INSERT INTO album(album_name,album_img)              
// VALUES ('$genre_name','$file_name')";


// if(mysqli_query($db,$sql))
// {
    
//     echo "  <script> 
//         alert('Album Added');
//         window.location.href='create_album.php'
//         </script> ";
// }
// else{

//     echo "<div class'alert alert-danger'>Query Failed.</div>";
// }

?>