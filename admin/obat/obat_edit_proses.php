<?php
session_start();
include '../../config/koneksi.php';

$ID 			= $_POST['id'];
$nama			= $_POST['nama'];
$expired		= $_POST['expired'];
$jumlah			= $_POST['jumlah'];
$satuan			= $_POST['satuan'];

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
			expired 	= '$expired',
			status		= '$status',
			jumlah		= '$jumlah',
			satuan		= '$satuan'
			WHERE id 	= '$ID'";

mysqli_query($konek,$sql);
header('location:index.php');

?>