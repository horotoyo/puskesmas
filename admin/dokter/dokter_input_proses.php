<?php
session_start();
include '../../config/koneksi.php';

$nama			= $_POST['nama'];
$jabatan		= $_POST['jabatan'];
$nip			= $_POST['nip'];
$gol			= $_POST['gol'];
$telp			= $_POST['telp'];
$alamat			= $_POST['alamat'];
$layanan		= $_POST['layanan'];

$sql = "INSERT INTO dokter (nama, id_jabatan, nip, gol, telepon, alamat, id_pelayanan)
		VALUES ('$nama', '$jabatan', '$nip', '$gol', '$telp', '$alamat', '$layanan')";
mysqli_query($konek,$sql);
header('location:index.php');

?>