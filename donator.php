<?php
session_start();
$koneksi = mysqli_connect('localhost','root','','youthcar_ssl');

$user_id = $_SESSION["user_id"];

$result1 = "SELECT id FROM tb_card WHERE user_id = $user_id AND card_desc=1";
$result_active = $koneksi->query($result1);
$result_active2 = $result_active->fetch_array();

$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["email"];
$amount = $_SESSION["amount"];
$card_id = $result_active2['id'];
$donation_id = $_SESSION["donation"];
// Get the current date and time

$currentDate = date('Y-m-d H:i:s');


$sql = "INSERT INTO tb_donator(user_id,card_id,first_name,last_name,email,amount,donation_id, donation_date)VALUES('$user_id','$card_id', '$fname','$lname', '$email', '$amount',$donation_id, '$currentDate')";
$result = mysqli_query($koneksi, $sql);

//update total donation
$resultdonation = "SELECT * FROM tb_donation WHERE id = $donation_id";
$row = ($koneksi->query($resultdonation))->fetch_array();
$total = $row['total']+$amount;
$updatedonation = mysqli_query($koneksi,"UPDATE tb_donation SET total='$total' WHERE id='$donation_id'");

if ($result and $updatedonation) {
    echo "<script>alert('Thank you for donating!')</script>";
    echo '<script>window.location.href = "index.php";</script>';
} else {
	echo "<script>alert('Failed to donate')</script>";
}

?>