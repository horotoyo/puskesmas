<?php
$server		= "localhost";
$user		= "root";
$pass		= "123";
$db			= "puskesmas";

$konek = mysqli_connect($server, $user, $pass, $db);
if (!$konek) {
	die('koneksi gagal' . mysqli_error());
} 
//else {echo "berhasil";}

?>