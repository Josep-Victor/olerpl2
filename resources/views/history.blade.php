
<div class="modal fade" id="history" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <h1>HISTORY</h1>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">    
        <center>
            @php
            //gini juga ga baik karena ada logical yang harusnya di controller tapi di view. 
            //maneh bisa pake view compose tapi ribet kalo memang mau ngikutin design pattern laravel
            //atau ga ini kan history nya di modal atau terpisah gitu, pakein ajax jadi history nanti manggil api ke laravel itu sendiri untuk ngambil data aja. ini boleh meringankan sedikit beban erja juga
            $histories = \App\Models\History::where('id_user', Auth::user()->id)->get();
            $jumlah = $histories->count();
            $no = 1;
            @endphp
            <?php 
                if($jumlah >= 1 ){
                    echo"<h5>kamu telah berolahraga selama $jumlah hari, yuk tingkatkan lagi demi tubuh yang sehat :D</h5>";
                    echo "<br>";
                    echo "<table border='1' style='color: #7b2325;'>";
                    echo "<tr>";
                        echo "<th>No.</th>";
                        echo "<th width='100px'>Hari</th>";
                        echo "<th width='200px'>Tanggal diselesaikan</th>";
                    echo "</tr>";
                    foreach($histories as $history){
                    echo "<tr>";
                        echo "<td> $no </td>";
                        echo "<td> $history->hari </td>";
                        echo "<td> $history->date </td>";
                    echo "</tr>";

                    $no++;
                    }
                    echo "</table>";
                } else if ($jumlah == 0){
                    echo"<h5> Kamu belum berolahraga, yuk mulai olahraga dengan mengklik pilihan hari! </h5>";  
                }
            ?>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
