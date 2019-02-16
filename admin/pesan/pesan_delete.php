<?php
include '../../config/koneksi.php';

$ID    		= $_GET['id'];

$sql = "DELETE FROM pesan WHERE id='$ID'";
mysqli_query($konek,$sql);
header('location:index.php?');

?>