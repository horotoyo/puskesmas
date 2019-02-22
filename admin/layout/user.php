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

<li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo '../../img/gambar/user-img/'.$row['photo']?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $row['nama']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo '../../img/gambar/user-img/'.$row['photo']?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $row['nama']?>
                  <small>User Puskesmas</small>
                </p>
              </li>

              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <?php
                  $user   = $_SESSION['id'];
                  echo "<a href='../../admin/profil/index.php?id=".$user."' class='btn btn-default btn-flat'>Profile</a> ";
                  ?>
                </div>
                <div class="pull-right">
                  <a href="../../admin/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>