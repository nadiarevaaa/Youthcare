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
	<title> FAQ - YouthCare </title>

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
							<li><a href="#"><i class="far fa-map-marker-alt"></i> Kaliurang KM 14.5, Yogyakarta, Indonesia</a></li>
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
							echo "Welcome, ".ucfirst($_SESSION['user_name'])."!";
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

    <!--====== Page Title Start ======-->
    <section class="page-title-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8">
                    <h1 class="page-title">FAQ</h1>
                </div>
                <div class="col-auto">
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <!--====== FAQ Area Start ======-->
    <section class="faq-section section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="faq-accordion-tab">
                        <div class="tab-nav-area text-center">
                            <ul class="nav nav-tabs" id="faqTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#general" role="tab">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#speakers" role="tab">Speakers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pricing" role="tab">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#support" role="tab">Support</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#history" role="tab">History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#customers" role="tab">Customers</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="faqTabContent">
                            <div class="tab-pane fade show active" id="general" role="tabpanel">
                                <div class="accordion" id="accordionFaqOne">
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="true" data-target="#accordion-1-1">
                                            Better Research, Better Design, Better Results
                                        </h5>
                                        <div id="accordion-1-1" class="collapse show" data-parent="#accordionFaqOne">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-1-2">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-1-2" class="collapse" data-parent="#accordionFaqOne">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-1-3">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-1-3" class="collapse" data-parent="#accordionFaqOne">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-1-4">
                                            How To Improve Your Design Process With Data-Based Personas
                                        </h5>
                                        <div id="accordion-1-4" class="collapse" data-parent="#accordionFaqOne">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-1-5">
                                            Better Research, Better Design, Better Results
                                        </h5>
                                        <div id="accordion-1-5" class="collapse" data-parent="#accordionFaqOne">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-1-6">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-1-6" class="collapse" data-parent="#accordionFaqOne">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-1-7">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-1-7" class="collapse" data-parent="#accordionFaqOne">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-1-8">
                                            How To Improve Your Design Process With Data-Based Personas
                                        </h5>
                                        <div id="accordion-1-8" class="collapse" data-parent="#accordionFaqOne">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-1-9">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-1-9" class="collapse" data-parent="#accordionFaqOne">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-1-10">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-1-10" class="collapse" data-parent="#accordionFaqOne">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="speakers" role="tabpanel">
                                <div class="accordion" id="accordionFaqTwo">
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="true" data-target="#accordion-2-1">
                                            Better Research, Better Design, Better Results
                                        </h5>
                                        <div id="accordion-2-1" class="collapse show" data-parent="#accordionFaqTwo">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-2-2">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-2-2" class="collapse" data-parent="#accordionFaqTwo">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-2-3">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-2-3" class="collapse" data-parent="#accordionFaqTwo">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-2-4">
                                            How To Improve Your Design Process With Data-Based Personas
                                        </h5>
                                        <div id="accordion-2-4" class="collapse" data-parent="#accordionFaqTwo">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-2-5">
                                            Better Research, Better Design, Better Results
                                        </h5>
                                        <div id="accordion-2-5" class="collapse" data-parent="#accordionFaqTwo">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-2-6">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-2-6" class="collapse" data-parent="#accordionFaqTwo">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-2-7">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-2-7" class="collapse" data-parent="#accordionFaqTwo">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-2-8">
                                            How To Improve Your Design Process With Data-Based Personas
                                        </h5>
                                        <div id="accordion-2-8" class="collapse" data-parent="#accordionFaqTwo">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-2-9">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-2-9" class="collapse" data-parent="#accordionFaqTwo">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-2-10">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-2-10" class="collapse" data-parent="#accordionFaqTwo">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pricing" role="tabpanel">
                                <div class="accordion" id="accordionFaqThree">
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="true" data-target="#accordion-3-1">
                                            Better Research, Better Design, Better Results
                                        </h5>
                                        <div id="accordion-3-1" class="collapse show" data-parent="#accordionFaqThree">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-3-2">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-3-2" class="collapse" data-parent="#accordionFaqThree">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-3-3">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-3-3" class="collapse" data-parent="#accordionFaqThree">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-3-4">
                                            How To Improve Your Design Process With Data-Based Personas
                                        </h5>
                                        <div id="accordion-3-4" class="collapse" data-parent="#accordionFaqThree">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-3-5">
                                            Better Research, Better Design, Better Results
                                        </h5>
                                        <div id="accordion-3-5" class="collapse" data-parent="#accordionFaqThree">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-3-6">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-3-6" class="collapse" data-parent="#accordionFaqThree">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="support" role="tabpanel">
                                <div class="accordion" id="accordionFaqFour">
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="true" data-target="#accordion-4-1">
                                            Better Research, Better Design, Better Results
                                        </h5>
                                        <div id="accordion-4-1" class="collapse show" data-parent="#accordionFaqFour">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-4-2">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-4-2" class="collapse" data-parent="#accordionFaqFour">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-4-3">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-4-3" class="collapse" data-parent="#accordionFaqFour">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-4-4">
                                            How To Improve Your Design Process With Data-Based Personas
                                        </h5>
                                        <div id="accordion-4-4" class="collapse" data-parent="#accordionFaqFour">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-4-5">
                                            Better Research, Better Design, Better Results
                                        </h5>
                                        <div id="accordion-4-5" class="collapse" data-parent="#accordionFaqFour">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-4-6">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-4-6" class="collapse" data-parent="#accordionFaqFour">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-4-7">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-4-7" class="collapse" data-parent="#accordionFaqFour">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-4-8">
                                            How To Improve Your Design Process With Data-Based Personas
                                        </h5>
                                        <div id="accordion-4-8" class="collapse" data-parent="#accordionFaqFour">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-4-9">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-4-9" class="collapse" data-parent="#accordionFaqFour">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-4-10">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-4-10" class="collapse" data-parent="#accordionFaqFour">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="history" role="tabpanel">
                                <div class="accordion" id="accordionFaqFive">
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="true" data-target="#accordion-5-1">
                                            Better Research, Better Design, Better Results
                                        </h5>
                                        <div id="accordion-5-1" class="collapse show" data-parent="#accordionFaqFive">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-5-2">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-5-2" class="collapse" data-parent="#accordionFaqFive">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-5-3">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-5-3" class="collapse" data-parent="#accordionFaqFive">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-5-4">
                                            How To Improve Your Design Process With Data-Based Personas
                                        </h5>
                                        <div id="accordion-5-4" class="collapse" data-parent="#accordionFaqFive">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-5-5">
                                            Better Research, Better Design, Better Results
                                        </h5>
                                        <div id="accordion-5-5" class="collapse" data-parent="#accordionFaqFive">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-5-6">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-5-6" class="collapse" data-parent="#accordionFaqFive">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-5-7">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-5-7" class="collapse" data-parent="#accordionFaqFive">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="customers" role="tabpanel">
                                <div class="accordion" id="accordionFaqSix">
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="true" data-target="#accordion-6-1">
                                            Better Research, Better Design, Better Results
                                        </h5>
                                        <div id="accordion-6-1" class="collapse show" data-parent="#accordionFaqSix">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-6-2">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-6-2" class="collapse" data-parent="#accordionFaqSix">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-6-3">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-6-3" class="collapse" data-parent="#accordionFaqSix">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-6-4">
                                            How To Improve Your Design Process With Data-Based Personas
                                        </h5>
                                        <div id="accordion-6-4" class="collapse" data-parent="#accordionFaqSix">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-6-5">
                                            Better Research, Better Design, Better Results
                                        </h5>
                                        <div id="accordion-6-5" class="collapse" data-parent="#accordionFaqSix">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-6-6">
                                            Smashing Book Excerpt Bringing Personality Back Web
                                        </h5>
                                        <div id="accordion-6-6" class="collapse" data-parent="#accordionFaqSix">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-title" data-toggle="collapse" aria-expanded="false" data-target="#accordion-6-7">
                                            Using Low Vision As My Tool To Help Me Teach WordPress
                                        </h5>
                                        <div id="accordion-6-7" class="collapse" data-parent="#accordionFaqSix">
                                            <div class="accordion-content">
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore seyse
                                                mque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FAQ Area End ======-->

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