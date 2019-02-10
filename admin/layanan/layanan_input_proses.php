<?php
session_start();
include '../../config/koneksi.php';

$nama			= $_POST['nama'];
$deskripsi		= $_POST['deskripsi'];

if (empty($deskripsi)) {
	$deskripsi = "<em>no description</em>";
} else {
	$deskripsi = $_POST['deskripsi'];
}

$sql = "INSERT INTO layanan (nama, deskripsi) VALUES ('$nama', '$deskripsi')";
mysqli_query($konek,$sql);
header('location:index.php');

?>