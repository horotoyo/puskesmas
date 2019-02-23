<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo '../../img/gambar/user-img/'.$row['photo']?>" class="img-circle" alt="User Image">
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

      <?php
      include '../../config/koneksi.php';
      
      $url    = $_SERVER['PHP_SELF'];
      $exp    = explode("/", $url);
      $get    = $exp[3];
      ?>

            <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>
              <li class="<?php if($get === "home") {echo "active";} else {echo "";}?>">
                <a href="../home/">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
              <li class="<?php if($get === "tipe" OR $get === "dokter" OR $get === "staff") {echo "treeview active menu-open";} else {echo "treeview";}?>">
                <a href="#">
                  <i class="fa fa-user-md"></i>
                  <span>Kepegawaian</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="<?php if($get === "tipe") {echo "active";} else {echo "";}?>"><a href="../tipe/"><i class="fa fa-circle-o"></i> Jabatan</a></li>
                  <li class="<?php if($get === "dokter") {echo "active";} else {echo "";}?>"><a href="../dokter/"><i class="fa fa-circle-o"></i> Dokter</a></li>
                  <li class="<?php if($get === "staff") {echo "active";} else {echo "";}?>"><a href="../staff/"><i class="fa fa-circle-o"></i> Staff</a></li>
                </ul>
              </li>
              <li class="<?php if($get === "members" OR $get === "records") {echo "treeview active menu-open";} else {echo "treeview";}?>">
                <a href="#">
                  <i class="fa fa-wheelchair"></i>
                  <span>Pasien</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="<?php if($get === "members") {echo "active";} else {echo "";}?>"><a href="../members/"><i class="fa fa-circle-o"></i> Data Pasien</a></li>
                  <li class="<?php if($get === "records") {echo "active";} else {echo "";}?>"><a href="../records/"><i class="fa fa-circle-o"></i> Rekam Medis</a></li>
                </ul>
              </li>
              <li class="<?php if($get === "layanan" OR $get === "ruangan" OR $get === "obat" OR $get === "satuan") {echo "treeview active menu-open";} else {echo "treeview";}?>">
                <a href="#">
                  <i class="fa fa-ambulance"></i>
                  <span>Pelayanan</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="<?php if($get === "layanan") {echo "active";} else {echo "";}?>"><a href="../layanan/"><i class="fa fa-circle-o"></i> Jenis Pelayanan</a></li>
                  <li class="<?php if($get === "ruangan") {echo "active";} else {echo "";}?>"><a href="../ruangan/"><i class="fa fa-circle-o"></i> Ruangan</a></li>
                  <li class="<?php if($get === "obat" OR $get === "satuan") {echo "active";} else {echo "";}?>"><a href="../obat/"><i class="fa fa-circle-o"></i> Stock Obat</a></li>
                </ul>
              </li>
              <li class="<?php if($get === "pesan") {echo "active";} else {echo "";}?>">
                <a href="../pesan/">
                  <i class="fa fa-envelope"></i> <span>Mailbox</span>
                </a>
              </li>
              <li class="<?php if($get === "user" OR $get === "role") {echo "treeview active menu-open";} else {echo "treeview";}?>">
                <a href="#">
                  <i class="fa fa-globe"></i>
                  <span>Blog</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="<?php if($get === "user") {echo "active";} else {echo "";}?>"><a href="../user/"><i class="fa fa-circle-o"></i> User</a></li>
                  <li class="<?php if($get === "role") {echo "active";} else {echo "";}?>"><a href="../role/"><i class="fa fa-circle-o"></i> Role</a></li>
                </ul>
              </li>
            </ul>
  </section>