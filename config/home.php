<?php
include '../../config/koneksi.php';

function dokter($id) {
	global $konek;
	$sql      = "SELECT COUNT(*) FROM dokter";
	$result   = mysqli_query($konek, $sql);
	$row      = mysqli_fetch_row($result);
	return $row[0];
}

function staff($id) {
	global $konek;
	$sql      = "SELECT COUNT(*) FROM staff";
	$result   = mysqli_query($konek, $sql);
	$row      = mysqli_fetch_row($result);
	return $row[0];
}

function ruang($id) {
	global $konek;
	$sql      = "SELECT COUNT(*) FROM ruangan";
	$result   = mysqli_query($konek, $sql);
	$row      = mysqli_fetch_row($result);
	return $row[0];
}

function layanan($id) {
	global $konek;
	$sql      = "SELECT COUNT(*) FROM layanan";
	$result   = mysqli_query($konek, $sql);
	$row      = mysqli_fetch_row($result);
	return $row[0];
}
?>