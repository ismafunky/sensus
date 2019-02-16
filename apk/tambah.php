<?php 
  session_start();
  
  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
  }
  require "functions.php";

  if (isset($_POST["submit"])) {
    if(tambah($_POST)>0){
      echo "
        <script>
          alert('Data Berhasil Di tambah');
          document.location.href='index.php';
        </script>
      ";
      die;
    } else{
      echo "
        <script>
          alert('Data gagal di tambahkan');
        </script>

      ";
    }
  }

 ?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- MyCss -->
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <!-- Header -->
      <nav>
        <div class="container">
          <div class="nav-wrapper">
            <a href="#" class="brand-logo">Sensus Penduduk</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li class="active"><a href="index.php">Home</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- End Header -->

<form action="" method="post">
    <div class="input-field container">

      <p><b>Nama Daerah</b></p>
      <input name="nama" id="nama" type="text" style="border: 2px solid #6B6B6B;" required>
      <p><b>Jumlah Penduduk</b></p>
      <input name="jumlahPndk" id="jumlahPndk" type="text" style="border: 2px solid #6B6B6B;" required>
      <p><b>Total Pendapatan</b></p>
      <input name="pendapatan" id="pendapatan" type="text" style="border: 2px solid #6B6B6B;" required class="validate">
      <p><b>Rata Rata Pendapatan</b></p>
      <input name="AvgPendapatan" id="AvgPendapatan" type="text" style="border: 2px solid #6B6B6B;" required class="validate">
      <p><b>Status</b></p>
      <input name="status" id="status" type="text" style="border: 2px solid #6B6B6B;" required class="validate">

      <button type="submit" name="submit" class="waves-effect waves-light btn"  style="background:#AA0000; width: 100%; margin-bottom: 10px;">Tambah Data</button>

    </div>
  </form>
  

      <!-- Footer -->
      <footer class="page-footer center">
          <div class="container">
          © 2018 Bilkis Ismail
          </div> <br>
      </footer>
      <!-- End Footer -->

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
      </script>
    </body>
  </html>