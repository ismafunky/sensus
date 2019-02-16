<?php 
	//koneksi database
	$conn = mysqli_connect("localhost","root","","sensus");
	
	function query($query){
		global $conn;
		$result = mysqli_query($conn,$query);
		$rows = [];

		while ( $row = mysqli_fetch_assoc($result)) {
			$rows[] =$row;
		}

		return $rows;
	} 	

	function tambah($data){
		global $conn;

		$nama = htmlspecialchars($data["nama"]);
		$jumlahPndk = htmlspecialchars($data["jumlahPndk"]);
		$pendapatan = htmlspecialchars($data["pendapatan"]);
		$AvgPendapatan = htmlspecialchars($data["AvgPendapatan"]);
		$status = htmlspecialchars($data["status"]);
		
		//query insert data
		$query = "INSERT INTO datadaerah
					VALUES
					('','$nama','$jumlahPndk','$pendapatan','$AvgPendapatan','$status')
			     ";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);	
	}

	function registrasi($data){
		global $conn;

		$email = strtolower(stripslashes($data["email"]));
		$password = mysqli_real_escape_string($conn,$data["password"]);
		$password2 = mysqli_real_escape_string($conn,$data["password2"]);
	
		//cek email sudah ada apa belum
		$result = mysqli_query($conn , "SELECT email FROM users WHERE email = '$email'");
		if (mysqli_fetch_assoc($result)) {
			echo "<script>
					alert('email telah terdaftar');
				  </script>";
			  return false;
		}
		//cek konfirmasi password
		if ($password !== $password2) {
			echo "<script>
					alert('konfirmasi password gagal');
			      </script>";
	      	return false;
		}

		// enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		// MASUKAN KEDALAM DATABASE
		mysqli_query($conn, "INSERT INTO users VALUES('','$email','$password')");

		return mysqli_affected_rows($conn);
	}

 ?>