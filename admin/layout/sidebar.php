<?php
$server   = "localhost";
$user   = "root";
$pass   = "123";
$db     = "puskesmas";

$konek = mysqli_connect($server, $user, $pass, $db);
if (!$konek) {
  die('koneksi gagal' . mysqli_error());
} 
//else {echo "berhasil";}

$ID     = $_SESSION['id'];
$sql    = "SELECT * FROM user WHERE id='$ID'";
$result = mysqli_query($konek, $sql);
$row    = mysqli_fetch_assoc($result);

?>
<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo 'http://localhost/agency/img/gambar/user-img/'.$row['photo']?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $row['nama']?></p>
          <a href="#">
            <?php
            $role    = $_SESSION['user'];

            if ($role == 1) {
              echo "<i class='fa fa-circle text-default'></i>";
            } elseif($role == 2 ) {
              echo "<i class='fa fa-circle text-primary'></i>";
            } else {
              echo "<i class='fa fa-circle text-success'></i>";
            }
            ?>
            <?= $_SESSION['tipe'] ?></a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>

      <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>
              <li>
                <a href="http://localhost/agency/admin/home/">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
              <li>
                <a href="http://localhost/agency/admin/obat/">
                  <i class="fa fa-medkit"></i> <span>Obat</span>
                </a>
              </li>
            </ul>               
    ?>
  </section>