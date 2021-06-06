<?php
include '../includes/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
     <link href="assets/img/r.png" rel="icon">
    <!-- Memanggil file bootstrap -->
    <link  rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
    
<body>
    <?php
        if ($_SESSION['level']=="user"){
          header("location:../index.php?pesan=gagal");
        }
        else if ($_SESSION['level']==""){
          header("location:../index.php?pesan=gagal");
        }
    ?>
    <style>
    .judul
    {
        padding: 30px
    }
    body 
    {
    background-color: #f5f5f5;
    font-family: "Century Gothic";
    }
    input[type=text]:focus, [type=password]:focus
    {
     background: #f5f5f5;
    }
    input[type=text], [type=password], [type=email]
    {
        padding: 10px;
        margin: 8px;
        border: 2px solid silver;
        background-color: white; 
        width: 350px;
        border-radius:5px;
    }
    fieldset 
    {
        background-color: white;
        width:480px;
        border-radius: 20px;
        box-shadow: 2px 2px 20px 10px #ebe8e8;
    }
    legend 
    {
        font-size: 30px;
        color:#61a9d3;
    }
    td 
    {
        color: silver;
        font-size: 18px;
    }
    button 
    {
        width: 350px;
        height: 45px;
        font-size: medium;
        border: none;
	      background-image: linear-gradient(to right, #2cc7fd, #6e78fe, #b02aff);
        color: white;
        border-radius: 20px;
        cursor: pointer;
    }
    button:hover
    {
        background-image: linear-gradient(to right, #b02aff, #6e78fe, #2cc7fd);
    }
    </style>

        <?php
          // Menghubungkan php dengan koneksi database
          include ("../includes/koneksi.php");
          $id=$_POST['id'];
          // Menyeleksi semua data dari tabel login dengan id yang sesuai
          $query = "SELECT * FROM login1 WHERE id=$id";
          $result = mysqli_query($koneksi, $query);

          foreach ($result as $data) {
        ?>

        <center>
        <!-- Membuat form untuk mengubah data akun yang akan dialihkan ke halaman update.php -->
        <form action="update.php" method="POST">

          <br><br>
          <fieldset>
              <div class="judul"><h2><b>Register</b></h2></div>
              <table>
              <tr>
                <td><input type="text" name="pengguna" required minlength="5" maxlength="20" value="<?php echo "$data[username]"; ?>"></td>
                <td><input type="text" hidden value="<?php echo $data['id']; ?>" name="id"></td>
              </tr>
              <tr>
                <td><input type="password" name="sandi" required minlength="8" maxlength="15" value="<?php echo "$data[password]"; ?>"></td>
              </tr>
              <tr>
                <td><input type="text" name="nama" required value="<?php echo "$data[nama]"; ?>"></td>
              </tr>
              <tr>
                <td><input type="email" name="email" required value="<?php echo "$data[email]"; ?>"></td>
              </tr>
              </table><br>
          
          <button type="submit" name="btnRegistrasi">UPDATE</button><br><br>
          </fieldset><br>
        </form>
        
        <?php
          }
        ?>
    </center>
</body>
</html>
