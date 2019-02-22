<?php
session_start();
if (isset($_SESSION['email'])) {
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rekam Medis | Input</title>
 <?php
 include '../layout/head.php';
 ?>
</head>
<body class="hold-transition skin-green fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <?php
    include '../layout/header.php';
    ?>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
     <?php
     include '../layout/sidebar.php';
     ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../home/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php"> Rekam Medis</a></li>
        <li class="active">Input Rekam Medis</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Input Rekam Medis</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="record_input_proses.php" method="POST"">
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>No Pasien</label>
                    <div class="form-control"><?= $_SESSION['id_pasien'] ?></div>
                    <input type="hidden" name="nomor" value="<?= $_SESSION['id_pasien'] ?>">
                  </div>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group">
                      <label>Nama Pasien</label>
                    <div class="form-control"><?= $_SESSION['nama_pasien'] ?></div>
                  </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="keluhan">Keluhan</label>
                  <input type="text" class="form-control" id="keluhan" name="keluhan" placeholder="Sakit Kepala, Muntah muntah, dll" required>
                </div>

                <div class="form-group">
                  <label for="plyn">Pelayanan</label>
                  <select name="plyn" id="plyn" class="form-control" required>
                  <option value="">-- Pilih Pelayanan --</option>
                    <?php
                      include '../../config/koneksi.php';
                      $sql1    = "SELECT * FROM layanan";
                      $result1 = mysqli_query($konek, $sql1);
                      if (mysqli_num_rows($result1) > 0) {
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                          echo "<option value=".$row1['id'].">".$row1['nama']."</option>";
                        }
                      }
                    ?>
                </select>
                </div>

                <div class="form-group">
                  <label for="dokter">Dokter</label>
                  <select name="dokter" id="dokter" class="form-control" required>
                  <option value="">-- Pilih Dokter --</option>
                    <?php
                      include '../../config/koneksi.php';
                      $sql2    = "SELECT * FROM dokter";
                      $result2 = mysqli_query($konek, $sql2);
                      if (mysqli_num_rows($result2) > 0) {
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                          echo "<option value=".$row2['id'].">".$row2['nama']."</option>";
                        }
                      }
                    ?>
                </select>
                </div>

                <div class="form-group">
                  <label for="ruang">Ruangan</label>
                  <select name="ruang" id="ruang" class="form-control" required>
                  <option value="">-- Pilih Ruangan --</option>
                    <?php
                      include '../../config/koneksi.php';
                      $sql3    = "SELECT * FROM ruangan";
                      $result3 = mysqli_query($konek, $sql3);
                      if (mysqli_num_rows($result3) > 0) {
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                          echo "<option value=".$row3['id'].">".$row3['nama']."</option>";
                        }
                      }
                    ?>
                </select>
                </div>

              </div>

              <div class="col-md-6 bungkus">
                <div class="form-group">
                <label for="obat" style="width: 100%">Obat</label>
                <?php include 'record_obat.php'; ?>
              </div>

                              
              </div>
              <div class="col-md-6">
              <a id="addobat" class="btn btn-success pull-left"><i class="fa fa-plus-circle"></i> Tambah Obat</a>
              </div>
              
            </div>
        
          <div class="box-footer">
            <a type="reset" class="btn btn-default" href="index.php">Cancel</a>
            <button type="submit" class="btn btn-success pull-right">Input</button>
          </div>

          </div>
        </form>           
      </div>
       <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
include '../layout/footer.php';
?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>


</div>
<!-- ./wrapper -->

<script src="../../js/jquery-3.3.1.js"></script>
<?php include 'select.php'; ?>
<script type="text/javascript">
  $(document).ready(function(){

    load_select2();
    $("#addobat").click(function(){
      $(".bungkus").append("<div class='form-group'><div class='row'><div class='col-md-5'><select name='obat[]' class='banyak form-control' style='width: 100%;' required><option value=''>-- Pilih Obat --</option><?php include '../../config/koneksi.php' ;$sql4    = 'SELECT * FROM obat'; $result4 = mysqli_query($konek, $sql4); if (mysqli_num_rows($result4) > 0) {while ($row4 = mysqli_fetch_assoc($result4)) {echo '<option value='.$row4['id'].'>'.$row4['nama'].'</option>';}}?></select></div><div class='col-md-3'><input type='number' class='form-control' name='jml[]' placeholder='jumlah'>  </div><div class='col-md-3'><select name='satuan[]' class='form-control' style='width: 100%;' required><option value=''>-- Satuan --</option><?php include '../../config/koneksi.php'; $sql5    = 'SELECT * FROM satuan'; $result5 = mysqli_query($konek, $sql5); if (mysqli_num_rows($result5) > 0) { while ($row5 = mysqli_fetch_assoc($result5)) { echo '<option value='.$row5['id'].'>'.$row5['nama'].'</option>';}}?></select></div></div></div>");
        load_select2();
    });

  });
</script>
<?php
include '../layout/script.php';
?>
</body>
</html>

<?php
} else {
  echo "Anda belum login, silahkan <a href='../../login.php'>Login</a>";
}
?>