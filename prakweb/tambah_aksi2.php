<?php
	include 'koneksi.php';
	
	// menangkap data yang dikirim dari form
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	
	// menginput data ke database
	mysqli_query ($koneksi,"insert into mahasiswa1 values('$nim','$nama','$alamat')");
	
	// mengalihkan halaman kembali ke index.php
	header("location:tugas.php");
?>