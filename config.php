<?php 

	// buat koneksi
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "phpii_project00_janzen"

	$connection = mysqli_connect($hostname, $username, $password, $database);

	if($connection->connect_error){
		echo "Koneksi gagal!";
	} else {
		echo "Koneksi berhasil!";
	}

	// fungsi tambah

	// fungsi ubah

	// fungsi hapus

?>