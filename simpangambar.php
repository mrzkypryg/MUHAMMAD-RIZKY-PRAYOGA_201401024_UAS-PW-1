<?php
    // Menghubungkan php dengan koneksi database
    require_once 'includes/koneksi.php';
    // Meletakkan gambar di folder images
    $folder = "img/berita/";
    // Ambil data file
    $upload_image = $folder . basename($_FILES["gambar"]["name"]);
    // Jika btnUnggah diklik
    if(isset($_POST["btnUnggah"])) {
      // Memindahkan data file ke folder images
      if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $upload_image)) 
      {
        // Mengeluarkan pesan gambar berhasil diunggah
        echo "<p class='alert alert-success text-center'>";
        echo "File ". basename( $_FILES["gambar"]["name"]). " berhasil diunggah.";
        echo "</p>";

    // Menangkap data yang dikirim dari form tambah.php dan dimasukkan kedalam tabel gambar
    $judul=$_POST['judul'];
    $link=$_POST['link'];
    $jenis=$_POST['jenis'];
    $sql = "INSERT INTO gambar (gambar,judul,link,jenis) VALUES ('$upload_image','$judul','$link','$jenis') ";

    // Jika koneksi berhasil maka akan dialihkan ke halaman admin
    if($koneksi->query($sql)===TRUE)
    {
      header("refresh:1;admin/admin.php");
    }
    }
    // Jika koneksi tidak berhasil maka akan muncul pesan alert terjadi kesalahan
    else 
    {
      echo "<p class='alert alert-success text-center'>";
      echo "Maaf, Terjadi Kesalahan Pada Saat Mengunggah File.";
      echo "</p>";
    }
    }
 ?>