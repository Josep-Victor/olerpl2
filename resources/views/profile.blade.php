
<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <h1>PROFILE</h1>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
            <center>
            @php 
                use \App\Models\History;

                $today = \Carbon\Carbon::now('Asia/Jakarta');
                $interval = Auth::user()->created_at->diff($today);
                $berat_badan = Auth::user()->berat_badan;
                $tinggi_badan = Auth::user()->tinggi_badan;
                $hari = $interval->format('%a');
                $name = Auth::user()->name;
            echo "<p>Hai, $name !</p>";
            echo "<p>Terima kasih sudah menggunakan aplikasi kami, ini adalah data akun kamu :)</p>";
            echo "<p>";
                echo "<i class='far fa-calendar-alt' style='font-size:36px'></i>"; 
                echo "<b style='font-size: 24px;''>Kamu telah bergabung selama $hari  hari &#127881;</b>";
            echo "</p>";
            echo "<p>";
                echo "<i class='fas fa-weight' style='font-size:36px'></i>";
                echo "<b style='font-size: 24px;''>Berat badan kamu sekarang $berat_badan kg &#127881;</b>";
            echo "</p>";
            echo "<p>";
                echo "<i class='fas fa-ruler-vertical' style='font-size:36px'></i>";
                echo "<b style='font-size: 24px;'>Tinggi badan kamu sekarang $tinggi_badan cm &#127881;</b>";
            echo "</p>";
            @endphp
            </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
