<?php 
  session_start();
  
  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
  }
  require "functions.php";
  $data = query("SELECT * FROM datadaerah ORDER BY id ASC ");
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Home</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Content -->
    <section class="content container mt-5">
      <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data</a>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama Daerah</th>
            <th scope="col">Jumlah Penduduk</th>
            <th scope="col">Total Pendapatan</th>
            <th scope="col">Rata Rata Pendapatan</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $row): ?>
          <tr>
            <th scope="row"><?= $row['id'];?></th>
            <td><?= $row['nama'];?></td>
            <td><?= $row['jumlahPndk'];?></td>
            <td><?= $row['pendapatan'];?></td>
            <td><?= $row['AvgPendapatan'];?></td>
            <td><?php 
              if ($row['AvgPendapatan']<1700000) {
                echo"
                <button type='button' class='btn btn-danger'>Danger</button>
                ";
              }
              else if ($row['AvgPendapatan']>=1700000 && $row['AvgPendapatan']<2200000) {
                echo"
                <button type='button' class='btn btn-warning'>Warning</button>
                ";
              }
              else if ($row['AvgPendapatan']>=2200000) {
                echo"
                <button type='button' class='btn btn-success'>Good</button>
                ";
              }
             ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>
    <!-- End Content -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>