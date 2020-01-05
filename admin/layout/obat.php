                  <div class="form-group">
                    <div class="row">

                      <div class="col-md-5">
                        <select name="obat" id="obat" class="banyak form-control" style="width: 100%;" required>
                        <option value="">-- Pilih Obat --</option>
                          <?php
                            include '../../config/koneksi.php';

                            $sql4    = "SELECT * FROM obat";
                            $result4 = mysqli_query($konek, $sql4);
                            if (mysqli_num_rows($result4) > 0) {
                              while ($row4 = mysqli_fetch_assoc($result4)) {
                                echo "<option value=".$row4['id'].">".$row4['nama']."</option>";
                              }
                            }

                          ?>
                        </select>
                      </div>

                      <div class="col-md-3">
                        <input type="number" class="form-control" name="jml" placeholder="jumlah">  
                      </div>
                      <div class="col-md-3">
                          <select name="obat" id="obat" class="form-control" style="width: 100%;" required>
                            <option value="">-- Satuan --</option>
                              <?php
                                include '../../config/koneksi.php';

                                $sql5    = "SELECT * FROM satuan";
                                $result5 = mysqli_query($konek, $sql5);
                                if (mysqli_num_rows($result5) > 0) {
                                  while ($row5 = mysqli_fetch_assoc($result5)) {
                                    echo "<option value=".$row5['id'].">".$row5['nama']."</option>";
                                  }
                                }

                              ?>
                            </select>
                      </div>

                  </div>
                </div>