<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the provided credentials match the Super Admin
    if ($username === "admin123" && $password === "admin123") {
        // Set a session variable to mark the Super Admin as logged in
        $_SESSION['super_admin_logged_in'] = true;

        // Redirect to the index.php page upon successful login
        header("location: index.php");
        exit;
    } else {
        echo "  <script> 
        alert('Invalid credentials. Please try again');
        window.location.href='superAdmin_Login.php'
        </script> ";
        
        
       
    }
}
?>
  