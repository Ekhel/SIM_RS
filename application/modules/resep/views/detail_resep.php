<div class="project-details-wrap shadow-reset">
  <div class="row">
    <div class="col-md-12">
      <table class="small table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>ticket</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $total = 0;
          foreach($detail as $item){
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$item->nama_barang."</td>";
            echo "<td>".$item->eticket."</td>";
            echo "<td>".number_format($item->harga)."</td>";
            echo "</tr>";
            $total = $total+$item->harga;
          }
          echo "<tr class='bg-success'>";
          echo "<td colspan='3'><strong>Total</strong></td>";
          echo "<td><strong>".number_format($total)."</strong></td>";
          echo "</tr>";
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
