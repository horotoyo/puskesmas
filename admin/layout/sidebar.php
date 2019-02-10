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
      
      $url    = $_SERVER["PHP_SELF"];
      $exp    = explode("/", $url);
      $get    = $exp[3];
      ?>

            <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>
              <li>
                <a href="../home/">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-user-md"></i>
                  <span>Pegawai</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="../jabatan/"><i class="fa fa-circle-o"></i> Jabatan</a></li>
                  <li><a href="../dokter/"><i class="fa fa-circle-o"></i> Dokter</a></li>
                  <li><a href="../staff/"><i class="fa fa-circle-o"></i> Staff</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-wheelchair"></i>
                  <span>Pasien</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="../pengunjung/"><i class="fa fa-circle-o"></i> Pengunjung</a></li>
                  <li><a href="../member/"><i class="fa fa-circle-o"></i> Member</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-ambulance"></i>
                  <span>Pelayanan</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="../layanan/"><i class="fa fa-circle-o"></i> Jenis Pelayanan</a></li>
                  <li><a href="../ruangan/"><i class="fa fa-circle-o"></i> Ruangan</a></li>
                  <li><a href="../obat/"><i class="fa fa-circle-o"></i> Stock Obat</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-users"></i>
                  <span>Blog</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="../pesan/"><i class="fa fa-circle-o"></i> Pesan</a></li>
                  <li><a href="../user/"><i class="fa fa-circle-o"></i> User</a></li>
                  <li><a href="../role/"><i class="fa fa-circle-o"></i> Role</a></li>
                </ul>
              </li>
            </ul>
      


                     
    ?>
  </section>