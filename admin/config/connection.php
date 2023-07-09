<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "youthcar_ssl";

$conn = new mysqli($server, $user, $password, $db);

if (mysqli_connect_errno()) {
    printf("Koneksi gagal: %s\n", mysqli_connect_error());
    exit();
}

?>