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
	<title> Donate Details - YouthCare </title>

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
					<h1 class="page-title">Payment Details</h1>
				</div>
				<div class="col-auto">
					<ul class="page-breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li><a href="donation.php">Donation</a></li>
						<li>Payment Details</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--====== Page Title End ======-->

	<!--====== Project Details Area Start ======-->
	<section class="about-section-four section-gap">
		<div class="container">
			<div class="row align-items-start justify-content-start">
				<div class="col-lg-6 col-md-10">
					<div class="about-img mb-md-70">
						<p>PERSONAL DETAILS</p><br>
						<form action="donator.php" method="post">
							<label for="firstname">First Name</label>
							<input type="text" class="form-control" name="firstname" id="firstname"
								placeholder="First Name" required>
							<br>
							<label for="lastname">Last Name</label>
							<input type="text" class="form-control" name="lastname" id="lastname"
								placeholder="Last Name" required>
							<br>
							<label for="email">Email Address</label>
							<input type="text" class="form-control" name="email" id="email" placeholder="Email"
								required>
							<button type="submit" class="main-btn mt-40" name="donate">Donate <i
									class="far fa-arrow-right"></i></button>
						</form>
					</div>
				</div>
				<div class="col-lg-6 col-md-9">
					<div class="about-text2">
						<!-- <p class="mb-20"> -->
						<div class="card-details">
							<p>CARD DETAILS</p><br>

							<?php
							$koneksi = mysqli_connect('localhost','root','','youthcar_ssl');

							$user_id = $_SESSION["user_id"];
							$result1 = "SELECT * FROM tb_card WHERE user_id = $user_id AND card_desc=1";
							$result2 = "SELECT * FROM tb_card WHERE user_id = $user_id AND card_desc=0";
							$result_active = $koneksi->query($result1);
							$result_inactive = $koneksi->query($result2);
							$result_active2 = $result_active->fetch_array();

							echo '<form action="" method="post">';
							if ($result_active->num_rows == 1) {
								echo '<label for="name">Name on card</label>';
								echo '<input type="text" class="form-control" name="name" id="name" disabled value="' . $result_active2['card_name'] . '">';
								echo '<br>';
								echo '<label for="bank">Bank Card</label>';
								echo '<input type="text" class="form-control" name="bank" id="bank" disabled value="' . $result_active2['bank_card'] . '">';
								echo '<br>';
								echo '<label for="card">Card Number</label>';
								echo '<input type="text" class="form-control" name="number" id="number" disabled value="' . $result_active2['number'] . '">';
							} else {
								echo '<label for="name">Name on card</label>';
								echo '<input type="text" class="form-control" name="name" id="name" value="-" disabled>';
								echo '<br>';
								echo '<label for="bank">Bank Card</label>';
								echo '<input type="text" class="form-control" name="bank" id="bank" value="-" disabled>';
								echo '<br>';
								echo '<label for="card">Card Number</label>';
								echo '<input type="text" class="form-control" name="number" id="number" value="-" disabled>';
							}

							echo '</form>';

							?>

							<!-- <form action="" method="post">
								<label for="name">Name on card</label>
								<input type="text" class="form-control" name="name" id="name" value="Jihan Syahira"
									disabled>
								<br>
								<label for="bank">Bank Card</label>
								<input type="text" class="form-control" name="bank" id="bank" value="Mandiri" disabled>
								<br>
								<label for="card">Card Number</label>
								<input type="text" class="form-control" name="card" id="card" value="123-456-789"
									disabled>
							</form> -->
							<div class="crud">
								<button class="edit" data-toggle="modal" data-target="#myModal">edit |</button>
								<button class="edit" data-toggle="modal" data-target="#myModal2"> add</button>
								<form action="assets/php/delete.php" method="post">
									<button type="submit" class="edit"> delete</button>
								</form>
							</div>

						</div>
						<!-- </p> -->
						<!-- <a href="about.php" class="main-btn mt-40"> Donate <i class="far fa-arrow-right"></i> </a> -->
					</div>
				</div>
			</div>
			<!-- Overlay Edit Card -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">EDIT CARD</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<?php
							$koneksi = mysqli_connect('localhost','root','','youthcar_ssl');

							$user_id = $_SESSION["user_id"];
							$result1 = "SELECT * FROM tb_card WHERE user_id = $user_id AND card_desc=1";
							$result_active = $koneksi->query($result1);
							$result_active2 = $result_active->fetch_array();

							if ($result_active->num_rows == 1) {
								echo '<form action="assets/php/update.php" method="post">';
								echo '<label for="name">Name on card</label>';
								echo '<input type="text" class="form-control" name="name" id="name" value="' . $result_active2['card_name'] . '">';
								echo '<br>';
								echo '<label for="bank">Bank Card</label>';
								echo '<input type="text" class="form-control" name="bank" id="bank" value="' . $result_active2['bank_card'] . '">';
								echo '<br>';
								echo '<label for="card">Card Number</label>';
								echo '<input type="text" class="form-control" name="number" id="number" value="' . $result_active2['number'] . '">';

								echo '<div class="modal-footer">';
								echo '<button type="submit" class="btn btn-default" name="update">Update</button>';
								echo '</div>';
								echo '</form>';
							}
							// } else {
							// 	echo '<p> Add card </p>';
							// 	echo '<button class="edit" data-toggle="modal" data-target="#myModal2"> add</button>';
							// }
							?>
						</div>

					</div>
				</div>
			</div>

			<!-- Overlay Add Card -->
			<div class="modal fade" id="myModal2" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">ADD CARD</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<form action="assets/php/add.php" method="post" id="mymodal2form">
								<label for="name">Name on card</label>
								<input type="text" class="form-control" name="name" id="name" required>
								<br>
								<label for="bank">Bank Card</label>
								<input type="text" class="form-control" name="bank" id="bank" required>
								<br>
								<label for="number">Card Number</label>
								<input type="text" class="form-control" name="number" id="number" required>
								<br>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="switch" name="switch"
										value="1">
									<label class="custom-control-label" for="switch">Use this card</label>
								</div>
								<br>
								<button type="submit" name="add" class="btn btn-default">Add</button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Project Details Area End ======-->



	<!--====== Footer Start ======-->
	<footer class="site-footer with-footer-cta">
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
	<script>
		$(document).on('click', '[name="money"]', function (e) {
			e.stopPropagation();

			// add class active to current button and remove it from the siblings
			$(this).toggleClass('active')
				.siblings().not(thi).removeClass('activ})
	</script>

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