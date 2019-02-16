<?php
session_start();
include '../../config/koneksi.php';

$wilker			= $_POST['wilker'];
$nama			= $_POST['nama'];
$tmp_lahir		= $_POST['tmp_lahir'];
$tgl_lahir		= $_POST['tgl_lahir'];
$alamat			= $_POST['alamat'];
$telp			= $_POST['telp'];
$gol			= $_POST['gol'];
$jk				= $_POST['jk'];
$date 			= date("Y-m-d H:i");

//ambil data dari databases
$a  	    	= "SELECT max(id) FROM members WHERE id LIKE '%$wilker%'";
$b 				= mysqli_query($konek, $a);
$c 				= mysqli_fetch_row($b);
$d 				= $c[0];
$e 				= substr($d, 4);

//mengecek data didatabases
$query 			= "SELECT * FROM members WHERE id LIKE '%$wilker%'";
$result 		= mysqli_query($konek, $query);

if (!empty($result)) {
	$urut	= str_pad($e+1, 4, '0', STR_PAD_LEFT);
} else {
	$urut 	= "0001";
}

$index 			= $wilker."-".$urut;

$sql = "INSERT INTO members (id, nama, tempat_lahir, tanggal_lahir, alamat, telp, gol_darah, jk, tanggal_pendaftaran)
		VALUES ('$index', '$nama', '$tmp_lahir', '$tgl_lahir', '$alamat', '$telp', '$gol', '$jk', '$date')";

mysqli_query($konek, $sql);
header('location:index.php');

?>