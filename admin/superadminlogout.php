<?php
session_start();
session_unset();
session_destroy(); // Destroy the session and log out the Super Admin

// Redirect to the login page
 echo "  <script> 
alert('successful logout');
window.location.href='index.php'
</script> ";
// header("location: superAdmin_Login.php");
// exit();
