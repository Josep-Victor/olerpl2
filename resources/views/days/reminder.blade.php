        <div id="reminderModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <center>
                <div class="modal-header">
                  <h1>REMINDER</h1>
                </div>
                <div class="modal-body">
                    <?php
                    $today = \Carbon\Carbon::now('Asia/Jakarta');
                    $interval = Auth::user()->created_at->diff($today);
                    $hari = $interval->format('%a');

                    $jumlah = $history->count();
                    $user = Auth::user()->name;
                    if ($jumlah == 0 && $hari == 0){
                      echo "<p> Selamat Datang di OLE</p>";
                      echo "<p> Untuk memulai, silahkan pilih hari terlebih dahulu(disarankan mulai dari hari 1)</p>";
                    }  else if($jumlah > 0 && $hari == 0){
                        echo "<p> Selamat datang kembali, $user </p>";
                      foreach($last_date as $last_dates){
                        echo "<p> Kamu terakhir berolahraga pada $last_dates->date </p>";
                      }
                      foreach($last_day as $last_days){
                        echo "<p> dan kamu terakhir menyelesaikan olahraga pada $last_days->hari </p>";
                      }
                    }else if ($jumlah == 0 && $hari > 0){
                      echo "<p> Selamat datang kembali $user </p>";
                      echo "<p> Silahkan pilih hari terlebih dahulu untuk memulai berolahraga</p>";
                    } else if ($jumlah !=0 && $hari != 0){
                        echo "<p> Selamat datang kembali, $user </p>";
                      foreach($last_date as $last_dates){
                        echo "<p> Kamu terakhir berolahraga pada $last_dates->date </p>";
                      }
                      foreach($last_day as $last_days){
                        echo "<p> dan kamu terakhir menyelesaikan olahraga pada $last_days->hari </p>";
                      }
                  }
                    ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </center>
            </div>
          </div>