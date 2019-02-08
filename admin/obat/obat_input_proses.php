<?php
session_start();
include '../../config/koneksi.php';

$nama			= $_POST['nama'];
$expired		= $_POST['expired'];
$jumlah			= $_POST['jumlah'];
$satuan			= $_POST['satuan'];
$masuk			= $_POST['masuk'];




$sql = "INSERT INTO obat (judul, isi, user_id, gambar, status, kategori_id, jam, rilis)
		VALUES ('$judul', '$isi', '$penulis', '$ubah','$status','$kategori', '$jam', '$date')";
mysqli_query($konek,$sql);
header('location:index.php');

?>