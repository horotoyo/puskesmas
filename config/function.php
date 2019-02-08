<?php
include 'koneksi.php';

function namaUser($id) {
	global $konek;
	$name    = "SELECT nama FROM satuan WHERE id=".$id;
	$hasil   = mysqli_query($konek, $name);
	$kolom   = mysqli_fetch_assoc($hasil);
	return $kolom['nama'];
}

function jika($status) {
	if ($status==0) {
		return "<span class='label label-success' disabled>Tersedia</span>";
	} else {
		return "<span class='label label-warning' disabled>Kosong</span>";
	}
}


?>