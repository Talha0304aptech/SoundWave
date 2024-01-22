<!doctype html>
<html lang="en">
  <head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('include/config.php');
    // include '_dbconnect.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $existSql = "SELECT * FROM `user` WHERE email = '$email'";
    $result = mysqli_query($db, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
       
      

    echo "  <script> 
    alert('Error!Username Already Exists');
    window.location.href='Account.php'
    </script> ";
    }
    else{
         
        if(($password == $cpassword)){
   $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user` ( `name`,`email`, `password`) VALUES ('$name', '$email','$hash')";
            $result = mysqli_query($db, $sql);
            if ($result){
             
                header('Location:login.php');
            }
            
        }
        else{
    //       echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    //     <strong>Error!Passwords do not match"</strong> 
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //     </button>
    // </div> ';

    echo "  <script> 
    alert('Error!Passwords do not match');
    window.location.href='Account.php'
    </script> ";
        }
    }
}
    
?>

