        <div id="reminderModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1>REMINDER</h1>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <center>
                    <?php
                    $today = \Carbon\Carbon::now('Asia/Jakarta');
                    $interval = Auth::user()->created_at->diff($today);
                    $hari = $interval->format('%a');

                    $jumlah = $history->count();
                    $user = Auth::user()->name;
                    if ($jumlah == 0 && $hari == 0){
                      echo "<p> Selamat Datang di OLE</p>";
                      echo "<p> Untuk memulai, silahkan pilih hari terlebih dahulu(disarankan mulai dari hari 1)</p>";
                    }  else if ($jumlah == 0 && $hari != 0){
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
                 </center>
                </div>
                <div class="modal-footer">
                </div>
              </div>
          
            </div>
          </div>