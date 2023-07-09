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
    <title>History - Youthcare</title>
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
            <li>
                <a href="donation.php">
                    <i class='bx bxs-donate-heart'></i>
                    <span class="text">Donations</span>
                </a>
            </li>
            <li class="active">
                <a href="#">
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
			<div class="head-title">
				<div class="left">
					<h1>History</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">History</a>
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
                                <th>Donation Name</th>
                                <th>Date and Time</th>
                                <th>Total Accumulated Donation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
								$conn = mysqli_connect('localhost', 'root', '', 'youthcar_ssl');

								// Query to retrieve all data from the table
								$query =
                                "SELECT e.title, d.donation_date, d.amount+
                                (SELECT SUM(d2.amount)
                                 FROM tb_donator d2
                                --  JOIN tb_donation e2 ON e2.id = d2.donation_id
                                 WHERE d2.donation_id <= d.donation_id) AS total_amount
                                FROM tb_donator d
                                JOIN tb_donation e 
                                ON e.id = d.donation_id
                                -- WHERE d.donation_date 
                                GROUP BY d.donation_date
                                ORDER BY d.donation_date DESC";

                                // select q.donation_date AS date, SUM(amount) AS total, donation_id from (select amount, donation_id, donation_date from tb_donator) as q
                                // group by q.donation_id
								$result = mysqli_query($conn, $query);

								if ($result && mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
                                        $donationName = $row['title'];
										$dateTime = $row['donation_date'];
										$totalDonation = $row['total_amount'];
										$formattedAmount = number_format($totalDonation, 0, ',', '.');
										?>
										<tr>
                                            <td><?php echo $donationName; ?></td>
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
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    <script src="assets/script.js"></script>
</body>

</html>