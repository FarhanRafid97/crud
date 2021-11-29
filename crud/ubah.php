<?php
require 'function.php';

$id = $_GET["id"];

$saya = query("SELECT * FROM tbl_saya WHERE id=$id")[0];


if(isset($_POST["submit"])){

	if(ubah($_POST) > 0 ){
		echo "
		<script>
		alert('Data Berhasil Diubah XD');
		document.location.href='index.php';
		</script>";
	}else{
		echo "<script>
		alert('Data Gagal Diubah X(');
		document.location.href='index.php';
		</script>";
	}


}

?>
<!DOCTYPE html>
<html> 
<center>
<head>
	<title>Ubah Data Mahasiswa</title>
	<a href="index.php">Tammbah Data MahasiswaM</a>

</head>
<body>
	<h1> Ubah data mahasiswa</h1>
	<form action="" method="post">
	<input type="hidden" name="id" value="<?= $saya['id']; ?>">
		<ul>
			<li>
				<label for="nama">NAMA :</label>
				<input type="text" name="nama" id="nama" required
				value="<?= $saya["nama"]; ?>">
			</li>
			<br>
			<li>
				<label for="alamat">ALAMAT :</label>
				<input type="text" name="alamat" id="alamat" required
				value="<?= $saya["alamat"]; ?>">
			</li>
			<br>
			<li>
				<label for="no_hp">Nomor HP :</label>
				<input type="text" name="no_hp" id="no_hp" required
				value="<?= $saya["no_hp"]; ?>">
			</li>
			<br>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar" required
				value="<?= $saya["gambar"]; ?>">
			</li>
			<br>
			<button type="submit" name="submit">Ubah Data</button>
		</ul>

	</form>

</body>
</center>
</html>