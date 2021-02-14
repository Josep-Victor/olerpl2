
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
            $no = 1;
                    echo"<h5>kamu telah berolahraga selama hari, yuk tingkatkan lagi demi tubuh yang sehat :D</h5>";
                    echo "<br>";
                    echo "<table border='1' style='color: #7b2325;'>";
                    echo "<tr>";
                        echo "<th>No.</th>";
                        echo "<th width='100px'>Hari</th>";
                        echo "<th width='200px'>Tanggal diselesaikan</th>";
                    echo "</tr>";
                    echo "<tr>";
                    foreach($history as $histories){
                        echo "<td> $no </td>";
                        echo "<td> $histories->hari </td>";
                        echo "<td> $histories->date </td>";
                    echo "</tr>";
                    $no++;
                    echo "</table>";
                } 
            @endphp
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
