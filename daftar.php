
<?php
// Menghubungkan php dengan koneksi database
include 'includes/koneksi.php';

// Menangkap data yang dikirim dari form registssser
$user = $_POST['pengguna'];
$pass = md5($_POST['sandi']);
$level = "user";
$nama = $_POST['nama'];
$email = $_POST['email'];
// Cek username di database
$cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM login1 WHERE username = '$user'"));
// Kalau username sudah ada yang pakai
if ($cek > 0){
  echo '<script language="javascript">alert("Username sudah terdaftar. Ulangi lagi!"); document.location="login_register.php";</script>';
}
// Kalau username valid, inputkan data ke tabel login
else
{
// Memasukkan data ke database
$sql = "INSERT INTO login1 (username,password,level,nama,email) VALUES ('$user','$pass','$level','$nama','$email')";
// Jika data yang dimasukkan memenuhi syarat validasi maka akan muncul pesan dan dialihkan ke halaman index.php
if($koneksi->query($sql)===TRUE)
{
    echo '<script language="javascript">alert("Registrasi Akun Anda Berhasil"); document.location="login_register.php";</script>';
}
// Jika data yang dimasukkan tidak sesuai maka akan muncul pesan terjadi kesalahan dan dialihkan ke halaman logout.php
else 
{
    echo "Terjadi kesalahan: " .$sql."<br/>".$koneksi->error;
    header("location:logout.php");
}
}         
// Menghentikan koneksi server
$koneksi->close();
        
?>

