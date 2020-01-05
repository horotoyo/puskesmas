<?php
session_start();
include '../../config/koneksi.php';
$ID 				= $_POST['id'];
$nama				= $_POST['nama'];
$email				= $_POST['email'];
$password			= $_POST['password'];
$status				= $_POST['status'];
$role				= $_POST['role'];

//insert gambar
$nama_gambar		= $_FILES['gambar']['name'];
$tmp_name			= $_FILES['gambar']['tmp_name'];

$sql1 		= "SELECT * FROM user WHERE id=$ID";
$result1	= mysqli_query($konek, $sql1);
$row		= mysqli_fetch_row($result1);
$hapus		= $row[4];
$sandi		= $row[3];
$del 		= "../../img/gambar/user-img/".$hapus;

//Percabangan jika mengubah gambar atau tidak
if (empty($nama_gambar)) {
	$nama_gambar	= $hapus;
	$ubah			= $nama_gambar;
} else {
	unlink($del);
	//move and rename
	$acak				= rand(1111111, 9999999);
	$ubah				= str_replace($nama_gambar, $acak.".jpg", $nama_gambar);
	move_uploaded_file($tmp_name, "../../img/gambar/user-img/".$ubah);
}

//Percabangan jika mengubah sandi atau tidak
if (empty($password)) {
	$password 		= $sandi;
} else {
	$password		= md5($_POST['password']);
}

$sql2	= "UPDATE user SET 
			nama 		= '$nama',
			email 		= '$email',
			password 	= '$password',
			photo		= '$ubah',
			status		= '$status',
			role_id		= '$role'
			WHERE id 	= '$ID'";

mysqli_query($konek,$sql2);
header('location:index.php');

?>