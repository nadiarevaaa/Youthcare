<?php 
// koneksi database
session_start();
$koneksi = mysqli_connect('localhost','root','','youthcar_ssl');

$user_id = $_SESSION["user_id"];
 
 
// menghapus data dari database
$result = mysqli_query($koneksi,"DELETE from tb_card WHERE user_id='$user_id' AND card_desc=1");
 
// mengalihkan halaman kembali ke index.php
if ($result) {
	header("Location: ../../payment-donation.php");
} else {
	echo "<script>alert('Failed to delete')</script>";
}
 
?>