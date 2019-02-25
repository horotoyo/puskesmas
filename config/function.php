<?php
include 'koneksi.php';

function user($id) {
	global $konek;
	$sql   		= "SELECT nama FROM members WHERE id='$id'";
	$result   	= mysqli_query($konek, $sql);
	$row	   	= mysqli_fetch_assoc($result);
	return $row['nama'];
}


function jabatan($id) {
	global $konek;
	$sql   		= "SELECT nama FROM jabatan WHERE id=".$id;
	$result   	= mysqli_query($konek, $sql);
	$row	   	= mysqli_fetch_assoc($result);
	return $row['nama'];
}

function pelayanan($id) {
	global $konek;
	$sql   		= "SELECT nama FROM layanan WHERE id=".$id;
	$result   	= mysqli_query($konek, $sql);
	$row	   	= mysqli_fetch_assoc($result);
	return $row['nama'];
}

function ruang($id) {
	global $konek;
	$sql   		= "SELECT nama FROM ruangan WHERE id=".$id;
	$result   	= mysqli_query($konek, $sql);
	$row	   	= mysqli_fetch_assoc($result);
	return $row['nama'];
}

function dokter($id) {
	global $konek;
	$sql   		= "SELECT nama FROM dokter WHERE id=".$id;
	$result   	= mysqli_query($konek, $sql);
	$row	   	= mysqli_fetch_assoc($result);
	return $row['nama'];
}


function role($id) {
	global $konek;
	$sql   		= "SELECT nama FROM role WHERE id=".$id;
	$result   	= mysqli_query($konek, $sql);
	$row	   	= mysqli_fetch_assoc($result);
	return $row['nama'];
}

function satuan($id) {
	global $konek;
	$sql   		= "SELECT nama FROM satuan WHERE id=".$id;
	$result   	= mysqli_query($konek, $sql);
	$row	   	= mysqli_fetch_assoc($result);
	return $row['nama'];
}

function obat($id) {
	global $konek;
	$sql   		= "SELECT nama FROM obat WHERE id='$id'";
	$result   	= mysqli_query($konek, $sql);
	$row	   	= mysqli_fetch_assoc($result);
	return $row['nama'];
}

function harga($id) {
	global $konek;
	$sql   		= "SELECT harga FROM obat WHERE id='$id'";
	$result   	= mysqli_query($konek, $sql);
	$row	   	= mysqli_fetch_assoc($result);
	return $row['harga'];
}


function job($status) {
	if ($status==1) {
		return "Staff";
	} elseif ($status==2) {
		return "Tenaga Medis";
	} else {
		return "Tukang";
	}
}

function akun($status) {
	if ($status==0) {
		return "<span class='label label-danger' disabled><em>not-verified</em></span>";
	} else {
		return "<span class='label label-success' disabled><em>verified</em></span>";
	}
}

function jika($status) {
	if ($status==0) {
		return "<span class='label label-success' disabled>Tersedia</span>";
	} else {
		return "<span class='label label-warning' disabled>Kosong</span>";
	}
}

function kalau($status) {
	if ($status==0) {
		return "<em>Tersedia</em>";
	} else {
		return "<em>Kosong</em>";
	}
}


?>