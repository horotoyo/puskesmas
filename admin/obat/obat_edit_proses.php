<?php
session_start();
include '../../config/koneksi.php';

$ID 			= $_POST['id'];
$nama			= $_POST['nama'];
$jumlah			= $_POST['jumlah'];
$harga			= $_POST['harga'];

if (empty($jumlah)) {
	$jumlah = 0;
}

if ($jumlah == 0) {
	$status = 1;
} else {
	$status = 0;
}

$sql	= "UPDATE obat SET 
			nama 		= '$nama',
			status		= '$status',
			jumlah		= '$jumlah',
			harga 		= '$harga'
			WHERE id 	= '$ID'";

mysqli_query($konek,$sql);
header('location:index.php');

?>