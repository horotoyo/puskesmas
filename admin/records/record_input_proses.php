<?php
session_start();
include '../../config/koneksi.php';

$nomor			= $_SESSION['id_pasien'];
$date 			= date("Y-m-d H:i:s");
$keluhan		= $_POST['keluhan'];
$plyn			= $_POST['plyn'];
$dokter			= $_POST['dokter'];
$ruang			= $_POST['ruang'];

$obat			= $_POST['obat'];
$jumlah			= $_POST['jml'];
$satuan			= $_POST['satuan'];
$no 			= 0;

$break1 		= implode("-", $obat);
$break2			= implode(",", $jumlah);
$break3			= implode(",", $satuan);

$break4			= explode("-", $break1);

$a 			= "SELECT * FROM obat WHERE id=$obat[0]";
$b 			= mysqli_query($konek, $a);
$c 			= mysqli_fetch_assoc($b);
$satu 		= $c['harga'];

print_r($satu);
// echo $break1;
// foreach ($c as $harga) {
// 	echo $harga;
// }
// print_r($c);

exit();
$sql = "INSERT INTO records (id_member, tanggal_masuk, keluhan, id_layanan, id_ruang, id_dokter, id_obat, id_satuan, jumlah, tagihan)
		VALUES ('$nomor', '$date', '$keluhan', '$plyn', '$ruang', '$dokter', '$break1', '$break3', , )";
mysqli_query($konek,$sql);
header('location:index.php');

?>