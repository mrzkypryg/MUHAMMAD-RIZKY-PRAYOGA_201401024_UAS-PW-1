<?php
// Mengaktifkan session pada php
session_start();
//Jika menghapus semua data sesi maka akan dialihkan ke halaman login_register.php
if(session_destroy())
{
	header("Location: login_register.php");
}
?>