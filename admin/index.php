<?php
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
?>

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
	<title>Home - Youthcare</title>
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
			<li class="active">
				<a href="#">
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
			<li>
				<a href="donation.php">
					<i class='bx bxs-donate-heart'></i>
					<span class="text">Donations</span>
				</a>
			</li>
			<li>
				<a href="report.php">
					<i class='bx bxs-bar-chart-alt-2'></i>
					<span class="text">History</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu" id="bottom">
			<li>
				<a href="#">
					<i class='bx bxs-cog'></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="../logout.php" class="logout">
					<i class='bx bxs-log-out'></i>
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
			<i class='bx bx-menu'></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<!-- <input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label> -->
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="assets/img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
				<!-- Dashboard -->
				<div class="head-title">
					<div class="left">
						<h1>Dashboard</h1>
						<ul class="breadcrumb">
							<li>
								<a href="#">Dashboard</a>
							</li>
							<li><i class='bx bx-chevron-right'></i></li>
							<li>
								<a class="active" href="#">Home</a>
							</li>
						</ul>
					</div>
					<a href="#" class="btn-download">
						<i class='bx bxs-cloud-download'></i>
						<span class="text">Download PDF</span>
					</a>
				</div>

				<ul class="box-info">
					<li>
						<i class='bx bxs-dollar-circle'></i>
						<span class="text">
							<?php
							$conn = mysqli_connect('localhost', 'root', '', 'youthcar_ssl');

							// Retrieve the donation amounts from the database
							$query = "SELECT SUM(amount) AS total_amount FROM tb_donator";
							$result = mysqli_query($conn, $query);

							if ($result) {
								// Fetch the total amount from the result set
								$row = mysqli_fetch_assoc($result);
								$totalAmount = $row['total_amount'];

								$formattedAmount = number_format($totalAmount, 0, '.', ',');

								// Output the total amount
								echo "<h3>Rp" . $formattedAmount . "</h3>";
							}

							// Close the database connection
							mysqli_close($conn);
							?>
							<!-- <h3>$10,986</h3> -->
							<p>Total Raised</p>
						</span>
					</li>
					<li>
						<i class='bx bxs-group'></i>
						<span class="text">
							<?php
							$conn = mysqli_connect('localhost', 'root', '', 'youthcar_ssl');

							$query = "SELECT COUNT(*) AS total_rows FROM tb_donation";
							$result = mysqli_query($conn, $query);

							if ($result) {
								// Fetch the total number of rows from the result set
								$row = mysqli_fetch_assoc($result);
								$totalRows = $row['total_rows'];

								// Output the total number of rows
								echo "<h3>" . $totalRows . "</h3>";
							}

							mysqli_close($conn);
							?>
							<!-- <h3>300</h3> -->
							<p>Total Donation</p>
						</span>
					</li>
					<li>
						<i class='bx bxs-doughnut-chart'></i>
						<span class="text">
							<?php
							$conn = mysqli_connect('localhost', 'root', '', 'youthcar_ssl');

							// Retrieve the donation amounts from the database
							$query = "SELECT AVG(amount) AS total_amount FROM tb_donator";
							$result = mysqli_query($conn, $query);

							if ($result) {
								// Fetch the total amount from the result set
								$row = mysqli_fetch_assoc($result);
								$totalAmount = $row['total_amount'];

								$formattedAmount = number_format($totalAmount, 0, '.', ',');

								// Output the total amount
								echo "<h3>Rp" . $formattedAmount . "</h3>";
							}

							// Close the database connection
							mysqli_close($conn);
							?>
							<!-- <h3>$2543</h3> -->
							<p>Average Donation</p>
						</span>
					</li>
				</ul>

				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Recent Activity</h3>
							<i class='bx bx-search'></i>
							<i class='bx bx-filter'></i>
						</div>
						<table>
							<thead>
								<tr>
									<th>User</th>
									<th>Date and Time</th>
									<th>Total Donation</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$conn = mysqli_connect('localhost', 'root', '', 'youthcar_ssl');

								// Query to retrieve all data from the table
								$query = "SELECT * FROM tb_donator ORDER BY donation_date DESC LIMIT 5";
								$result = mysqli_query($conn, $query);

								if ($result && mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										$user = $row['first_name'];
										$dateTime = $row['donation_date'];
										$totalDonation = $row['amount'];
										$formattedAmount = number_format($totalDonation, 0, ',', '.');
										?>
										<tr>
											<td>
												<img src="assets/img/people.png">
												<p><?php echo $user; ?></p>
											</td>
											<td><?php echo $dateTime; ?></td>
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
					<div class="donationchart">
						<div class="head">
							<h3>Donations</h3>
							<i class='bx bx-filter'></i>
						</div>
						<div class="chart">
							<canvas id="myChart"></canvas>
						</div>
						<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
					</div>
				</div>
				<script>
					// Retrieve the monthly average donation data from the database
					<?php
					$conn = mysqli_connect('localhost', 'root', '', 'youthcar_ssl');

					$query = "SELECT MONTH(donation_date) AS month, AVG(amount) AS average_amount FROM tb_donator GROUP BY MONTH(donation_date)";
					$result = mysqli_query($conn, $query);

					$labels = array();
					$data = array();

					while ($row = mysqli_fetch_assoc($result)) {
						$month = $row['month'];
						$averageAmount = $row['average_amount'];

						$labels[] = date("M", mktime(0, 0, 0, $month, 1));
						$data[] = $averageAmount;
					}

					mysqli_close($conn);
					?>

					// Create the chart with the retrieved data
					var ctx = document.getElementById('myChart').getContext('2d');
					var myChart = new Chart(ctx, {
						type: 'bar',
						data: {
							labels: <?php echo json_encode($labels); ?>,
							datasets: [{
								label: 'Monthly Average Donation',
								data: <?php echo json_encode($data); ?>,
								backgroundColor: '#D90069',
								borderWidth: 0,
								borderRadius: 5,
								borderSkipped: false,
							}],
						},
						options: {
							responsive: true,
							maintainAspectRatio: false,
							plugins: {
								legend: {
									position: 'top',
								},
							},
							scales: {
								x: {
									grid: {
										display: false,
									},
								},
								y: {
									grid: {
										display: false,
									},
									beginAtZero: true,
								},
							},
						},
					});
				</script>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="assets/script.js"></script>
</body>

</html>