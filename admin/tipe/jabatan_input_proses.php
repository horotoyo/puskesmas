<?php
session_start();
include '../../config/koneksi.php';

$nama			= $_POST['nama'];
$jenis			= $_POST['jenis'];

$sql = "INSERT INTO jabatan (nama, id_jenis) VALUES ('$nama', '$jenis')";
mysqli_query($konek,$sql);
header('location:index.php');

?>