<?php
session_start();
include '../../config/koneksi.php';

$nama			= $_POST['nama'];
$jabatan		= $_POST['jabatan'];
$nip			= $_POST['nip'];
$gol			= $_POST['gol'];
$telp			= $_POST['telp'];
$alamat			= $_POST['alamat'];

if (empty($nip)) {
	$nip = "-";
} else {
	$nip			= $_POST['nip'];
}

$sql = "INSERT INTO staff (nama, id_jabatan, nip, gol, telepon, alamat)
		VALUES ('$nama', '$jabatan', '$nip', '$gol', '$telp', '$alamat')";
mysqli_query($konek,$sql);
header('location:index.php');

?>