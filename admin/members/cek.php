<?php

//input index family DEPAN
$a 		= 1;

$sql    = "SELECT * FROM jabatan";
$result = mysqli_query($konek, $sql);

if (mysqli_num_rows($result)>0) {
for ($i=0; $i<20 ; $i++) { 
	echo str_pad($a++, 3, '0', STR_PAD_LEFT)."<br>";
}
} else {
	echo "error";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
              <div class="modal fade" id="modal-default">
                <div class="modal-dialog" style="width: 650px; margin: 80px 20px 10px 430px;">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Data Pasien</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <table>
                          <tr>
                            <td style="width: 100px"><label>No Pasien</label></td>
                            <td>:</td>
                            <td><?=$row['nama']?></td>
                          </tr>
                          <tr>
                            <td><label>Nama Pasien</label></td>
                            <td>:</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><label>TTL</label></td>
                            <td>:</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><label>Alamat</label></td>
                            <td>:</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><label>No. HP/Telp</label></td>
                            <td>:</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><label>Gol Darah</label></td>
                            <td>:</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><label>Jenis Kelamin</label></td>
                            <td>:</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><label>Tgl Registrasi</label></td>
                            <td>:</td>
                            <td></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-success">Edit Data</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
</body>
</html>