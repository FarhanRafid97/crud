<?php

require 'function.php';

$id = $_GET["id"];

if(hapus($id) > 0 ){
		echo "
		<script>
		alert('Data Berhasil Hapus XD');
		document.location.href='index.php';
		</script>";
	}else{
		echo "<script>
		alert('Data Gagal Dihapus X(');
		document.location.href='index.php';
		</script>";
	}


?>