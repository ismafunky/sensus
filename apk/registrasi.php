<?php 
require 'functions.php';

if (isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('User baru telah ditambahkan');
				document.location.href='login.php';
			  </script>";
	} else {
		echo mysqli_error($conn);
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

	<center>
	<h3>Halaman Registrasi</h3>
	<p>Daftar akun untuk melanjutkan login</p>
	<div class="card-panel" style="width: 400px;">
		<form action="" method="post">
			
			<p style="float: left;"><b>Username</b></p>
	        <input type="text" autocomplete="off" name="email" id="email" style="border: 2px solid #6B6B6B;">
					
			<p style="float: left;"><b>Password</b></p>
	        <input type="password" name="password" id="password" style="border: 2px solid #6B6B6B;">
			
			<p style="float: left;"><b>Konfirmasi Password</b></p>
	        <input type="password" name="password2" id="password2" style="border: 2px solid #6B6B6B;">
			
			<button type="submit" name="register" class="waves-effect waves-light btn"  style="background:#AA0000; width: 100%; margin-top: 15px; margin-bottom: 10px;">Registrasi</button>
		</form>
	</div>
	<p>Sudah Punya akun ?</p><a href="login.php">Login Sekarang</a>
<br><br>
</center>

	

<!--JavaScript at end of body for optimized loading-->
	  <script src="js/jquery-3.3.1.js"></script>
	  <script src="js/sweetalert2.all.min.js"></script>
	  <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
	  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
      	
        const select = document.querySelectorAll('select');
        select = M.FormSelect.init(select);
      </script>
    </body>
  </html>