<?php
//koneksi database
$conn = mysqli_connect("localhost","root","","db1");


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;

}

function tambah($data){
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$alamat =htmlspecialchars($data["alamat"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query="INSERT INTO tbl_saya
			VALUES
			('', '$nama', '$alamat', '$no_hp', '$gambar')
	";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

	
}


function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM tbl_saya WHERE id=$id");

	return mysqli_affected_rows($conn);

}


function ubah($data){
global $conn;
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$alamat =htmlspecialchars($data["alamat"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "UPDATE tbl_saya SET
			nama = '$nama',
			alamat = '$alamat',
			no_hp = '$no_hp',
			gambar = '$gambar'
			WHERE id = $id
	";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);


}

function cari($keyword){
		$query = "SELECT * FROM tbl_saya
			WHERE
			nama LIKE '%$keyword%' OR
			alamat LIKE '%$keyword%' OR
			no_hp LIKE '%$keyword%' 
		";
		return query($query); 
}
?>