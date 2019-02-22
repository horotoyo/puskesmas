<?php
session_start();
if (isset($_SESSION['email'])) {
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Invoice Print</title>
	<?php include '../layout/head.php'; ?>
</head>
<body onload="window.print();">
<?php
include '../../config/koneksi.php';
include '../../config/function.php';

$no            = 1;
$index         = 0;

$nomor         = $_SESSION['id_pasien'];
$sql           = "SELECT * FROM records WHERE id_member='$nomor'";
$result        = mysqli_query($konek, $sql);
$row           = mysqli_fetch_assoc($result);

$sql3          = "SELECT * FROM records ORDER BY id DESC LIMIT 1";
$result3       = mysqli_query($konek, $sql3);
$row3          = mysqli_fetch_assoc($result3);
$id_record     = $row3['id'];

$sql4          = "SELECT * FROM record_obat WHERE id_record=$id_record";
$result4       = mysqli_query($konek, $sql4);

?>
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-file-text-o"></i> Nota Rekam Medis
            <small class="pull-right">Date: <?= date('d/m/Y')." ".date('H:i')." WIB"; ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <address>
            No Pasien<br>
            <strong><?= $_SESSION['id_pasien'] ?></strong><br>
            Nama Pasien<br>
            <strong><?= $_SESSION['nama_pasien'] ?></strong><br>
            Tanggal Masuk<br>
            <strong><?= date('d F Y - H:i', strtotime($row['tanggal_masuk']))." WIB"; ?></strong>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <address>
            Keluhan<br>
            <strong><?= $row['keluhan']; ?></strong><br>
            Ambil Pelayanan<br>
            <strong><?= pelayanan($row['id_layanan']) ?></strong><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
         <address>
            Ditangani oleh Dokter<br>
            <strong><?= dokter($row['id_dokter']) ?></strong><br>
            di Ruang<br>
            <strong><?= ruang($row['id_ruang']) ?></strong><br>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama Obat</th>
              <th>Jumlah</th>
              <th>Harga Satuan</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
              <?php
              include '../../config/koneksi.php';

              if (mysqli_num_rows($result4)>0) {
                while ($row4 = mysqli_fetch_assoc($result4)) {
                    echo "
                      <tr>
                          <td>".$no++."</td>
                          <td>".obat($row4['id_obat'])."</td>
                          <td>".$row4['jumlah']." ".satuan($row4['id_satuan'])."</td>
                          <td>Rp ".number_format(harga($row4['id_obat']),'0','0','.')."</td>
                          <td>Rp ".number_format($row4['subtotal'],'0','0','.')."</td>
                      </tr>
                      ";
                }
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Jika ada obat yang rusak atau kadaluarsa bisa hubungi bagian farmasi.
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:57% ">Total :</th>
                <td>Rp <?= number_format($row['tagihan'],'0','0','.') ?> </td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
<?php include '../layout/script.php'; ?>
</body>
</html>

<?php
} else {
  echo "Anda belum login, silahkan <a href='../../login.php'>Login</a>";
}
?>