<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
     <link href="assets/img/r.png" rel="icon">
    <link  rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
    
<body>
        <!-- Menghubungkan php dengan koneksi database -->
        <?php 
          include "../includes/koneksi.php"; 
        ?>

        <style>
        body 
        {
            background-color: deepskyblue;
            background-size: 100%;
        }
        
        p{
            font-weight: bold;
            font-size: 20px;
            text-align: center;
        }
        
         button{
             font-size: 15px;
             font-weight: bold;
             padding: 8px;
             border-radius: 118px;
             box-sizing: border-box;
             background-color: black;
             text-decoration: none;
             
             text-align: center;
             color: yellow;
    </style>

    <div class="container">
    <div class="row justify-content-md-center">
    <div class="col-md-auto" style="width=730px">
        <div id="post">
        	
        <!-- Ketika tombol Ganti diklik maka akan ditampilkan tindakan terhadap data tersebut   -->
        <?php
            $no = $_POST['id'];  
            $user = $_POST['pengguna'];
            $pass = md5($_POST['sandi']);
            $nama = $_POST['nama'];
            $email = $_POST['email'];

            
            if($koneksi)
            {
              // Mengganti data login dengan data yang baru sesuai dengan id
              $sql = "UPDATE login1 SET username = '$user', password = '$pass', nama = '$nama', email = '$email' WHERE id = '$no'";
              mysqli_query($koneksi, $sql);
              echo '<script language="javascript">alert("Data Akun Berhasil diubah."); document.location="admin.php?daftarakun=";</script>';
              echo "<p class='alert alert-success text-center'><b>Data Akun Telah Diubah.</b></p>";
              echo "<center><a href='admin.php' class='btn btn-dark'><button>Back</button></center></a>";
            }
            // Muncul alert terjadi kesalahan jika koneksi gagal
            elseif ($koneksi->connect_error)
            {
              echo "<p class='alert alert-danger text center'>Terjadi kesalahan: $error</p>";
            }
        ?>

        </div>
      </div>
      </div>
      </div>

</body>
</html>