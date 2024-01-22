<?PHP 
 session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet"
    type="text/css" />
<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Loading main css file -->
<link rel="stylesheet" href="style.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />

  
<style>
    body {
        background: #222D32;
        font-family: 'Roboto', sans-serif;
    }

    .login-box {
        margin-top: 75px;
        height: auto;
        background: #1A2226;
        text-align: center;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }

    .login-key {
        height: 100px;
        font-size: 80px;
        line-height: 100px;
        background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .login-title {
        margin-top: 15px;
        text-align: center;
        font-size: 30px;
        letter-spacing: 2px;
        margin-top: 15px;
        font-weight: bold;
        color: #ECF0F5;
    }

    .login-form {
        margin-top: 25px;
        text-align: left;
    }

    input[type=text] {
        background-color: #1A2226;
        border: none;
        border-bottom: 2px solid #0DB8DE;
        border-top: 0px;
        border-radius: 0px;
        font-weight: bold;
        outline: 0;
        margin-bottom: 20px;
        padding-left: 0px;
        color: #ECF0F5;
    }

    input[type=password] {
        background-color: #1A2226;
        border: none;
        border-bottom: 2px solid #0DB8DE;
        border-top: 0px;
        border-radius: 0px;
        font-weight: bold;
        outline: 0;
        padding-left: 0px;
        margin-bottom: 20px;
        color: #ECF0F5;
    }

    .form-group {
        margin-bottom: 40px;
        outline: 0px;
    }

    .form-control:focus {
        border-color: inherit;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-bottom: 2px solid #0DB8DE;
        outline: 0;
        background-color: #1A2226;
        color: #ECF0F5;
    }

    input:focus {
        outline: none;
        box-shadow: 0 0 0;
    }

    label {
        margin-bottom: 0px;
    }

    .form-control-label {
        font-size: 10px;
        color: #6C6C6C;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .btn-outline-primary {
        border-color: #0DB8DE;
        color: #0DB8DE;
        border-radius: 0px;
        font-weight: bold;
        letter-spacing: 1px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }

    .btn-outline-primary:hover {
        background-color: #0DB8DE;
        right: 0px;
    }

    .login-btm {
        float: left;
    }

    .login-button {
        padding-right: 0px;
        text-align: right;
        margin-bottom: 25px;
    }

    .login-text {
        text-align: left;
        padding-left: 0px;
        color: #A2A4A4;
    }

    .loginbttm {
        padding: 0px;
    }
</style>

<body class="header-collapse">

    <div id="site-content">
    <header class="site-header">
            <div class="container">
                <a href="index.php" id="branding">
                <img src="dummy/nav_logo.png" alt="Site Title"  /></a>
                <nav class="main-navigation">
                    <button type="button" class="toggle-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="menu">
                        <li class="menu-item ">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="menu-item"><a href="Categories.php">Categories</a></li>
                        <li class="menu-item"><a href="about.php">About</a></li>
                        
                        <?php 
                    
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
                            $loggedin= true;
                          }
                          else{
                            $loggedin = false;
                          }
                        if(!$loggedin){
                      echo '<li class="menu-item current-menu-item"><a href="Account.php">Register</a></li>'  ;
                     }
                     if($loggedin){
                        echo '<li class="menu-item current-menu-item"><a href="logout.php"> <i class="bi bi-box-arrow-left"></i> Logout</a></li>' ;
                       }
                       
            
            ?>
            <li class="menu-item"><a href="searching.php"> <i class="bi bi-search"></i></a></li>
                    </ul>
                    <!-- .menu -->
                </nav>
                <!-- .main-navigation -->
                <div class="mobile-menu"></div>
            </div>
        </header>
   
      
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2"></div>
                <div class="col-lg-6 col-md-8 login-box">
                    <div class="col-lg-12 login-key">
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </div>
                    <div class="col-lg-12 login-title">
                        REGISTER HERE
                    </div>

                    <div class="col-lg-12 login-form">
                        <div class="col-lg-12 login-form">
                        <form method="POST" action="customer_signup.php">
                                <div class="form-group">
                                    <label class="form-control-label">FULL NAME</label>
                                    <input type="text" class="form-control" name="name" required id="text_area">
                                    <p style="color: red;" id="texe_error"></p>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">EMAIL</label>
                                    <input type="text" class="form-control" name="email" required id="emal">
                                    <p style="color: red;" id="emaal"></p>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">PASSWORD</label>
                                    <input type="password" class="form-control"  name="password" required id="psw">
                                    <p style="color: red;" id="pswe"></p>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">PASSWORD</label>
                                    <input type="password" class="form-control"  name="cpassword" required id="cpsw">
                                    <p style="color: red;" id="cpswe"></p>
                                </div>
                                <div class="col-lg-12 loginbttm">
                                    <div class="col-lg-6 login-btm login-text">
                                        <!-- Error Message -->
                                    </div>
                                    <div class="col-lg-6 login-btm login-button">
                                        <button type="submit" class="btn btn-outline-primary" onclick="validation()">SIGN UP</button>
                                    </div>
                                </div>
                            </form>
                            <center>
                                <h5 style="color: white;">Already have an account?<a href="login.php"
                                        id="login_hover">Login</a></h5>
                            </center>
                            <br><br>
                            <style>
                                 #login_hover{

                                    color: #0DB8DE;
                                    text-decoration: none;
                                }
                                #login_hover:hover {
                                    color: #1bb0d1a6;
                                  
                                }
                            </style>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2"></div>
                </div>
            </div>
           
               <script>
 function validation() {
var taxt = document.getElementById('text_area').value;
            var taxtrule = /^[a-zA-Z ]+$/;


            if (taxt.length > 0) {
                if (taxtrule.test(taxt) == true) {

                    document.getElementById('texe_error').innerHTML = "";
                    // alert("Welcome " + UserName);
                }

                else {
                    document.getElementById('texe_error').innerHTML = "Only  Alphabets Are Allowed";
                    document.getElementById('texe_error').style.color = "red"
                }
            }
            else {
                document.getElementById('texe_error').innerHTML = "First Name is required";
                document.getElementById('texe_error').style.color = "red"
            }


            var eml = document.getElementById('emal').value;
            if (eml.length > 0) {
                document.getElementById('emaal').innerHTML = "";
            }
            else {
                document.getElementById('emaal').innerHTML = "Email is required and should be unique Email";
                document.getElementById('emaal').style.color = "red"
            }


            var psw = document.getElementById('psw').value;
            if (psw.length > 0) {
                document.getElementById('pswe').innerHTML = "";
            }
            else {
                document.getElementById('pswe').innerHTML = "Password required";
                document.getElementById('pswe').style.color = "red"
            }

            var cpsw = document.getElementById('cpsw').value;
            if (psw.length > 0) {
                document.getElementById('cpswe').innerHTML = "";
            }
            else {
                document.getElementById('cpswe').innerHTML = "Confirm password required";
                document.getElementById('cpswe').style.color = "red"
            }

        }
               </script>

          
                
            <script src="js/jquery-1.11.1.min.js"></script>
            <script src="js/plugins.js"></script>
            <script src="js/app.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>
</body>

</html>