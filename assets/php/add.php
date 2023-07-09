<?php
// koneksi database
session_start();
$koneksi = mysqli_connect('localhost','root','','youthcar_ssl');

// menangkap data yang di kirim dari form
// $query = "SELECT akun_id FROM akun ORDER BY id DESC";
// $id = ((int)$query) +1;
$name = $_POST['name'];
$bank = $_POST['bank'];
$number = $_POST['number'];
$desc = $_POST['switch'];
$user_id = $_SESSION["user_id"];

$result1 = "SELECT * FROM tb_card WHERE user_id = $user_id AND card_desc=1 ";
$result_active = $koneksi->query($result1);
$result_active2 = $result_active->fetch_array();

if ($desc == 1) {
	if ($result_active->num_rows > 0) {
		$update = "UPDATE tb_card SET card_desc = 0";
		$update2 = mysqli_query($koneksi, $update);
	}
}

$sql = "INSERT INTO tb_card(card_name,number,bank_card,user_id,card_desc)VALUES('$name','$number','$bank','$user_id', '$desc')";
$result = mysqli_query($koneksi, $sql);

if ($result) {
	// echo "<script>
	// 	$('#mymodal2form').submit(function() {
	// 	$('#myModal2').modal('hide');
	// 	return false; });
	// 	</script>";

	// echo "<script>alert('Successfully added')</script>";
	// echo "<script>location.href =  '../../payment-donation.php</script>'";
	header("Location: ../../payment-donation.php");
} else {
	echo "<script>alert('Failed to add')</script>";
}

?>