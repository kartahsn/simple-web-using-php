<?php
  session_start();
  error_reporting(0);

  if($_SESSION['un4m3']){
    header('location: main/');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UCAPIN YUK</title>
    <?php
      include('fmwork.php');
    ?>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand fw-semibold">UCAPIN YUK</a>
          <a class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="bi-list text-white"></span>
          </a>
          <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link fw-semibold" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-semibold" href="login/">Masuk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-semibold" href="register/">Daftar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="col-12 center">
      <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="carousel/la.jpg" alt="Los Angeles" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="carousel/chicago.jpg" alt="Chicago" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="carousel/ny.jpg" alt="New York" class="d-block w-100" />
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
    <?php
      include'footer.php';
    ?>
  </body>
</html>
