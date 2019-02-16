<?php
session_start();
include '../../config/koneksi.php';

$nama			= $_POST['nama'];

$sql = "INSERT INTO role (nama) VALUES ('$nama')";
mysqli_query($konek,$sql);
header('location:index.php');

?>