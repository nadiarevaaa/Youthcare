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
	<title> YouthCare </title>

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
	<header class="site-header sticky-header transparent-header topbar-transparent">
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

	<!--====== Hero Area Start ======-->
	<!-- <section class="hero-area-one"> </section> -->
	<section class="hero-area-two">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-8 col-sm-11">
					<div class="hero-text">
						<h1 class="title wow fadeInLeft" data-wow-delay="0.2s">
							Assisting Your Health
							With Our Services
						</h1>
						<p class="wow fadeInLeft" data-wow-delay="0.3s">
							Good health is not something we can buy, but it can be an extremely valuable savings account
						</p>
						<ul class="hero-btn">
							<li class="wow fadeInUp" data-wow-delay="0.4s">
								<a href="project-details.php" class="main-btn">Explore Services <i
										class="far fa-arrow-right"></i></a>
							</li>
							<li class="wow fadeInUp" data-wow-delay="0.5s">
								<a href="//www.youtube.com/watch?v=XSGBVzeBUbk" class="video-btn" data-lity><i
										class="fas fa-play"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-8 col-sm-10 mx-auto wow fadeInRight" data-wow-delay="0.2s">
					<div class="hero-img text-lg-right">
						<img src="assets/img/hero/hero-two-img (4).png" alt="Img">
					</div>
				</div>
			</div>
		</div>
		<div class="hero-shapes">
			<div class="hero-line-one">
				<img src="assets/img/hero/hero-dot-blurry.png" alt="Line">
			</div>
			<div class="hero-line-two">
				<img src="assets/img/hero/hero-blurry1.png" alt="Line">
			</div>
			<!-- <div class="dot-one"></div>
			<div class="dot-two"></div> -->
		</div>
	</section>
	<!--====== Hero Area End ======-->

	<!--====== Categories Section Start ======-->
	<section class="popular-categories section-gap">
		<div class="container">
			<div class="categories-header">
				<div class="row align-items-center justify-content-between">
					<div class="col-auto">
						<div class="common-heading mb-30">
							<span class="tagline">
								<i class="fas fa-plus"></i> what we provide
								<!-- <span class="heading-shadow-text">Service</span> -->
							</span>
							<h2 class="title">Our Services</h2>
						</div>
					</div>
					<!-- <div class="col-auto">
						<a href="project-1.php" class="main-btn mb-30">View All Category <i class="far fa-angle-right"></i></a>
					</div> -->
				</div>
			</div>
			<div class="row justify-content-center fancy-icon-boxes">
				<div class="col-xl-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0s">
					<div class="fancy-box-item mt-30">
						<div class="icon">
							<!-- <i class="flaticon-reading-book"></i> -->
							<i class="flaticon-video-camera"></i>
						</div>
						<div class="content">
							<h4 class="title"><a href="podcast.php">Podcast</a></h4>
							<p>Physical and mental health talks</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.1s">
					<div class="fancy-box-item mt-30">
						<div class="icon">
							<i class="flaticon-stethoscope"></i>
						</div>
						<div class="content">
							<h4 class="title"><a href="shop.php">Shop</a></h4>
							<p>Medication and consultation page</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.2s">
					<div class="fancy-box-item mt-30">
						<div class="icon">
							<i class="flaticon-tshirt-1"></i>
						</div>
						<div class="content">
							<h4 class="title"><a href="donation.php">Donation</a></h4>
							<p>Give yours to other to make them happy</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Categories Section End ======-->

	<!--====== About Section Start ======-->
	<section class="about-section-one">
		<div class="container">
			<div class="row align-items-center justify-content-lg-start justify-content-center">
				<div class="col-xl-6 col-lg-7 col-md-9">
					<div class="about-img">
						<img src="assets/img/about/about-one.png" alt="Image">
					</div>
				</div>
				<div class="col-xl-4 col-lg-5 col-md-10 offset-xl-1">
					<div class="about-text mt-md-70 mb-md-50">
						<div class="common-heading mb-30">
							<span class="tagline">
								<i class="fas fa-plus"></i> who we are
								<!-- <span class="heading-shadow-text">About Us</span> -->
							</span>
							<h2 class="title">What is YouthCare</h2>
						</div>
						<p>
							YouthCare is a facility to learn about health education, both physically and mentally,
							especially for teenagers.
						</p>
						<div class="author-note wow fadeInUp">
							<ul>
								<li><i class="far fa-check"></i> Interesting audio-based learning </li>
								<li><i class="far fa-check"></i> Supported with shop and donation services </li>
							</ul>
							<div class="author-info">
								<div class="author-img">
									<img src="assets/img/author-thumbs/01.png" alt="Image">
								</div>
								<h5 class="name">Nadia Reva SR</h5>
								<span class="title">Project Manager</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== About Section End ======-->

	<!--====== Project Section Start ======-->
	<section class="project-section project-section-extra-gap secondary-bg">
		<div class="container-fluid fluid-extra-padding">
			<div class="common-heading text-center color-version-white mb-60">
				<span class="tagline">
					<i class="fas fa-plus"></i> Popular Content
					<!-- <span class="heading-shadow-text">Health Podcast</span> -->
				</span>
				<h2 class="title">Explore the Top Podcast</h2>
			</div>
			<div class="row project-slider-one project-items project-style-one no-shadow">
				<div class="col">
					<div class="project-item">
						<div class="thumb" style="background-image: url(assets/img/popular-podcast/01.jpg);"></div>
						<div class="content">
							<div class="cats">
								<a href="#">Mental Health</a>
							</div>
							<div class="author">
								<img src="assets/img/popular-podcast/profile - 01.jpg" alt="Thumb">
								<a href="#">Noah & Zion</a>
							</div>
							<h5 class="title">
								<a href="project-details.php">How Do I Start a Conversation about Mental Health?</a>
							</h5>
							<!-- <div class="project-stats">
								<div class="stats-value">
									<span class="value-title">Raised of <span class="value">Rp.60.000</span></span>
									<span class="stats-percentage">79%</span>
								</div>
								<div class="stats-bar" data-value="79">
									<div class="bar-line"></div>
								</div>
							</div> -->
							<span class="date"><i class="far fa-calendar-alt"></i> 01 March 2022</span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="project-item">
						<div class="thumb" style="background-image: url(assets/img/popular-podcast/02.jpg);"></div>
						<div class="content">
							<div class="cats">
								<a href="#">Physical Health</a>
							</div>
							<div class="author">
								<img src="assets/img/popular-podcast/profile - 02.jpg" alt="Thumb">
								<a href="#">Kelly LeVeque</a>
							</div>
							<h5 class="title">
								<a href="project-details.php">Blood Sugar Balance, Protein, and Demystifying Health</a>
							</h5>
							<!-- <div class="project-stats">
								<div class="stats-value">
									<span class="value-title">Raised of <span class="value">Rp.79,689</span></span>
									<span class="stats-percentage">87%</span>
								</div>
								<div class="stats-bar" data-value="87">
									<div class="bar-line"></div>
								</div>
							</div> -->
							<span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="project-item">
						<div class="thumb" style="background-image: url(assets/img/popular-podcast/03.jpg);"></div>
						<div class="content">
							<div class="cats">
								<a href="#">Physical Health</a>
							</div>
							<div class="author">
								<img src="assets/img/popular-podcast/profile - 03.jpg" alt="Thumb">
								<a href="#">Nicholas Leeper</a>
							</div>
							<h5 class="title">
								<a href="project-details.php">Is There a Link Between Cancer and Heart Disease?</a>
							</h5>
							<!-- <div class="project-stats">
								<div class="stats-value">
									<span class="value-title">Raised of <span class="value">Rp.59,689</span></span>
									<span class="stats-percentage">85%</span>
								</div>
								<div class="stats-bar" data-value="85">
									<div class="bar-line"></div>
								</div>
							</div> -->
							<span class="date"><i class="far fa-calendar-alt"></i> 10 May 2022</span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="project-item">
						<div class="thumb" style="background-image: url(assets/img/popular-podcast/04.jpg);"></div>
						<div class="content">
							<div class="cats">
								<a href="#">Mental Health</a>
							</div>
							<div class="author">
								<img src="assets/img/popular-podcast/profile - 04.jpg" alt="Thumb">
								<a href="#">Jeremy Godwin</a>
							</div>
							<h5 class="title">
								<a href="project-details.php">Let's Talk About Self Acceptance</a>
							</h5>
							<!-- <div class="project-stats">
								<div class="stats-value">
									<span class="value-title">Raised of <span class="value">Rp.59,689</span></span>
									<span class="stats-percentage">83%</span>
								</div>
								<div class="stats-bar" data-value="83">
									<div class="bar-line"></div>
								</div>
							</div> -->
							<span class="date"><i class="far fa-calendar-alt"></i> 06 August 2022</span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="project-item">
						<div class="thumb" style="background-image: url(assets/img/popular-podcast/05.jpg);"></div>
						<div class="content">
							<div class="cats">
								<a href="#">Mental Health</a>
							</div>
							<div class="author">
								<img src="assets/img/popular-podcast/profile - 05.jpg" alt="Thumb">
								<a href="#">James Scott</a>
							</div>
							<h5 class="title">
								<a href="project-details.php">Being Positive, Practical, and Peaceful</a>
							</h5>
							<!-- <div class="project-stats">
								<div class="stats-value">
									<span class="value-title">Raised of <span class="value">Rp.59,689</span></span>
									<span class="stats-percentage">93%</span>
								</div>
								<div class="stats-bar" data-value="93">
									<div class="bar-line"></div>
								</div>
							</div> -->
							<span class="date"><i class="far fa-calendar-alt"></i> 30 July 2021</span>
						</div>
					</div>
				</div>
				<!-- <div class="col">
					<div class="project-item">
						<div class="thumb" style="background-image: url(assets/img/project/project-grid-06.jpg);"></div>
						<div class="content">
							<div class="cats">
								<a href="#">Business</a>
							</div>
							<div class="author">
								<img src="assets/img/author-thumbs/03.jpg" alt="Thumb">
								<a href="#">Name</a>
							</div>
							<h5 class="title">
								<a href="project-details.php">Project Name</a>
							</h5>
							<div class="project-stats">
								<div class="stats-value">
									<span class="value-title">Raised of <span class="value">Rp.59,689</span></span>
									<span class="stats-percentage">70%</span>
								</div>
								<div class="stats-bar" data-value="70">
									<div class="bar-line"></div>
								</div>
							</div>
							<span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="project-item">
						<div class="thumb" style="background-image: url(assets/img/project/project-grid-07.jpg);"></div>
						<div class="content">
							<div class="cats">
								<a href="#">Technology</a>
							</div>
							<div class="author">
								<img src="assets/img/author-thumbs/01.jpg" alt="Thumb">
								<a href="#">Name</a>
							</div>
							<h5 class="title">
								<a href="project-details.php">Project Name</a>
							</h5>
							<div class="project-stats">
								<div class="stats-value">
									<span class="value-title">Raised of <span class="value">Rp.59,689</span></span>
									<span class="stats-percentage">81%</span>
								</div>
								<div class="stats-bar" data-value="81">
									<div class="bar-line"></div>
								</div>
							</div>
							<span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="project-item">
						<div class="thumb" style="background-image: url(assets/img/project/project-grid-08.jpg);"></div>
						<div class="content">
							<div class="cats">
								<a href="#">Mobile Kits</a>
							</div>
							<div class="author">
								<img src="assets/img/author-thumbs/02.jpg" alt="Thumb">
								<a href="#">Name</a>
							</div>
							<h5 class="title">
								<a href="project-details.php">Project Name</a>
							</h5>
							<div class="project-stats">
								<div class="stats-value">
									<span class="value-title">Raised of <span class="value">Rp.59,689</span></span>
									<span class="stats-percentage">73%</span>
								</div>
								<div class="stats-bar" data-value="73">
									<div class="bar-line"></div>
								</div>
							</div>
							<span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="project-item">
						<div class="thumb" style="background-image: url(assets/img/project/project-grid-09.jpg);"></div>
						<div class="content">
							<div class="cats">
								<a href="#">Business</a>
							</div>
							<div class="author">
								<img src="assets/img/author-thumbs/03.jpg" alt="Thumb">
								<a href="#">Name</a>
							</div>
							<h5 class="title">
								<a href="project-details.php">Project Name</a>
							</h5>
							<div class="project-stats">
								<div class="stats-value">
									<span class="value-title">Raised of <span class="value">Rp.59,689</span></span>
									<span class="stats-percentage">75%</span>
								</div>
								<div class="stats-bar" data-value="75">
									<div class="bar-line"></div>
								</div>
							</div>
							<span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!--====== Project Section End ======-->

	<!--====== Counter Area Start ======-->
	<section class="counter-section-one mt-negative">
		<div class="container primary-bg">
			<div class="row counter-boxes justify-content-xl-between justify-content-center">
				<div class="col-xl-auto col-lg-5 col-md-5 col-sm-6">
					<div class="counter-box mb-40 icon-left">
						<div class="icon white-color">
							<i class="flaticon-crowdfunding"></i>
						</div>
						<div class="content white-color">
							<div class="count-wrap">
								<span class="count">3598</span>
								<span class="suffix">+</span>
							</div>
							<h6 class="title">Health Podcast</h6>
						</div>
					</div>
				</div>
				<div class="col-xl-auto col-lg-5 col-md-5 col-sm-6">
					<div class="counter-box mb-40 icon-left">
						<div class="icon white-color">
							<i class="flaticon-crowdfunding"></i>
						</div>
						<div class="content white-color">
							<div class="count-wrap">
								<span class="count">9634</span>
								<span class="suffix">+</span>
							</div>
							<h6 class="title">Expert Health Partners</h6>
						</div>
					</div>
				</div>
				<div class="col-xl-auto col-lg-5 col-md-5 col-sm-6">
					<div class="counter-box mb-40 icon-left">
						<div class="icon white-color">
							<i class="flaticon-crowdfunding"></i>
						</div>
						<div class="content white-color">
							<div class="count-wrap">
								<span class="count">8565</span>
								<span class="suffix">+</span>
							</div>
							<h6 class="title">Health Product</h6>
						</div>
					</div>
				</div>
				<div class="col-xl-auto col-lg-5 col-md-5 col-sm-6">
					<div class="counter-box mb-40 icon-left">
						<div class="icon white-color">
							<i class="flaticon-crowdfunding"></i>
						</div>
						<div class="content white-color">
							<div class="count-wrap">
								<span class="count">4756</span>
								<span class="suffix">+</span>
							</div>
							<h6 class="title">Active Donation</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Counter Area End ======-->

	<!--====== Testimonials Start ======-->
	<section class="testimonials-section section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-4 col-lg-6 col-md-8 col-sm-10">
					<div class="testimonials-content mb-lg-50">
						<div class="common-heading mb-30">
							<span class="tagline">
								<i class="fas fa-plus"></i> Clients Feedback
								<!-- <span class="heading-shadow-text">Testimonials</span> -->
							</span>
							<h2 class="title">What Helped People Say</h2>
						</div>
						<p>
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan
							totam rem aperiam eaque ipsa quae abillo inventore verit quasi architecto beatae vitae dicta
							sunt
						</p>
						<a href="testimonial.php" class="main-btn mt-35">View All Reviews <i
								class="far fa-arrow-right"></i></a>

						<div class="testimonial-author-boxes wow fadeInUp" data-wow-delay="0.2s">
							<h6>Most Popular Clients</h6>
							<ul class="author-images">
								<li data-tooltip="true" data-placement="top" data-original-title="Saskia Chadwick">
									<a href="#"><img src="assets/img/testi/06  - top.jpg" alt="user one"></a>
								</li>
								<li data-tooltip="true" data-placement="top" data-original-title="Rey Bong">
									<a href="#"><img src="assets/img/testi/05  - top.jpg" alt="user one"></a>
								</li>
								<li data-tooltip="true" data-placement="top" data-original-title="Sandrinna Michelle">
									<a href="#"><img src="assets/img/testi/04  - top.jpg" alt="user one"></a>
								</li>
								<li data-tooltip="true" data-placement="top" data-original-title="Olivia Rodrigo">
									<a href="#"><img src="assets/img/testi/03  - top.jpg" alt="user one"></a>
								</li>
								<li data-tooltip="true" data-placement="top" data-original-title="Ariana Grande">
									<a href="#"><img src="assets/img/testi/02  - top.jpg" alt="user one"></a>
								</li>
								<li data-tooltip="true" data-placement="top" data-original-title="Jess No Limit">
									<a href="#"><img src="assets/img/testi/01 - top.jpg" alt="user one"></a>
								</li>
								<li data-tooltip="true" data-placement="top" data-original-title="More">
									<a href="#" class="more-icon"><i class="far fa-plus"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-10">
					<div class="testimonial-boxes square-shape">
						<div class="row  justify-content-center">
							<div class="col-lg-6 col-md-6 col-sm-10">
								<div class="testimonial-box-one wow fadeInUp" data-wow-delay="0s">
									<div class="author-info">
										<div class="author-img">
											<img src="assets/img/testi/Jess.png" alt="Thumb">
										</div>
										<div>
											<h5 class="name">Jess No Limit</h5>
											<p class="position">Gamer</p>
										</div>
									</div>
									<p class="testimonial-desc">
										Before knowing YouthCare, I stressed out of work and family problems. Then I
										start to open my eyes to make change and here I am now. Finally I can deal with
										myself and all of my problems with the help of YouthCare. Thanks a lot!
									</p>
									<div class="rating-wrap">
										<span>Rating</span>
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="testimonial-box-one mt-30 wow fadeInUp" data-wow-delay="0.1s">
									<div class="author-info">
										<div class="author-img">
											<img src="assets/img/testi/02  - top.jpg" alt="Thumb">
										</div>
										<div>
											<h5 class="name">Ariana Grande</h5>
											<p class="position">Web Developer</p>
										</div>
									</div>
									<p class="testimonial-desc">
										Quis autem vel eum reprehenderit quiea voluptate velit essenih lestiae
										conseqatur veillum dolorem
									</p>
									<div class="rating-wrap">
										<span>Rating</span>
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-10">
								<div class="testimonial-box-one mt-30 wow fadeInUp" data-wow-delay="0.2s">
									<div class="author-info">
										<div class="author-img">
											<img src="assets/img/testi/05  - top.jpg" alt="Thumb">
										</div>
										<div>
											<h5 class="name">Rey Bong</h5>
											<p class="position">Web Developer</p>
										</div>
									</div>
									<p class="testimonial-desc">
										Quis autem vel eum reprehenderit quiea voluptate velit essenih lestiae
										conseqatur veillum dolorem
									</p>
									<div class="rating-wrap">
										<span>Rating</span>
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="testimonial-box-one mt-30 wow fadeInUp" data-wow-delay="0.3s">
									<div class="author-info">
										<div class="author-img">
											<img src="assets/img/testi/03  - top.jpg" alt="Thumb">
										</div>
										<div>
											<h5 class="name">Olivia Rodrigo</h5>
											<p class="position">Web Developer</p>
										</div>
									</div>
									<p class="testimonial-desc">
										Quis autem vel eum reprehenderit quiea voluptate velit essenih lestiae
										conseqatur veillum dolorem
									</p>
									<div class="rating-wrap">
										<span>Rating</span>
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Testimonials End ======-->

	<!--====== Emergency Project & CTA Start ======-->
	<section class="emergency-project-with-cta">
		<div class="container">
			<!-- Call to Action -->
			<div class="cta-box cta-double-content" style="background-image: url(assets/img/shop-hero/shop.png);">
				<div class="row justify-content-center">
					<div class="col-xl-4 col-lg-5 col-md-9">
						<div class="content">
							<h2 class="cta-title">Get Your Health Neccessities</h2>
							<p>Sed perspiciatis unde omniste natus error sit voluptatem accusantium doloremque laudan
								totamrem aperiam eaque quae abille</p>
							<a href="shop.php" class="main-btn">Get a Tour <i class="far fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-xl-2 col-lg-1 cta-double-content-gap"></div>
					<div class="col-xl-4 col-lg-5 col-md-9">
						<div class="content">
							<h2 class="cta-title">Deep Talk With Expert</h2>
							<p>Sed perspiciatis unde omniste natus error sit voluptatem accusantium doloremque laudan
								totamrem aperiam eaque quae abille</p>
							<a href="shop.php" class="main-btn">Go Talk <i class="far fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="emergency-project-slider">
			<div class="container">
				<div class="common-heading text-center mb-60">
					<span class="tagline">
						<i class="fas fa-plus"></i> Donate Projects
						<!-- <span class="heading-shadow-text">Donate</span> -->
					</span>
					<h2 class="title">Emergency Needed</h2>
				</div>
				<div class="row project-slider-two project-items project-style-four">
					<div class="col">
						<div class="project-item">
							<div class="thumb" style="background-image: url(assets/img/donation/01.jpg);"></div>
							<div class="content">
								<div class="cats">
									<a href="#">Physical Health</a>
								</div>

								<div class="author">
									<img src="assets/img/donation/01 - profile.jpg" alt="Thumb">
									<a href="#">Ilhani Nur Hidayati</a>
								</div>

								<h5 class="title">
									<a href="donation.php">She has tuberculosis. Help Syna to keep her smile!</a>
								</h5>
								<div class="project-stats">
									<div class="stats-value">
										<span class="value-title">Raised of <span
												class="value">Rp59,689</span></span><br>
										<span class="stats-percentage">12%</span>
									</div>
									<div class="stats-bar" data-value="12">
										<div class="bar-line"></div>
									</div>
								</div>
								<span class="date"><i class="far fa-calendar-alt"></i> 25 March 2022</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="project-item">
							<div class="thumb" style="background-image: url(assets/img/donation/02.jpg);"></div>
							<div class="content">
								<div class="cats">
									<a href="#">Physical Health</a>
								</div>

								<div class="author">
									<img src="assets/img/donation/02 - profile.jpg" alt="Thumb">
									<a href="#">Lulu Nuraikah</a>
								</div>

								<h5 class="title">
									<a href="donation.php">He got hit by a truck. Help Nico to reach his dream!</a>
								</h5>
								<div class="project-stats">
									<?php
									$koneksi = mysqli_connect('localhost','root','','youthcar_ssl');

									$_SESSION["donation"] = 1;
									$id = $_SESSION["donation"];
									$user_id = $_SESSION["user_id"];
									$result = "SELECT * FROM tb_donation WHERE id = $id";
									$row = ($koneksi->query($result))->fetch_array();
									echo '<span class="value-title">Raised of Rp' . $row['total'] . '</span></span>';

									$percentage = $row['total'] / $row['target'] * 100;
									echo '<span class="stats-percentage float-right">' . $percentage . '%</span>';
									?>
									
									<div class="stats-bar" data-value="90">
										<div class="bar-line"></div>
									</div>
								</div>
								<span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="project-item">
							<div class="thumb" style="background-image: url(assets/img/donation/01.jpg);"></div>
							<div class="content">
								<div class="cats">
									<a href="#">Physical Health</a>
								</div>

								<div class="author">
									<img src="assets/img/donation/01 - profile.jpg" alt="Thumb">
									<a href="#">Ilhani Nur Hidayati</a>
								</div>

								<h5 class="title">
									<a href="donation.php">She has tuberculosis. Help Syna to keep her smile!</a>
								</h5>
								<div class="project-stats">
									<div class="stats-value">
										<span class="value-title">Raised of <span
												class="value">Rp59,689</span></span><br>
										<span class="stats-percentage">12%</span>
									</div>
									<div class="stats-bar" data-value="12">
										<div class="bar-line"></div>
									</div>
								</div>
								<span class="date"><i class="far fa-calendar-alt"></i> 25 March 2022</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="project-item">
							<div class="thumb" style="background-image: url(assets/img/donation/02.jpg);"></div>
							<div class="content">
								<div class="cats">
									<a href="#">Physical Health</a>
								</div>

								<div class="author">
									<img src="assets/img/donation/02 - profile.jpg" alt="Thumb">
									<a href="#">Lulu Nuraikah</a>
								</div>

								<h5 class="title">
									<a href="donation.php">He got hit by a truck. Help Nico to reach his dream!</a>
								</h5>
								<div class="project-stats">
									<div class="stats-value">
										<span class="value-title">Raised of <span
												class="value">Rp9,000,000</span></span><br>
										<span class="stats-percentage">90%</span>
									</div>
									<div class="stats-bar" data-value="90">
										<div class="bar-line"></div>
									</div>
								</div>
								<span class="date"><i class="far fa-calendar-alt"></i> 25 February 2021</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Emergency Project & CTA End ======-->

	<!--====== Partners Section Start ======-->
	<section class="partners-section section-gap section-border-bottom">
		<div class="container">
			<div class="common-heading mb-30">
				<span class="tagline">
					<i class="fas fa-plus"></i> Our Partners
					<!-- <span class="heading-shadow-text">Partners</span> -->
				</span>
				<h2 class="title">Trusted Partners</h2>
			</div>
			<div class="row partners-logos-one">
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="logo mt-30">
						<a href="#"><img src="assets/img/partners/01.png" alt="Image"></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="logo mt-30">
						<a href="#"><img src="assets/img/partners/02.png" alt="Image"></a>
					</div>
					<!-- </div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="logo mt-30">
						<a href="#"><img src="assets/img/partners/03.png" alt="Image"></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="logo mt-30">
						<a href="#"><img src="assets/img/partners/04.png" alt="Image"></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="logo mt-30">
						<a href="#"><img src="assets/img/partners/05.png" alt="Image"></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="logo mt-30">
						<a href="#"><img src="assets/img/partners/06.png" alt="Image"></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="logo mt-30">
						<a href="#"><img src="assets/img/partners/07.png" alt="Image"></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="logo mt-30">
						<a href="#"><img src="assets/img/partners/08.png" alt="Image"></a>
					</div>
				</div> -->
				</div>
			</div>
	</section>
	<!--====== Partners Section End ======-->

	<!--====== Latest News Start ======-->
	<section class="latest-blog-section section-gap">
		<div class="container">
			<div class="common-heading text-center mb-30">
				<span class="tagline">
					<i class="fas fa-plus"></i> Latest Article
					<!-- <span class="heading-shadow-text">Article</span> -->
				</span>
				<h2 class="title">Get Every Single Update</h2>
			</div>
			<div class="row justify-content-center latest-blog-posts style-one">
				<div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.1s">
					<div class="latest-post-box mt-30">
						<div class="post-thumb">
							<img src="assets/img/latest-news/01.png" alt="Image">
						</div>
						<div class="post-content">
							<a href="#" class="post-date"><i class="far fa-calendar-alt"></i> 10 December 2022</a>
							<h6 class="title">
								<a href="news-details.php">Mental Health & Neurology</a><br>
							</h6>
							<a href="news-details.php" class="post-link">Read More <i
									class="far fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.2s">
					<div class="latest-post-box mt-30">
						<div class="post-thumb">
							<img src="assets/img/latest-news/02.jpg" alt="Image">
						</div>
						<div class="post-content">
							<a href="#" class="post-date"><i class="far fa-calendar-alt"></i> 05 December 2022</a>
							<h6 class="title">
								<a href="news-details.php">Digestive Services</a>
							</h6>
							<a href="news-details.php" class="post-link">Read More <i
									class="far fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.3s">
					<div class="latest-post-box mt-30">
						<div class="post-thumb">
							<img src="assets/img/latest-news/03.jpg" alt="Image">
						</div>
						<div class="post-content">
							<a href="#" class="post-date"><i class="far fa-calendar-alt"></i> 10 November 2022</a>
							<h6 class="title">
								<a href="news-details.php">Orthopaedic, Arthritis & Sports...</a>
							</h6>
							<a href="news-details.php" class="post-link">Read More <i
									class="far fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Latest News End ======-->

	<!--====== Footer Start ======-->
	<footer class="site-footer">
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

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


</body>

</html>