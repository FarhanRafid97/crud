<?php
require 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN ADMIN</title>
</head>
<body>
	<center>
<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tammbah Data MahasiswaM</a>
	<br>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Aksi</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Gamabar</th>
	</tr>
	<?php $i=1; ?>
	<?php foreach($mahasiswa as $row) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">Ubah</a> |
			<a href="">Hapus</a>
		</td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["alamat"]; ?></td>
		<td>
			<img src="img/<?php echo $row["gambar"]; ?>" width="100"></td>

	</tr>
<?php $i++; ?>
<?php endforeach; ?>
</center>
</table>
</body>
</html>