<?php

$result="";
if(isset($_POST['send'])){
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host= 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure='tls';

    $mail->Username= 'info@talithaindustries.com';
    //$mail->Password= "RoboticMachines001";

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('info@talithaindustries.com');
    $mail->addReplyTo($_POST['email'].$_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='Contact Form Submission:' .$_POST['subject'];
    $mail->Body='<h1 align=center>Name :'.$_POST['name']. '<br>Email: '.$_POST['email']. '<br>Message: '.$_POST['msg']. '</h1>';

    if(!$mail->send()){
        $result="Something went wrong. Please try again";
    }
    else{
        $result="Thanks ".$_POST['name']. " for contacting us. We'll get back to you soon";
    }
    

}

?>


	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/logo.jpg">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Talitha Industries Ltd</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">	
			<link rel="stylesheet" href="css/hexagons.min.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
		<body class="contact">	
			  <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
				  				<ul>
								    <li><a href="https://web.facebook.com/Talitha-Industries-Limited-118140952423309/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/TalithaIndustr1"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/talithaindustries/"><i class="fa fa-instagram"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UCTZ7hL-hLC-hnTiBcEGuOUw"><i class="fa fa-youtube"></i></a></li>
				  				</ul>
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
							  <a href="tel:+234 802 3426 759">+234 802 3426 759</a>
							  <a href="tel:+234 816 9291 224">+234 816 9291 224</a>
				  			  <a href="mailto:info@talithaindustries.com">info@talithaindustries.com</a>
				  			</div>
				  		</div>			  					
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
					  <a href="index.php"><img src="img/logo1.png" alt="" title="" width="83px" height="90px" /><strong><b>Talitha Industries Ltd</b></strong></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="index.php">Home</a></li>
				          <li><a href="about.php">About Us</a></li>
						  <li><a href="machines.php">Our Machines</a></li>		
				          <li><a href="services.php">Services</a></li>
				          <li><a href="projects.php">Projects</a></li>						          
				          <li class="contact"><a href="contact.php">Contact Us</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->  

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contact Us				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span> Contact Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->		
			
			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">	
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
							
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								
								<div class="contact-details">
									<h5>Lagos, Nigeria</h5>
									<p>Mile 13, Ikorodu Road, By BRT Bus Stop, Owode, Onirin Lagos.</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>+234 802 3426 759</h5>
									<h5>+234 816 9291 224</h5>
									<p>Always Available</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>info@talithaindustries.com</h5>
									<p>Send us your query anytime!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="form-area " id="myForm" action="" method="post" class="contact-form text-right">
								<div class="row">	
									<div class="col-lg-6 form-group">
									
										<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
										<div class="mt-20 alert-msg" style="text-align: left;"></div>
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="msg" id="msg" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
										<button type="send" class="genric-btn primary circle mt-30"  name="send" id="send"  style="float: right">Send Message</button>								
									</div>


								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

		<!-- start footer Area -->		
		<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
								We build and sell Industrial, Agricultural, Foods & Liquid Machineries & we fabricate different kinds of Industrial Equipment..
								</p>
								<p class="footer-text">
									
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by <a href="https://andybuck21.github.io/buckessien/" target="_blank">Buck &#128515;</a>

								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay updated with our latest fabrications</p>
								<div class="" id="mc_embed_signup">
									<form action="subsribe.php" method="post" class="form-inline">
										<input class="form-control" name="email" placeholder="Enter Email" type="email" required/>
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	  

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="https://web.facebook.com/Talitha-Industries-Limited-118140952423309/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/TalithaIndustr1"><i class="fa fa-twitter"></i></a>
									<a href="https://www.instagram.com/talithaindustries/"><i class="fa fa-instagram"></i></a>
									<a href="https://www.youtube.com/channel/UCTZ7hL-hLC-hnTiBcEGuOUw"><i class="fa fa-youtube"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>	
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/hexagons.min.js"></script>							
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>

	
