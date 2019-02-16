<?php
include 'koneksi.php';

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


?>