<?php
session_start();
include '../../config/koneksi.php';

$ID 			= $_POST['id'];
$nama			= $_POST['nama'];

$sql	= "UPDATE jabatan SET nama = '$nama' WHERE id='$ID'";

mysqli_query($konek,$sql);
header('location:index.php');

?>