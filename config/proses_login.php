<?php
session_start();
include 'koneksi.php';
$email		= $_POST['email'];
$pass		= $_POST['password'];
$ori		= $_POST['password'];

$masuk		= '../config/koneksi.php';

//checking type user
$sql1		= "SELECT * FROM role";
$query1		= mysqli_query($konek, $sql1);
$row1		= mysqli_fetch_assoc($query1);

if(!empty($email) && !empty($pass)) {
	$sql2		= "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
	$query2		= mysqli_query($konek, $sql2);
	$row2 		= mysqli_fetch_assoc($query2);
	if (mysqli_num_rows($query2)>0) {
		$_SESSION['email']		= $email;
		$_SESSION['nama']		= $row2['nama'];
		$_SESSION['id']			= $row2['id'];
		$_SESSION['user']		= $row2['role_id'];
		$_SESSION['photo']		= $row2['photo'];

		//checking for type user
		$user     = $_SESSION['user'];
		$sql3     = "SELECT role.id, role.nama as tipe, user.id as urut, user.nama as nama FROM user INNER JOIN role ON role.id=user.role_id WHERE role_id=$user";
		$query3   = mysqli_query($konek, $sql3);
		$row3     = mysqli_fetch_assoc($query3);
		$_SESSION['tipe']	= $row3['tipe'];

		header('location: ../admin/home/index.php');

	} else {
		echo "Email anda salah";
	}
} else {
	echo "Email dan password anda kosong";
}

?>