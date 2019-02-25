<?php
session_start();
include '../../config/koneksi.php';

$nama				= $_POST['nama'];
$email				= $_POST['email'];
$password			= md5($_POST['password']);
$role 				= $_POST['role'];
$status				= $_POST['status'];


//Input files gambar
$nama_gambar		= $_FILES['foto']['name'];
$tmp_name			= $_FILES['foto']['tmp_name'];
$size_gambar		= $_FILES['foto']['size'];
$ext 				= pathinfo($nama_gambar, PATHINFO_EXTENSION);


$acak				= rand(1111111, 9999999);
$ubah				= str_replace($nama_gambar, $acak.".jpg", $nama_gambar);

move_uploaded_file($tmp_name, "../../img/gambar/user-img/".$ubah);

$sql = "INSERT INTO user (nama, email, password, photo, status, role_id)
		VALUES ('$nama', '$email', '$password', '$ubah', '$status', '$role')";
mysqli_query($konek,$sql);
header('location:index.php');

?>