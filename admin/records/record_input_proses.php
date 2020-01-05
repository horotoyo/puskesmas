<?php
session_start();
include '../../config/koneksi.php';

$nomor			= $_POST['nomor'];
$date 			= date("Y-m-d H:i:s");
$keluhan		= $_POST['keluhan'];
$plyn			= $_POST['plyn'];
$dokter			= $_POST['dokter'];
$ruang			= $_POST['ruang'];

$obat			= $_POST['obat'];
$jumlah			= $_POST['jml'];
$satuan			= $_POST['satuan'];
$count 			= count($obat);

$sql3 = "INSERT INTO records (id_member, tanggal_masuk, keluhan, id_layanan, id_ruang, id_dokter)
		VALUES ('$nomor', '$date', '$keluhan', '$plyn', '$ruang', '$dokter')";
mysqli_query($konek,$sql3);

$sql4 			= "SELECT * FROM records ORDER BY id DESC LIMIT 1";
$result4 		= mysqli_query($konek, $sql4);
$row4 			= mysqli_fetch_assoc($result4);
$id_record		= $row4['id'];

for ($i=0; $i<$count; $i++) {
	$sql1 		= "SELECT * FROM obat WHERE id=$obat[$i]";
	$result1	= mysqli_query($konek, $sql1);
	$row1 		= mysqli_fetch_row($result1);
	$subtotal	= $jumlah[$i]*$row1[5];

	$sql2 		= "INSERT INTO record_obat (id_record, id_obat, jumlah, id_satuan, subtotal)
				   VALUES ('$id_record', '$obat[$i]', '$jumlah[$i]', '$satuan[$i]', '$subtotal')";
	mysqli_query($konek, $sql2);
}

header('location:record_nota.php');

?>