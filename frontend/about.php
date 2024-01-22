<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0,maximum-scale=1"
    />

    <title>About Us</title>
    <!-- Loading third party fonts -->
    <link
      href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900"
      rel="stylesheet"
      type="text/css"
    />
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <div id="site-content">
    <?php
 session_start();?>
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
                        <li class="menu-item current-menu-item"><a href="about.php">About</a></li>
                        
                        <?php 
                    
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
                            $loggedin= true;
                          }
                          else{
                            $loggedin = false;
                          }
                        if(!$loggedin){
                      echo '<li class="menu-item "><a href="Account.php">Register</a></li>'  ;
                     }
                     if($loggedin){
                        echo '<li class="menu-item "><a href="logout.php"> <i class="bi bi-box-arrow-left"></i> Logout</a></li>' ;
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
      <!-- .site-header -->
 <!-- Skills Section Begin -->
 <section class="skills spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="skills__content">
                        <div class="section-title">
                            <h2>DJ Alexandra Rud</h2>
                          
                        </div>
                        <p>DJ Rainflow knows how to move your mind, body and soul by delivering tracks that stand out
                            from the norm.</p>
                        <div class="skill__bar__item">
                            <p>Perform</p>
                            <div id="bar1" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="skill__bar__item">
                            <p>Use Midi</p>
                            <div id="bar2" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="85"></span>
                            </div>
                        </div>
                        <div class="skill__bar__item">
                            <p>Remix and mash up</p>
                            <div id="bar3" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="98"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="skills__video set-bg" data-setbg="about-img/skill-video.jpg">
                        <a href="https://www.youtube.com/watch?v=S19UcWdOA-I?autoplay=1" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Skills Section End -->

    <!-- About Section Begin -->
    <section class="about about--page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <img src="../frontend/about/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>He heard something that he knew to be music</h2>
                        </div>
                        <p>he heard something extraordinary—an ephemeral melody that wrapped itself around the contours of his thoughts. It was music, not just in the traditional senseIt was a symphony woven from the threads of memories and dreams, a composition that stirred the dormant chords of his soulhe recognized that the music wasn't merely an auditory experience; it was a silent conversation with the universe..</p>
                        <img src="../frontend/img/signature.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->


    <!-- About Services Section Begin -->
    <section class="about-services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <center><h2>WHERE DO I PLAY</h2></center>
                    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about__services__item">
                        <div class="about__services__item__pic set-bg" data-setbg="../frontend/about/as-1.jpg">
                            <div class="icon">
                                <img src="../frontend/about/as-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="about__services__item__text">
                            <h4>Wedding</h4>
                            <p>Curious about the beats that kept the dance floor alive Check out the curated playlist from the DJ that made Couple's Names wedding an unforgettable musical journey. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about__services__item">
                        <div class="about__services__item__pic set-bg" data-setbg="../frontend/about/as-2.jpg">
                            <div class="icon">
                                <img src="../frontend/about/as-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="about__services__item__text">
                            <h4>Clubs and bar</h4>
                            <p>The dance floor at Club Name is where the party truly comes alive. Our DJs curate playlists that blend genres, keeping the energy high and the dance floor packed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about__services__item">
                        <div class="about__services__item__pic set-bg" data-setbg="../frontend/about/as-3.jpg">
                            <div class="icon">
                                <img src="../frontend/about/as-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="about__services__item__text">
                            <h4>Corporate events</h4>
                            <p>Welcome to a transformative experience at Company Name Corporate Event This exclusive gathering is designed to inspire and celebrate our shared successes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Services Section End -->
      
      <!-- .main-content -->

      <?php include('include/footer.php');?>
      <!-- .site-footer -->
    </div>
    <!-- #site-content -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
    <style>
        /*---------------------
  About
-----------------------*/

        .about {
            padding-top: 0;
            
           
            &.about--page {
                padding-top: 100px;
                padding-bottom: 100px;

                .section-title {
                    margin-bottom: 30px;

                    h2 {
                        line-height: 60px;
                    }
                }

                .about__text {
                    padding-top: 10px;

                    p {
                        color: $heading-color;
                    }
                }
            }
        }

        .about__text {
            padding-top: 120px;

            p {
                margin-bottom: 40px;
            }
        }

        /*---------------------
  Skills
-----------------------*/
        .skills {
            padding-bottom: 0;
            padding-top: 80px;
        }

        .skills__content {
            background: $primary-color;
            height: 400px;
            padding: 90px 50px 40px;

            .section-title {

                h2 {
                    color: $white-color;
                }


            }

            p {
                color: $white-color;
                margin-bottom: 35px;
            }
        }

        .skill__bar__item {
            margin-bottom: 20px;

            p {
                font-size: 15px;
                font-weight: 500;
                color: $white-color;
                margin-bottom: 10px;
            }

            .barfiller {
                width: 90%;
                height: 5px;
                background: red;
                border: none;
                margin-bottom: 0;
                box-shadow: 20px;

                .tip {
                    margin-top: -32px;
                    padding: 0;
                    font-size: 15px;
                    color: #fff;
                    background: white;

                    &:after {
                        display: none;
                    }
                }
            }
        }

        .skills__video {
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;


            .play-btn {
                font-size: 26px;
                color: $primary-color;
                height: 90px;
                width: 90px;
                border-radius: 50px;
                background: red;
                display: inline-block;
                line-height: 90px;
                text-align: center;
                position: relative;
                z-index: 1;


                i {
                    position: relative;
                    top: 3px;
                    left: 3px;
                }

                &:after {
                    position: absolute;
                    left: 15px;
                    top: 15px;
                    height: 60px;
                    width: 60px;
                    background: $white-color;
                    border-radius: 50px;
                    content: "";
                    z-index: 1;
                }
            }
        }

        /*---------------------
  About Pic
-----------------------*/
        .about-pic {
            overflow: hidden;

            .container-fluid {
                padding-right: 10px;
            }

            img {
                max-width: 110%;
                margin-bottom: 20px;
                padding-right: 20px;

            }
        }

        /*---------------------
  About Services
-----------------------*/
        .about-services {
            padding-bottom: 50px;

            .section-title {
                margin-bottom: 60px;
            }
        }

        .about__services__item {
            @include transition(all, .3s);

            &:hover {
                box-shadow: 0px 3px 30px orangered;
            }
        }


        .about__services__item__text {
            text-align: center;
            padding: 40px 50px 20px;

            h4 {
                font-size: 20px;
                color: $heading-color;
                font-weight: 600;
                margin-bottom: 15px;
            }

            p {
                margin-bottom: 0;
            }
        }
    </style>
  </body>
</html>
