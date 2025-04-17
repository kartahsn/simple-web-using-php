<div class="mt-5">
    <table class="table table-hover table-dark">
      <tr class="text-center">
        <th>no</th>
        <th>jumlah topup</th>
        <th>tanggal topup</th>
      </tr>
      <?php
        $no = 0;
        $id = $_SESSION['u1d'];
        $query = mysqli_query($con, "select topup,tgl_topup from riwayat_topup where uid=$id");
        while($row = mysqli_fetch_array($query)){
          $no++;
          echo '
          <tr class="text-center">
            <td class="text-center">'.$no.'</td>
            <td>Rp'.number_format($row['topup'], 0).'</td>
            <td>'.$row["tgl_topup"].'</td>
          </tr>';
        }
      ?>
    </table>
</div>