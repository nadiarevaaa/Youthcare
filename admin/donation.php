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
	<title>Donation - Youthcare</title>
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
            <li>
                <a href="fundraisers.php">
                    <i class='bx bxs-gift'></i>
                    <span class="text">Fundraisers</span>
                </a>
            </li>
            <li class="active">
                <a href="#">
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
					<h1>Donations</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Donations</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="index.php">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<table>
						<thead>
							<tr>
								<th>Donation Title</th>
                                <th>Creator</th>
								<th>Date and Time</th>
								<th>Goals</th>
								<th>Totals</th>
							</tr>
						</thead>
						<tbody>
						<?php
								$conn = mysqli_connect('localhost', 'root', '', 'youthcar_ssl');

								// Query to retrieve all data from the table
								$query = "SELECT e.title, e.name, e.date, e.target, e.total+
								(SELECT SUM(d2.amount)
								FROM tb_donator d2
							   --  JOIN tb_donation e2 ON e2.id = d2.donation_id
								WHERE d2.donation_id <= d.donation_id) AS total 
								FROM tb_donation e JOIN tb_donator d
								GROUP BY e.title
								ORDER BY date";
								$result = mysqli_query($conn, $query);

								if ($result && mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										$donationTitle = $row['title'];
										$user = $row['name'];
										$dateTime = $row['date'];
										$targetDonation = $row['target'];
										$totalDonation = $row['total'];
										$formattedAmount = number_format($totalDonation, 0, ',', '.');
										?>
										<tr>
											<td><?php echo $donationTitle; ?></td>
											<td>
												<img src="assets/img/people.png">
												<p><?php echo $user; ?></p>
											</td>
											<td><?php echo $dateTime; ?></td>
											<td><?php echo $targetDonation; ?></td>
											<td>
												<span class="status completed"><?php echo 'Rp' . $formattedAmount; ?></span>
											</td>
										</tr>
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