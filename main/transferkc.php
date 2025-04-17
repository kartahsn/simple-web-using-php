<div class="mt-5">
    <table class="table table-hover table-dark">
      <tr class="text-center">
        <th>no</th>
        <th>nama</th>
        <th>username</th>
        <th>no hp</th>
        <th>saldo</th>
        <th>transfer</th>
        <th>action</th>
      </tr>
      <?php
        $no = 0;
        $query = mysqli_query($con, "select id,name,username,hp,karcoin from accounts");
        while($row = mysqli_fetch_array($query)){
          $no++;
          echo '
          <tr>
            <td class="text-center">'.$no.'</td>
            <td>'.$row["name"].'</td>
            <td>'.$row["username"].'</td>
            <td class="text-center">'.$row["hp"].'</td>
            <td>Rp'.number_format($row['karcoin'], 0).'</td>
            <form action="" method="post">
              <input type="hidden" name="id" value="'.$row['id'].'">
              <input type="hidden" name="kc" value="'.$row['karcoin'].'">
              <td><input type="text" class="form-control" name="topup" id="topup"></td>
              <td class="text-center"><input type="submit" class="btn btn-success" name="isisaldo" value="Isi saldo"></td>
            </form>
          </tr>';
        }
      ?>
    </table>
</div>
<?php
  if(isset($_POST['isisaldo'])){
    $id = $_POST['id'];
    $kc = $_POST['kc'];
    $topup = $_POST['topup']+$kc;
    mysqli_query($con, "update accounts set karcoin='$topup' where id='$id'");
    mysqli_query($con, "insert into riwayat_topup(`uid`,`topup`) values('$id','$kc')");
    echo '<meta http-equiv="refresh" content="0">';
  }
?>