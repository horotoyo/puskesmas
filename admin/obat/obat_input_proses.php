<?php
session_start();
include '../../config/koneksi.php';

$nama			= $_POST['nama'];
$jumlah			= $_POST['jumlah'];
$satuan			= $_POST['satuan'];
$harga			= $_POST['harga'];

if (empty($jumlah)) {
	$jumlah = 0;
}

if ($jumlah == 0) {
	$status = 1;
} else {
	$status = 0;
}

$sql = "INSERT INTO obat (nama, status, jumlah, id_satuan, harga)
		VALUES ('$nama', '$status', '$jumlah', '$satuan', '$harga')";
mysqli_query($konek,$sql);
header('location:index.php');

?>