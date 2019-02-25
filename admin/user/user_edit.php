<?php
session_start();
if (isset($_SESSION['email'])) {
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit | User</title>
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
        Edit User
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://localhost/agency/admin/home/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <?php
            include '../../config/koneksi.php';
            include '../../config/function.php';

            $ID       = $_GET['id'];
            $sql      = "SELECT * FROM user WHERE id=$ID";
            $result   = mysqli_query($konek, $sql);
            $row      = mysqli_fetch_assoc($result);
            $status   = $row['role_id'];

            $url      = "http://localhost/adminlte/gambar/user-img/";
            ?>
           <form class="form-horizontal" action="user_edit_proses.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $ID; ?>">
                  <label for="nama" class="col-sm-2 control-label">Nama User</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" value="<?= $row['nama'] ?>" name="nama" required>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" value="<?= $row['email'] ?>" name="email" required>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="foto" class="col-sm-2 control-label">Photo Profile</label>
                  <div class="col-sm-10">
                  <img src="<?= '../../img/gambar/user-img/'.$row['photo']?>" width="150px"><br><br>
                  <input type="file" id="foto" name="foto"></input>
                  JPG, JPEG, PNG format
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group input-group-sm">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                    <?php
                    if ($status == 0) {
                      echo "
                            <label style='margin-left: 15px'>
                              <div class='iradio_flat-green' aria-checked='false' aria-disabled='false' style='position: relative;'><input type='radio' checked name='status' id='0' class='flat-red' style='position: absolute; opacity: 0;' value='0'><ins class='iCheck-helper' style='position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;'></ins></div>
                            </label>
                            <label for='0' style='font-weight: normal; margin-right: 20px; margin-bottom: 0px'>
                              Not-Verified
                            </label>
                            <label>
                              <div class='iradio_flat-green' aria-checked='true' aria-disabled='false' style='position: relative;'><input type='radio' name='status' id='1' class='flat-red' style='position: absolute; opacity: 0;' value='1'><ins class='iCheck-helper' style='position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;'></ins></div>
                            </label>
                            <label for='1' style='font-weight: normal; margin-bottom: 0px'>
                              Verified
                            </label>
                           ";
                    } else {
                      echo "
                            <label style='margin-left: 15px'>
                              <div class='iradio_flat-green' aria-checked='false' aria-disabled='false' style='position: relative;'><input type='radio' name='status' id='0' class='flat-red' style='position: absolute; opacity: 0;' value='0'><ins class='iCheck-helper' style='position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;'></ins></div>
                            </label>
                            <label for='0' style='font-weight: normal; margin-right: 20px; margin-bottom: 0px'>
                              Not-Verified
                            </label>
                            <label>
                              <div class='iradio_flat-green' aria-checked='true' aria-disabled='false' style='position: relative;'><input type='radio' checked name='status' id='1' class='flat-red' style='position: absolute; opacity: 0;' value='1'><ins class='iCheck-helper' style='position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;'></ins></div>
                            </label>
                            <label for='1' style='font-weight: normal; margin-bottom: 0px'>
                              Verified
                            </label>
                           ";
                    }
                    ?>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group input-group-sm">
                    <label for="role" class="col-sm-2 control-label">Role</label>
                    <div class="col-sm-10">
                      <select name="role" id="role" class="form-control" required="">
                        <option value="<?= $row['role_id'] ?> "><?= role($row['role_id']) ?></option>
                          <?php
                            include '../../config/koneksi.php';
                            
                            $sql1  = "SELECT * FROM role";
                            $result1 = mysqli_query($konek, $sql1);
                            if (mysqli_num_rows($result1) > 0) {
                              while ($row1 = mysqli_fetch_assoc($result1)) {
                                echo "<option value=".$row1['id'].">".$row1['nama']."</option>";
                              }
                            }
                          ?>
                      </select>
                    </div>
                </div>
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <a type="reset" class="btn btn-default" href="index.php">Cancel</a>
                <button type="submit" class="btn btn-success pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
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