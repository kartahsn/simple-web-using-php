<div class="row text-center">
  <?php
    $query = mysqli_query($con, "select pname,pdeskripsi,pprice,pcode from product");
    while($row = mysqli_fetch_array($query)){
    echo '<div class="col-sm-4 pt-sm-3">
            <div class="card">
              <img class="card-img-top" src="../main/imgtemp/'.$row["pcode"].'.jpg" alt="Card image" style="width: 100%" />
              <div class="card-body">
                <h4 class="h5">'.$row["pname"].'</h4>
                <span class="card-title">'.$row["pdeskripsi"].'</span><hr />
                <span class="btn disabled border-0">Rp'.$row["pprice"].'</span>
                <div class="row justify-content-between">
                  <div class="col justify-content-start">
                    <a href="#" class="btn btn-dark bi-eye"> Demo</a>
                  </div>
                  <div class="col justify-content-end">
                    <a href="#" class="btn btn-success bi-cart-dash"> Bayar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>';
    }
  ?>
</div>
