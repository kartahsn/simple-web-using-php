<?php
  include('../config/connection.php');
  include('forgotpassword.php');

  session_start();

  if(!$_SESSION['un4m3']){
    header('location:../');
  }

  $un4m3 = $_SESSION['un4m3'];
  $query = mysqli_query($con, "select karcoin from accounts where username='$un4m3'");
  if(mysqli_num_rows($query) > 0){
    $user     = mysqli_fetch_array($query);
    $k4rc01n  = $_SESSION['k4rc01n']    = $user['karcoin'];
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php 
      if(isset($_GET['profile'])){
        echo "<title>PROFILE</title>";
      }
      if(isset($_GET['dashboard'])){
        echo "<title>DASHBOARD</title>";
      }
      include('../fmwork.php');   
    ?>
  </head>

  <body class="bg-dark bg-opacity-10">
    <header>
      <nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand fw-semibold" href="../main/?dashboard" title="HOME"></i> UCAPIN</a>
          <a class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" aria-expanded="false">
            <span class="bi-list text-white"></span>
          </a>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link fw-semibold" href="../main/?chart"><i class="bi-cart-dash"> </i>Keranjang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-semibold" href=""><i class="bi-card-heading"> </i>Kartuku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-semibold" href=""><i class="bi-bank"> </i>Isi saldo</a>
              </li>
              <?php
                if($_SESSION['m1m1n'] > 0){
                  echo '<li class="nav-item">
                    <a class="nav-link fw-semibold" href="../main/?transfer"><i class="bi-cash-coin"> </i>Kirim Saldo</a>
                    </li>';
                }
              ?>
            </ul>
          </div>
          <div class="collapse navbar-collapse justify-content-end me-3 me-md-0" id="collapsibleNavbar">
            <div class="align-content-between ">
              <div class="btn-group w-100 justify-content-between">
                <div class="justify-content-start">
                  <span class="navbar text-white"><?php echo $_SESSION['n4m3']." | Rp".number_format($_SESSION['k4rc01n'],0,',','.'); ?></span>
                </div>
                <div class="justify-content-end">
                  <a type="button" class="navbar border-0" data-bs-toggle="dropdown" aria-expanded="true">
                    <i class="bi-person-circle ps-2 navbar-nav h4 text-white" title="Profil"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a type="button" class="dropdown-item" href="../main/?profile"><i class="bi-person"> </i>Profil</a>
                    </li>
                    <li>
                      <a type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi-key"> </i>Ganti kata sandi</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../main/?riwayat-topup"><i class="bi-receipt"> </i>Riwayat topup</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../main/?not-found"><i class="bi-bug"> </i>Lapor</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../main/?not-found"><i class="bi-info"> </i>Tentangku</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../config/logout.php"><i class="bi-power"> </i>Keluar</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main class="pt-5 pb-5">
      <div class="pt-5">
        <div class="row">
          <div class="col-sm-2">
            <!--  -->
          </div>
          <div class="col-sm-8 container-fluid">
            <?php
              if(isset($_GET['profile'])){
                include('profil.php');
              }
              if(isset($_GET['transfer'])){
                include('transferkc.php');
              }
              if(isset($_GET['riwayat-topup'])){
                include('riwayat_topup.php');
              }
              if(isset($_GET['chart']) || isset($_GET['dashboard'])){
                include('product.php');
              }
              if(isset($_GET['not-found'])){
                echo '<div class="d-flex pt-5 justify-content-center">
                  <span class="h1">comingzoon</span>
                  </div>';
              }
            ?>
          </div>
          <div class="col-sm-2">
            <!--  -->
          </div>
        </div>
      </div>
    </main>

    <?php
      include('../footer.php');
    ?>
  </body>
</html>

<?php
  if(isset($_POST['forgotpassword'])){
    $bp455  = $_POST['bpassword'];
    $ap455  = $_POST['apassword'];
    $em41l  = $_POST['email'];
    $sql = "update accounts set password=md5('$ap455') where password=md5('$bp455') and email='$em41l'";
    if(mysqli_query($con, $sql)){
      echo "<script>
          alert('SUCCESS!!! Berhasil ubah kata sandi')
          </script>";
    }
    else{
      echo "<script>
          alert('WARNING!!! password atau email tidak sesuai')
          </script>";
    }
  }

  if(isset($_POST['Uprofile'])){
    $dir      = "../main/imgprofile/";
    $file     = $dir.basename($_FILES['Uphoto']['name']);
    $filetype = strtolower(patcinfo($file, PATHINFO_EXTENSION));
    if($filetypen != "jpg" || $filetype != "png"){
      echo '<script>
              alert("file yang diupload tidak sesuai");
            </script>';
    }
    else{
      move_upload_file($_FILES['Uphoto']['tmp_name'], $file);
    }
    echo "karta";
  }
?>