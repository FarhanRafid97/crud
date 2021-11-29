<?php
require 'function.php';
$tbl_saya = query("SELECT * FROM tbl_saya");

if(isset($_POST['cari'])){
	$tbl_saya = cari($_POST['keyword']);
}
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
	<br><br>
<form action="" method="post">

	<input type="text" name="keyword" size="30" autofocus
	placeholder="Masukan ID yang ingin Dicari-" autocomplete="off">
	<button type="submit" name="cari">Cari</button>

</form>


<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Aksi</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Nomor telepon</th>
		<th>Gamabar</th>
	</tr>
	<?php $i=1; ?>
	<?php foreach($tbl_saya as $row) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> |
			<a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin Menghapus Data??????');">Hapus</a>
		</td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["alamat"]; ?></td>
		<td><?= $row["no_hp"]; ?></td>
		<td>
			<img src="img/<?php echo $row["gambar"]; ?>" width="100"></td>

	</tr>
<?php $i++; ?>
<?php endforeach; ?>
</center>
</table>
</body>
</html>