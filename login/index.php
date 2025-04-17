<?php
  include ('../config/connection.php');
  error_reporting(0);
  session_start();

  if($_SESSION['un4m3']){
    header('location: ../main/?dashboard');
  }

  if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass  = $_POST['password'];

    $query = mysqli_query($con, "select id,name,username,email,mimin,hp,address,register from accounts where username='$user' and password=md5('$pass')");
    if(mysqli_num_rows($query)>0){
      $user = mysqli_fetch_array($query);
      $_SESSION['u1d']      = $user['id'];
      $_SESSION['n4m3']     = $user['name'];
      $_SESSION['un4m3']    = $user['username'];
      $_SESSION['em41l']    = $user['email'];
      $_SESSION['m1m1n']    = $user['mimin'];
      $_SESSION['hp']       = $user['hp'];
      $_SESSION['addr355']  = $user['address'];
      $_SESSION['r3g15t3r'] = $user['register'];
      header('location: ../main/?dashboard');
    }
    else{
      echo "<script>alert('WARNING!!! Akun tidak terdaftar');</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MASUK</title>
    <?php
      include('../fmwork.php');
    ?>
  </head>
  <body class="bg-dark bg-opacity-10">
    <header>
      <?php
        include('../menu.php');
      ?>
    </header>

    <div class="container mt-5 col-sm-4 border bg-dark bg-opacity-10 rounded-3">
      <div class="">
        <form action="" method="post" enctype="multipart/form-data" class="was-validated">
          <div class="p-2">
            <div class="col-sm-12 text-center border-bottom border-3 border-primary">
              <label class="col-sm-12 col-form-label">MASUK</label>
            </div>

            <div class="mb-2 row mt-3">
              <label id="username" class="col-sm-3 col-form-label">Username</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="username" id="username" placeholder="Nama pengguna" minlength="5" maxlength="15" required />
              </div>
            </div>
            <div class="mb-2 row">
              <label for="password" class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" name="password" id="password" placeholder="Kata sandi" minlength="5" maxlength="32" required />
              </div>
            </div>
            <div class="mb-2">
              <div class="col-sm-12">
                <input type="submit" class="btn-outline-dark form-control bg-primary text-white" name="submit" id="submit" value="Masuk" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
