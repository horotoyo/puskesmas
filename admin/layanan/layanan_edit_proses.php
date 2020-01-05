<?php
session_start();
include '../../config/koneksi.php';

$ID 			= $_POST['id'];
$nama			= $_POST['nama'];
$deskripsi		= $_POST['deskripsi'];

$sql	= "UPDATE layanan SET nama = '$nama', deskripsi = '$deskripsi' WHERE id='$ID'";

mysqli_query($konek,$sql);
header('location:index.php');

?>