<?php
session_start();
if (isset($_SESSION['email'])) {
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>UPT Puskesmas Playen II</title>
	<?php include '../layout/head.php'; ?>
</head>
<body onload="window.print();">
  <div class="invoice">
            <h3 align="center">DAFTAR PASIEN TERDAFTAR</h3><br>
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>No Pasien</th>
                    <th>Nama Pasien</th>
                    <th>No Hp/Telp.</th>
                    <th>Tanggal Pendaftaran</th>
                  </tr>
              </thead>
                 <?php
                  include '../../config/koneksi.php';
                  include '../../config/function.php';

                  $nomor  = 1;

                  $sql    = "SELECT * FROM members ORDER BY id ASC";
                  $result = mysqli_query($konek, $sql);

                  if (mysqli_num_rows($result)>0) {
                        while ($row = mysqli_fetch_assoc($result)){
                          echo "
                            <tr>
                              <td>".$nomor++."</td>
                              <td>".$row['id']."</td>
                              <td>".$row['nama']."</td>
                              <td>".$row['telp']."</td>
                              <td>".date('d F Y', strtotime($row['tanggal_pendaftaran']))."</td>
                            </tr>
                          ";
                        }
                      } else {
                        echo "
                          <tr>
                            <td colspan='8' align='center'>Tidak ada data yang ditemukan sebagai admin.</td>
                          </tr>
                        ";
                      }
                 
                  ?>
              </table>
</div>

<?php include '../layout/script.php'; ?>
</body>
</html>

<?php
} else {
  echo "Anda belum login, silahkan <a href='../../login.php'>Login</a>";
}
?>