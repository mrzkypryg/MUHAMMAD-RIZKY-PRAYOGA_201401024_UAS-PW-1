<?php 
// Mengaktifkan session pada php
session_start();
 
// Menghubungkan php dengan koneksi database
include '../includes/koneksi.php';
 
// Menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);
 
// Menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM login1 WHERE username='$username' AND password='$password'");
// Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// Cek apakah username dan password di temukan pada database
if($cek > 0){
 
	// Menampilkan data ke database
	$data = mysqli_fetch_assoc($login);
 
	// Cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// Membuat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// Mengalihkan ke halaman dashboard admin
		header("location:admin.php");
 
	// Cek jika user login sebagai user
	}else if($data['level']=="user"){
		// Membuat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		// Mengalihkan ke halaman dashboard pegawai
		header("location:../index.php");
 
	}else{
		// Mengalihkan ke halaman login kembali
		header("location:../login_register.php?pesan=gagal");
	}	
}else{
	// Mengalihkan ke halaman login kembali
	header("location:../login_register.php?pesan=gagal12");
}
 
?>