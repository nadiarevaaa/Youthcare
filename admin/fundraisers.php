<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/style.css">
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="assets/img/Only logo.png" type="img/png" />
	<title>Admin-Youthcare</title>
</head>
<body>
	<!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <img id="logo" src="assets/img/Only logo black v2.png" alt="Logo">
			<!-- <div class="logo"></div> -->
            <span>YouthCare</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="index.php">
                    <i class='bx bxs-home'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="#">
                    <i class='bx bxs-gift'></i>
                    <span class="text">Fundraisers</span>
                </a>
            </li>
            <li>
                <a href="donation.php">
                    <i class='bx bxs-donate-heart' ></i>
                    <span class="text">Donations</span>
                </a>
            </li>
            <li>
                <a href="report.php">
                    <i class='bx bxs-bar-chart-alt-2' ></i>
                    <span class="text">History</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu" id="bottom">
            <li>
                <a href="#">
                    <i class='bx bxs-cog' ></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="../logout.php" class="logout">
                    <i class='bx bxs-log-out' ></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<!-- <input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label> -->
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="assets/img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Fundraisers</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Fundraisers</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<div class="table-data">
				<div class="order">
					<table>
						<thead>
							<tr>
								<th>Name</th>
                                <th>Email</th>
								<th>Total Donation</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$conn = mysqli_connect('localhost', 'root', '', 'youthcar_ssl');

							// Query to retrieve all data from the table
							$query = "SELECT first_name, email, SUM(amount) AS total_donate 
							FROM tb_donator 
							GROUP BY first_name
							ORDER BY donation_date";
							$result = mysqli_query($conn, $query);

							if ($result && mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
									$user = $row['first_name'];
									$email = $row['email'];
									$totalDonation = $row['total_donate'];
									$formattedAmount = number_format($totalDonation, 0, ',', '.');
									?>
									<tr>
										<td>
											<img src="assets/img/people.png">
											<p><?php echo $user; ?></p>
										</td>
										<td><?php echo $email; ?></td>
										<td>
											<span class="status completed"><?php echo 'Rp' . $formattedAmount; ?></span>
										</td>										</tr>
									<?php
								}
							} else {
								echo "<tr><td colspan='3'>No data found</td></tr>";
							}

							mysqli_close($conn);
							?>
                        </tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="assets/script.js"></script>
</body>
</html>