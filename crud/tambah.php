<?php
require 'function.php';


if(isset($_POST["submit"])){

	if(tambah($_POST) > 0 ){
		echo "
		<script>
		alert('Data Berhasil Disimpan XD');
		document.location.href='index.php';
		</script>";
	}else{
		echo "<script>
		alert('Data Gagal Disimpan X(');
		document.location.href='index.php';
		</script>";
	}


}

?>
<!DOCTYPE html>
<html> 
<center>
<head>
	<title>Tambah Data Mahasiswa</title>
	<a href="index.php">Tammbah Data MahasiswaM</a>

</head>
<body>
	<h1> Tambah data mahasiswa</h1>
	<form action="" method="post">
	
		<ul>
			<li>
				<label for="nama">NAMA :</label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<br>
			<li>
				<label for="alamat">ALAMAT :</label>
				<input type="text" name="alamat" id="alamat" required>
			</li>
			<br>
			<li>
				<label for="no_hp">Nomor HP :</label>
				<input type="text" name="no_hp" id="no_hp" required>
			</li>
			<br>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<br>
			<button type="submit" name="submit">Tambah Data</button>
		</ul>

	</form>

</body>
</center>
</html>