<?php

session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--====== Title ======-->
	<title> About - YouthCare </title>

	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="assets/img/Only logo.png" type="img/png" />
	<!--====== Animate Css ======-->
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<!--====== Fontawesome css ======-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	<!--====== Flaticon css ======-->
	<link rel="stylesheet" href="assets/css/flaticon.css" />
	<!--====== Slick Css ======-->
	<link rel="stylesheet" href="assets/css/slick.min.css" />
	<!--====== Lity Css ======-->
	<link rel="stylesheet" href="assets/css/lity.min.css" />
	<!--====== Main css ======-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--====== Responsive css ======-->
	<link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
	<!--====== Preloader ======-->
	<div id="preloader">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
			</div>
		</div>
	</div>

	<!--====== Header Start ======-->
	<header class="site-header sticky-header">
		<div class="header-topbar d-none d-sm-block">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-auto">
						<ul class="contact-info">
							<li><a href="#"><i class="far fa-envelope"></i> youthcare2022@gmail.com</a></li>
							<li><a href="#"><i class="far fa-map-marker-alt"></i> Kaliurang KM 14.5, Yogyakarta,
									Indonesia</a></li>
						</ul>
					</div>
					<div class="col-auto d-none d-md-block">
						<ul class="social-icons">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar-wrapper">
			<div class="container">
				<div class="navbar-inner">
					<div class="site-logo">
						<a href="index.php"><img src="assets/img/Logo Youthcare (1).png" alt="Logo"></a>
					</div>
					<div class="nav-menu">
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="project-details.php">Health Service</a>
								<ul class="submenu">
									<li><a href="podcast.php">Podcast</a></li>
									<li><a href="shop.php">Shop</a></li>
									<li><a href="donation.php">Donation</a></li>
									<li><a href="project-details.php">Service Details</a></li>
								</ul>
							</li>
							<li>
								<a href="news-standard.php">Article</a>
							</li>
							<li>
								<a href="#">Pages</a>
								<ul class="submenu">
									<li><a href="about.php">About</a></li>
									<li><a href="company-overview.php">Company Overview</a></li>
									<li><a href="team-member.php">Team Member</a></li>
									<li><a href="faq.php">FAQ</a></li>
									<li><a href="testimonial.php">Testimonials</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					<div class="navbar-extra d-flex align-items-center" id="logout">
						<p class="d-none d-sm-inline-block">
							<?php
                            echo "Welcome, " . ucfirst($_SESSION['user_name']) . "!";
                            ?>
						</p>
					</div>
					<div class="navbar-extra d-flex align-items-center" id="logout">
						<a href="logout.php" class="main-btn nav-btn d-none d-sm-inline-block">
							Logout
						</a>
						<a href="login.php">
							<span></span>
						</a>
					</div>
					<div class="navbar-extra d-flex align-items-center">
						<a href="#" class="nav-toggler">
							<span></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="mobile-menu-panel">
			<div class="panel-logo">
				<a href="index.php"><img src="assets/img/Logo Youthcare (1).png" alt="Logo"></a>
			</div>
			<ul class="panel-menu">
				<li class="current">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="project-details.php">Health Services</a>
					<ul class="submenu">
						<li><a href="podcast.php">Podcast</a></li>
						<li><a href="shop.php">Shop</a></li>
						<li><a href="donation.php">Donation</a></li>
						<li><a href="project-details.php">Service Details</a></li>
					</ul>
				</li>
				<li>
					<a href="news-standard.php">Article</a>
				</li>
				<li>
					<a href="#">Pages</a>
					<ul class="submenu">
						<li><a href="about.php">About</a></li>
						<li><a href="company-overview.php">Company Overview</a></li>
						<li><a href="team-member.php">Team Member</a></li>
						<li><a href="faq.php">FAQ</a></li>
					</ul>
				</li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<div class="panel-extra">
				<div class="navbar-extra d-flex align-items-center" id="logout">
					<a href="logout.php" class="main-btn btn-white">
						Logout <i class="far fa-arrow-right"></i>
					</a>
				</div>
				<a href="#" class="panel-close">
					<i class="fal fa-times"></i>
				</a>
			</div>
	</header>
	<!--====== Header End ======-->

	<!--====== Page Title Start ======-->
	<section class="page-title-area">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-8">
					<h1 class="page-title">About Us</h1>
				</div>
				<div class="col-auto">
					<ul class="page-breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>About Us</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--====== Page Title End ======-->

	<!--====== About Section Start ======-->
	<section class="about-section-three section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-5 col-lg-7 col-md-9 col-sm-10">
					<div class="about-text mb-lg-50">
						<div class="common-heading mb-30">
							<span class="tagline">
								<i class="fas fa-plus"></i> About us
								<!-- <span class="heading-shadow-text">About Us</span> -->
							</span>
							<h2 class="title">Assisting Your Health With Our Services </h2>
						</div>
						<p>
							Sedut perspiciatis unde omnis iste natus voluptatem accusan tium dolore dantiumy totam rem
							apeam, eaque ipsa quaventore veritatis quasi architecto beatae.
						</p>
						<ul class="check-list mt-30">
							<li class="wow fadeInUp" data-wow-delay="0s">
								<h5 class="title">Podcast</h5>
								<p>Quis autem vel eum iure reprehenderit quin</p>
							</li>
							<li class="wow fadeInUp" data-wow-delay="0.1s">
								<h5 class="title">Shop</h5>
								<p>Voluptate esse quam nihil molestiae consequatur</p>
							</li>
							<li class="wow fadeInUp" data-wow-delay="0.2s">
								<h5 class="title">Donation</h5>
								<p>Accusan tium dolore dantiumy totam apeam</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-7 col-lg-8 col-md-10">
					<div class="about-gallery wow fadeInRight">
						<div class="img-one">
							<img src="assets/img/hero/hero-two-img (4).png" alt="Image">
						</div>
						<!-- <div class="img-two wow fadeInUp">
							<img src="assets/img/about/about-one.png" alt="Image">
						</div> -->
						<div class="pattern">
							<img src="assets/img/about/about-gallery-pattern.png" alt="Pattern">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== About Section End ======-->

	<!--====== Team section Start ======-->
	<section class="team-slider-area">
		<div class="container mb-20">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="common-heading mb-40">
						<span class="tagline">
							<i class="fas fa-plus"></i> Exclusive team
						</span>
						<h2 class="title">Meet Professional Team</h2>
					</div>
				</div>
				<div class="col-auto">
					<a href="contact.php" class="main-btn mb-40">Join Our Team <i class="far fa-arrow-right"></i></a>
				</div>
			</div>

		</div>
		<div class="container-fluid fluid-extra-padding">
			<div class="row team-members team-slider">
				<div class="col">
					<div class="member-box">
						<div class="member-photo">
							<img src="assets/img/team/nadia.jpg" alt="Member">
						</div>
						<div class="member-info">
							<h5 class="name"><a href="company-overview.php">Nadia Reva Salsabila</a></h5>
							<span class="title">Manager</span>
							<ul class="social-links">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="member-box">
						<div class="member-photo">
							<img src="assets/img/team/krisno.jpg" alt="Member">
						</div>
						<div class="member-info">
							<h5 class="name"><a href="company-overview.php">Chrisna Maulana F.</a></h5>
							<span class="title">Digital Marketer and Analyst</span>
							<ul class="social-links">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="member-box">
						<div class="member-photo">
							<img src="assets/img/team/jihan.jpg" alt="Member">
						</div>
						<div class="member-info">
							<h5 class="name"><a href="company-overview.php">Jihan Syahira A. P.</a></h5>
							<span class="title">Web Developer</span>
							<ul class="social-links">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="member-box">
						<div class="member-photo">
							<img src="assets/img/team/ibnu.jpg" alt="Member">
						</div>
						<div class="member-info">
							<h5 class="name"><a href="company-overview.php">M. Ibnu Wardhani</a></h5>
							<span class="title">Content Writer</span>
							<ul class="social-links">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
	</section>
	<!--====== Team section End ======-->

	<!--====== Partners Section With CTA Start ======-->
	<section class="partners-section">
		<div class="container">
			<div class="partners-logos partners-section-padding section-border-top">
				<div class="row partners-logos-two">
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="logo mb-30">
							<a href="#"><img src="assets/img/partners/01.png" alt="Image"></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="logo mb-30">
							<a href="#"><img src="assets/img/partners/02.png" alt="Image"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Partners Section With CTA End ======-->

	<!--====== Footer Start ======-->
	<footer class="site-footer with-footer-cta">
		<div class="footer-cta">
			<div class="container">
				<div class="row justify-content-lg-between justify-content-center align-items-center">
					<div class="col-lg-7 col-md-8 col-sm-10">
						<span class="cta-tagline">25 Years Of Experience In Donating</span>
						<h3 class="cta-title">Raise Hand to Help Others</h3>
					</div>
					<div class="col-lg-auto col-md-6">
						<a href="contact.php" class="main-btn bordered-btn bordered-white mt-md-30">
							Donate Now <i class="far fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-content-area">
			<div class="container">
				<div class="footer-widgets">
					<div class="row justify-content-between">
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="widget about-widget">
								<div class="footer-logo">
									<!-- <h3 style="color: aliceblue;">YouthCare</h3> -->
									<img src="assets/img/Logo Youthcare.png" alt="Logo">
								</div>
								<p>
									Assisting your health with our services
								</p>
								<div class="newsletter-form">
									<h5 class="form-title">Join Newsletters</h5>
									<form action="#">
										<input type="text" placeholder="Email Address">
										<button type="submit"><i class="far fa-arrow-right"></i></button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-5 col-sm-6">
							<div class="widget nav-widget">
								<h4 class="widget-title">Our Services</h4>
								<ul>
									<li><a href="podcast.php">Podcast</a></li>
									<li><a href="shop.php">Shop</a></li>
									<li><a href="donation.php">Donation</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="widget nav-widget">
								<h4 class="widget-title">Support</h4>
								<ul>
									<li><a href="about.php">Privacy Policy</a></li>
									<li><a href="contact.php">Conditions</a></li>
									<li><a href="company-overview.php">Company</a></li>
									<li><a href="faq.php">Faq & Terms</a></li>
									<li><a href="contact.php">Contact Us</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-auto col-md-5 col-sm-8">
							<div class="widget contact-widget">
								<h4 class="widget-title">Contact Us</h4>
								<ul class="info-list">
									<li>
										<span class="icon"><i class="far fa-phone"></i></span>
										<span class="info">
											<span class="info-title">Phone Number</span>
											<a href="#">0272-32980</a>
										</span>
									</li>
									<li>
										<span class="icon"><i class="far fa-envelope-open"></i></span>
										<span class="info">
											<span class="info-title">Email Address</span>
											<a href="#">youthcare2022@gmail.com</a>
										</span>
									</li>
									<li>
										<span class="icon"><i class="far fa-map-marker-alt"></i></span>
										<span class="info">
											<span class="info-title">Locations</span>
											<a href="#">Kaliurang KM. 14,5, Yogyakarta, Indonesia</a>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright-area">
					<div class="row flex-md-row-reverse">
						<div class="col-md-6">
							<ul class="social-icons">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<p class="copyright-text">© 2022 <a href="#">YouthCare</a>. All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--====== Footer End ======-->


	<!--====== jquery js ======-->
	<script src="assets/js/jquery.min.js"></script>
	<!--====== Bootstrap js ======-->
	<script src="assets/js/bootstrap.min.js"></script>
	<!--====== Inview js ======-->
	<script src="assets/js/jquery.inview.min.js"></script>
	<!--====== Slick js ======-->
	<script src="assets/js/slick.min.js"></script>
	<!--====== Lity js ======-->
	<script src="assets/js/lity.min.js"></script>
	<!--====== Wow js ======-->
	<script src="assets/js/wow.min.js"></script>
	<!--====== Main js ======-->
	<script src="assets/js/main.js"></script>

</body>

</html>