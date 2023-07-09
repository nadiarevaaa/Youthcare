<?php
session_start();
$koneksi = mysqli_connect('localhost','root','','youthcar_ssl');
 
$name = $_POST['name'];
$bank = $_POST['bank'];
$number = $_POST['number'];
$user_id = $_SESSION["user_id"];
 
$result = mysqli_query($koneksi,"UPDATE tb_card SET card_name='$name', number='$number', bank_card='$bank' WHERE user_id='$user_id' AND card_desc = 1");

if ($result) {
	header("Location: ../../payment-donation.php");
} else {
	echo "<script>alert('Failed to update')</script>";
}
 
?>