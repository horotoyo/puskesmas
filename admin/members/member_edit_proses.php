<?php
session_start();
include '../../config/koneksi.php';

$ID 			= $_POST['id'];
$take			= substr($ID, 0, 3);
$wilker 		= $_POST['wilker'];

//ambil data dari databases
$a  	    	= "SELECT max(id) FROM members WHERE id LIKE '%$wilker%'";
$b 				= mysqli_query($konek, $a);
$c 				= mysqli_fetch_row($b);
$d 				= $c[0];
$e 				= substr($d, 4);

//mengecek data didatabases
$query 			= "SELECT * FROM members WHERE id LIKE '%$wilker%'";
$result 		= mysqli_query($konek, $query);

if ((!empty($result)) AND ($take!=$wilker)) {
	$urut	= str_pad($e+1, 4, '0', STR_PAD_LEFT);
	$index 	= $wilker."-".$urut;
} elseif ((empty($result)) AND ($take==$wilker)) {
	$index 	= $wilker."-0001";
} elseif ((!empty($result)) AND ($take!==$wilker)) {
	$index	= $ID;
} elseif ((!empty($result)) AND ($take==$wilker) ){
	$index	= $ID;
}
	
// echo $index;
// exit();

$nama			= $_POST['nama'];
$tmp_lahir		= $_POST['tmp_lahir'];
$tgl_lahir		= $_POST['tgl_lahir'];
$alamat			= $_POST['alamat'];
$telp			= $_POST['telp'];
$gol			= $_POST['gol'];
$jk				= $_POST['jk'];

// echo $ID."<br>".$nama."<br>".$tmp_lahir."<br>".$tgl_lahir."<br>".$alamat."<br>".$telp."<br>".$gol."<br>".$jk;
// exit();

$sql	= "UPDATE members SET 
			id 							= '$index',
			nama 						= '$nama',
			tempat_lahir				= '$tmp_lahir',
			tanggal_lahir				= '$tgl_lahir',
			alamat						= '$alamat',
			telp						= '$telp',
			gol_darah					= '$gol',
			jk 				            = '$jk'
			WHERE id 					= '$ID'";

mysqli_query($konek,$sql);
header('location:index.php');

?>