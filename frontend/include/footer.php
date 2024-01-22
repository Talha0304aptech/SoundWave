 <style>
 	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

 	/* body {
 		line-height: 1.5;
 		font-family: 'Poppins', sans-serif;
 	} */

 	.footer {
 		background-color: #191919;
 		padding: 60px 0;
 	}

 	.container {
 		max-width: 1170px;
 		margin: auto;
 	}

 	.row {
 		display: flex;
 		flex-wrap: wrap;
 	}

 	ul {
 		list-style: none;
 	}

 	.footer-col {
 		width: 25%;
 		height: 240px;
 		padding: 0 15px;
 	}

 	.footer-col h4 {
 		font-size: 18px;
 		color: #FFF;
 		text-transform: capitalize;
 		margin-bottom: 35px;
 		font-weight: 500;
 		position: relative;
 	}

 	.footer-col h4::before {
 		content: "";
 		position: absolute;
 		left: 0;
 		bottom: -10px;
 		background-color: #d63302;
 		width: 50px;
 		height: 2px;
 	}

 	.footer-col ul li:not(:last-child) {
 		margin-bottom: 10px;
 	}

 	.footer-col ul li a {
 		color: #DDD;
 		display: block;
 		font-size: 1rem;
 		font-weight: 300;
 		text-transform: capitalize;
 		text-decoration: none;
 		transition: all 0.3s ease;
 	}
	
 	.footer-col ul li a:hover {
 		color: #fd5927;
 		padding-left: 7px;
 	}

 	.footer-col .social-links a {
 		color: #FFF;
 		background-color: rgba(255, 255, 255, 0.2);
 		/* background-color:#fd5927; */
 		display: inline-block;
 		height: 40px;
 		width: 40px;
 		border-radius: 50%;
 		text-align: center;
 		margin: 0 10px 10px 0;
 		line-height: 40px;
 		transition: all 0.5s ease;
 	}

 	.footer-col .social-links a:hover {
 		color: #151515;
 		/* background-color: #FFF; */
 		background-color: #fd5927;
 	}

 	@media(max-width: 767px) {
 		.footer-col {
 			width: 50%;
 			margin-bottom: 30px;
 		}
 	}

 	@media(max-width: 574px) {
 		.footer-col {
 			width: 100%;
 		}
 	}
 </style>
 
 <footer class="footer">

 	<!-- <div class="form-newsletter">
 		<form action="#" method="post">
 			<div class="form-fild-newsletter-single-item input-color--golden">
 				<input type="email" placeholder="Your email address..." required>
 				<button type="submit">SUBSCRIBE!</button>
 			</div>
 		</form>
 	</div>  -->
 	<div class="container row">
 		<div class="footer-col">
 			<h4>INFORMATION</h4>
 			<ul>
 				
 				
				<p>Our vision extends beyond being a platform; we aspire to be a musical companion in your life's soundtrack. Whether you're seeking inspiration, relaxation, or the thrill of a new beat, [Your Music Platform/Project Name] is here to accompany you on your sonic journey.</p>
 			</ul>
 		</div>
 		<div class="footer-col">
 			<h4>Useful Links</h4>
 			<ul>
				
			 <!-- <li><a href="../frontend/account.php">Register</a></li> -->

	
			<?php if(!$loggedin){
                      echo ' <li><a href="../frontend/account.php">Register</a></li>'  ;
                     }
                     if($loggedin){
                        echo '<li><a href="logout.php"> <i class="bi bi-box-arrow-left"></i> Logout</a></li>' ;
                       }
                       
            
            ?>



			 <li><a href="../frontend/about.php">About Us</a></li>				
 				<li><a href="../frontend/contact.php">Contact Us</a></li>				
				 <li><a href="../frontend/searching.php">Searching</a></li>
 				
 			</ul>
 		</div>
 		<div class="footer-col">
 			<h4>Categories</h4>
 			<ul>
 				<li><a href="../frontend/Categories.php">ALBUM</a></li>
 				<li><a href="../frontend/Categories.php">ARTIST</a></li>
 				<li><a href="../frontend/Categories.php">YEAR</a></li>
 				<li><a href="../frontend/Categories.php">GENRE</a></li>
 				<li><a href="../frontend/Categories.php">LANGUAGE</a></li>
 			</ul>
 		</div>

 		<div class="footer-col">
 			<h4>follow us</h4>
 			<div class="social-links">
 				<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
 				<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
 				<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
 				
 			</div>
			
 		</div>

 	</div>

 	
 	<br><br>
 	<div style="margin-top: 40px;">
 		<center><p >&copy;copyright 2023 Sound Wave</p></center>
 	</div>
 </footer>