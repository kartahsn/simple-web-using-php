<?php
  include ('../config/connection.php');

  error_reporting(0);
  session_start();

  if($_SESSION['un4m3']){
    header('location: ../main/');
  }
   
  if(isset($_POST['submit'])){

    $name   = $_POST['name'];
    $user   = $_POST['username'];
    $pass   = $_POST['password'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $addr   = $_POST['address'];
    $ip     = $_SERVER['REMOTE_ADDR'];
    $ua     = $_SERVER['HTTP_USER_AGENT'];

    if(!is_numeric($phone)){
      echo "<script>
          alert('WARNING!!! Number tidak sesuai');
          </script>";
    }
    else{
      $cuser = mysqli_query($con, "select username from accounts where username='$user'");
      if(mysqli_num_rows($cuser) > 0){ 
        $row = mysqli_fetch_array($cuser); 
        $aa = $row['username']; 
      }
      $cemail = mysqli_query($con, "select email from accounts where email='$email'");
      if(mysqli_num_rows($cemail) > 0){ 
        $row = mysqli_fetch_array($cemail); 
        $bb = $row['email'];
      } 
      $chp = mysqli_query($con, "select hp from accounts where hp='$phone'");
      if(mysqli_num_rows($chp) > 0){ 
        $row = mysqli_fetch_array($chp); 
        $cc = $row['hp'];
      }
      if($user != $aa && $email != $bb && $phone != $cc){
        $insert = "insert into accounts(`name`,`username`,`password`,`email`,`hp`,`ipaddress`,`uagent`,`address`) values ('$name','$user', md5($pass),'$email','$phone','$ip','$ua', '$addr')";
        if(mysqli_query($con, $insert)){ 
          echo "<script>
            alert('SUCCESS!!! Berhasil mendaftar');
            </script>"; 
          sleep(3);
          header('location: ../login/'); 
        }
      }
      if(isset($aa)){
        $aa = 'Username   : '.$aa.'\n';
      }
      if(isset($bb)){
        $bb = 'Email          : '.$bb.'\n';
      }
      if(isset($cc)){
        $cc = 'Phone         : '.$cc.'\n';
      }
      echo '<script>
            alert("WARNING!!!\n'.
            '==========================\n'.
            $aa.$bb.$cc.
            '==========================\n'.
            'Sudah terdaftar");
            </script>'; 
    }
  } 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DAFTAR</title>
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

    <div class="container mt-5 mb-5 col-sm-4 border bg-dark bg-opacity-10 rounded-3">
      <div class="">
        <form action="" method="post" enctype="multipart/form-data" class="was-validated">
          <div class="p-2">
            <div class="col-sm-12 text-center border-bottom border-3 border-primary">
              <label class="col-sm-12 col-form-label">PENDAFTARAN AKUN</label>
            </div>
            <div class="mb-2 mt-3 row"> 
              <label id="name" class="col-sm-3 col-form-label">Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama anda" minlength="3" maxlength="20" required />
              </div>
            </div>
            <div class="mb-2 row">
              <label id="username" class="col-sm-3 col-form-label">Username</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="username" id="username" placeholder="Nama pengguna" minlength="5" maxlength="15" required />
              </div>
            </div>
            <div class="mb-2 row">
              <label id="email" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" name="email" id="email" placeholder="Example@gmail.com" required />
              </div>
            </div>
            <div class="mb-2 row">
              <label for="password" class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" name="password" id="password" placeholder="Kata sandi" minlength="5" maxlength="32" required />
              </div>
            </div>
            <div class="mb-2 row">
              <label for="phone" class="col-sm-3 col-form-label">Phone</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="08** **** ****" minlength="12" maxlength="13" required />
              </div>
            </div>
            <div class="mb-2 row">
              <label for="address" class="col-sm-3 col-form-label">Address</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="address" id="address" placeholder="Alamat tempat anda tinggal" minlength="4" maxlength="100" required />
              </div>
            </div>
            <div class="mb-2">
              <div class="col-sm-12">
                <input type="submit" class="btn-outline-dark form-control bg-primary text-white" name="submit" id="submit" value="Buat akun" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
