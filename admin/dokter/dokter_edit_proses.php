<?php
session_start();
include '../../config/koneksi.php';

$ID 			= $_POST['id'];
$nama			= $_POST['nama'];
$jabatan		= $_POST['jabatan'];
$nip			= $_POST['nip'];
$gol			= $_POST['gol'];
$telp			= $_POST['telp'];
$alamat			= $_POST['alamat'];
$layanan		= $_POST['layanan'];

$sql	= "UPDATE dokter SET 
			nama 			= '$nama',
			id_jabatan 		= '$jabatan',
			nip				= '$nip',
			gol				= '$gol',
			telepon			= '$telp',
			alamat			= '$alamat',
			id_pelayanan	= '$layanan'
			WHERE id 		= '$ID'";

mysqli_query($konek,$sql);
header('location:index.php');

?>