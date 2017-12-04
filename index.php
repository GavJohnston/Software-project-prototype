<?php
session_start();

if(isset($_SESSION['usr_id'])=="") {
	header("Location: /login.php");
}
?>
<!DOCTYPE html>


<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>	
		
<link rel="stylesheet" href="css/lightbox.css">
		
<!-- //custom-theme files-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" /><!-- //animation effects-css-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme files-->

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->

<!-- googlefonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //googlefonts -->

</head>
<body>

<!-- banner -->
<div id="home" class="w3ls-banner"> 
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">
						<div class="banner-dott">
							<div class="container">
								<div data-aos="fade-left" class="agileits-banner-info">
									<h3>Welcome to our</h3>
									<h3>smrt security</h3>
									<p></p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="banner-dott">
							<div class="container">
								<div data-aos="fade-left" class="agileits-banner-info">
									<h3>Welcome to our</h3>
									<h3>smrt security</h3>
									<p></p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
						<div class="banner-dott">
							<div class="container">
								<div data-aos="fade-left" class="agileits-banner-info">
									<h3>Welcome to our</h3>
									<h3>smrt security</h3>
									<p></p>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
										</div>
								</div>
								
							</div>
						</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<div class="rotate">
					<a href="#about" class="scroll">
						<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
					</a>
				</div>
			</div>
 
</div>	
<!-- //banner --> 
<!-- header -->
<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Smr tSecurity</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.html"><span>SMRT</span>SECURITY</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll scroll" href="#page-top"></a>	</li>
							<li><a class="page-scroll scroll" href="#home">Home</a></li>
							<li><a class="page-scroll scroll" href="#about">About</a></li>
							<li><a href= >Stream</a></li>
							<li><a class="page-scroll scroll" href="#users">Photo database</a></li>
<li><a href="/logout.php" class="btn btn-info" role="button">Log Out</a></li>
							<li><a class="page-scroll scroll" href="#contact">Contact</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
</div>	
<!-- //header -->

<!-- about -->
<div class="about" id="about">
	<div class="container">
		<div class="heading">
			<h2 data-aos="zoom-in">About Us</h2>
		</div>
		<h4>About our Company</h4>
		<p></br></p>
		<div class="about-grids">
			<div data-aos="zoom-in" class="col-md-4 aboutgrid1 ">
				<h3>Care for your home</h3>
				<p></br></br></br></p>
			</div>
			<div  data-aos="flip-right" class="col-md-4 aboutgrid2">
				<img src="images/aboutus.jpg" alt="" />
			</div>
			<div data-aos="zoom-in" class="col-md-4 aboutgrid3">
				<h3>Motion detection & user recognition</h3>
				<p></br></br></p>
			</div>
			<div class="clearfix"></div>
			<div  data-aos="flip-right" class="col-md-4 aboutgrid4">
				<img src="images/aboutus.jpg" alt="" />
			</div>
			<div data-aos="slide-up" class="col-md-4 aboutgrid5">
				<h3>Ability to stream</h3>
				<p></br></br></br></p>
			</div>
			<div  data-aos="flip-right" class="col-md-4 aboutgrid6">
				<img src="images/aboutus.jpg" alt="" />
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about -->

<!-- services -->




<!-- gallery -->
	<div class="gallery" id="users">
		<div class="heading">
			<h3 data-aos="zoom-in" >Approved users</h3>
		</div>
			<div class="gallery-grids">
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/team1.jpg" data-lightbox="example-set" data-title="">
								<img src="images/team1.jpg" alt="" />
								<figcaption>
									<h3>User<span>one</span></h3>
									<p> </p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/team2.jpg" data-lightbox="example-set" data-title="">
								<img src="images/team2.jpg" alt="" />
								<figcaption>
									<h3>User <span>Two</span></h3>
									<p></p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/team3.jpg" data-lightbox="example-set" data-title="">
								<img src="images/team3.jpg" alt="" />
								<figcaption>
									<h3>User <span>Three</span></h3>
									<p></p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>	
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/team4.jpg" data-lightbox="example-set" data-title="">
								<img src="images/team4.jpg" alt="" />
								<figcaption>
									<h3>User <span>Four</span></h3>
									<p></p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/team1.jpg" data-lightbox="example-set" data-title="">
								<img src="images/team1.jpg" alt="" />
								<figcaption>
									<h3>User <span>Five</span></h3>
										<p></p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/team4.jpg" data-lightbox="example-set" data-title="">
								<img src="images/team2.jpg" alt="" />
								<figcaption>
									<h3>User <span>six</span></h3>
									<p></p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/team2.jpg" data-lightbox="example-set" data-title="">
								<img src="images/+.png" alt="" />
								<figcaption>
									<h3>Add <span>user</span></h3>
									<p></p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="images/team3.jpg" data-lightbox="example-set" data-title="">
								<img src="images/delete.jpg" alt="" height="702" />
								<figcaption>
									<h3>Delete <span>User</span></h3>
									<p></p>
								</figcaption>		
							</a>
						</figure>
					</div>
				</div>

				<div class="clearfix"> </div>
			</div>
	</div>
<!-- //gallery -->


							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							<!--banner Slider starts Here-->
					
			



<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="heading">
				<h3 data-aos="zoom-in" >Get In Touch</h3>
			</div>
		</div>
			<div class="w3layouts-grids">
				<div data-aos="flip-left" class="col-md-6 contact-left">
					<h3 data-aos="zoom-in" >Contact information</h3>
					<div class="contact-info">
						<div class="contact-info-left">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="contact-info-right">
							<h5>Address</h5>
							<p>580 airside buisness park<br>
								<span>Swords</span>
								dublin.
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-info">
						<div class="contact-info-left">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="contact-info-right">
							<h5>Mobile</h5>
							<ul>
								<li>+0(353) 87 235 1111</li>
								<li>+0(353) 87 235 2223</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-info">
						<div class="contact-info-left">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="contact-info-right">
							<h5>E-Mail</h5>
							<ul>
								<li><a href="mailto:example@mail.com">smrtsecurity@example.com</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-6 contact-form">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="email" class="email" name="Email" placeholder="Email" required="">
						<div class="clearfix"> </div>
						<input type="text" class="phone" name="phone" placeholder="Phone Number" required="">
						<textarea placeholder="Message" name="Message" required=""></textarea>
						<input type="submit" value="SUBMIT">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
<!-- //contact -->

<!-- map -->
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99285.8587671662!2d-94.77019988161892!3d38.95406778222139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0ec985fa46073%3A0x178f7880c66a7a55!2sExtended+Stay+America+Hotel+Kansas+City+-+Lenexa+-+87th+St.!5e0!3m2!1sen!2sin!4v1494659289602"></iframe>
</div>
<!-- //map -->


	

<!-- //copyright -->

<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Smrt Security 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="" alt=" " class="img-responsive" />
						<p>Smrt security is the newest in security system technology. 
						Developed in 2017 this gives the user full control of that
						system and adds multiple features such as facial recognition, 
						Real time streaming and notififcation based alerts. 
						</br>
							</p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 


<script src="js/lightbox-plus-jquery.min.js"> </script><!-- for gallery js -->
 
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
<!-- //js -->

 <!-- /Responsive slides js -->
						<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

 <!-- Responsive slides js -->
 
<!-- animation effects-js files-->
	<script src="js/aos.js"></script><!-- //animation effects-js-->
	<script src="js/aos1.js"></script><!-- //animation effects-js-->
<!-- animation effects-js files-->

<!-- //here starts scrolling icon -->
<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling script -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

</body>
</html>