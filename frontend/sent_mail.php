<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor1/phpmailer/phpmailer/src/Exception.php';
require 'vendor1/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor1/phpmailer/phpmailer/src/SMTP.php';
//   require 'phpmailer/src/Exception.php';
//  require 'phpmailer/src/PHPMailer.php';
//  require 'phpmailer/src/SMTP.php';



// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    

    // Set up PHPMailer
    $mail = new PHPMailer(true);


    // Server settings for Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'muhammadanees9124@gmail.com'; // Your Gmail email address
    $mail->Password = 'dior ntxe ybcn uwrb'; // Your Gmail password or App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587; //587

    // Sender info
    $mail->setFrom($email, $name);

    // Webiste email address
    $adminEmail = 'aneehussain5@gmail.com';

    // Recipient
    $mail->addAddress($adminEmail);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Contact Form Submission';
    $mail->Body = "Name: $name<br>Email: $email<br>Message: $message";

    // Send email
    $mail->send();

   
    echo "  <script> 
        alert('Message has been sent successfully!');
        window.location.href='contact.php'
        </script> ";
}
