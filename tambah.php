<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    
  <!-- Favicons -->
  <link href="assets/img/r.png" rel="icon">
    
    <!-- Memanggil file bootstrap -->
    <link  rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
    
<body>
    <style>
    body 
    {
    margin: 20px;
    font-family: 'Montserrat', sans-serif;
    background-image: url(assets/img/hero-bg.jpg);
    color: white;
    }
    .jumbotron
    {
      background-size: 100%;
      background-image: url(assets/img/hero-bg.jpg);
    }
    
        h1{
            text-align: center;
            font-weight: bold;
            color: white;
            font-size: 100px;
        }
        
        form{
            margin: 20px;
        }
        input
        {
                font-size: 15px;
                padding: 8px;
                border-radius: 118px;
        }
        
        button{
                font-size: 15px;
                font-weight: bold;
                padding: 8px;
                border-radius: 118px;
                box-sizing: border-box;
                background-color: gold;
                text-decoration: none;
                color: black;
        }
    </style>
    
    <!-- Membuat jumbotron -->
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <br><br><h1>R NEWS</h1><br><br>
      <p class="lead"></p>
    </div>
    </div>
    
    <div class="row justify-content-around">
        <div class="col-9">
            <!-- Membuat form tambah konten berita  dan akan dialihkan ke halaman simpangambar.php -->
            <form action="simpangambar.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <table id="daftar" width="100%">
              <tr>
                <td><label class="control-label">Unggah Gambar :</label></td>
                <td><input class="input-group" type="file" name="gambar" accept="img/berita/" ></td>
                <td></td>
              </tr>
              <tr>
                <td>Judul Berita :</td><td><input type="text" name="judul" required></td>
              </tr>
              <tr>
                <td>Link Berita  :</td><td><input type="link" name="link" required></td>
              </tr>
              <tr>
                <td>Jenis Berita :</td><td><input type="radio" name="jenis" value="postbaru">Latest Post</td>
              </tr>
              <tr>
                <td></td><td><input type="radio" name="jenis" value="populer">Popular Post</td>
              </tr>
              <tr>
                <td></td><td><input type="radio" name="jenis" value="covid">COVID 19</td>
              </tr>
              <tr>
                <td></td><td><input type="radio" name="jenis" value="lifestyle">Life & Style</td>
              </tr>
              <tr>
                <td></td><td><input type="radio" name="jenis" value="technology">Technology</td>
              </tr>
              <tr>
                <td></td><td><input type="radio" name="jenis" value="politik">Politik</td>
              </tr>
              <tr>
                <td>&nbsp;</td><td><button class="btn btn-dark btn-lg" type="submit" name="btnUnggah">Tambah</button></td>
              </tr>
      </table>
      </form>
            <button class="btn btn-dark btn-lg" type="submit" name="btnUnggah" style="background-color:black"><a style="text-decoration:none; color:yellow" href="admin/admin.php">Kembali</a></button>
    </div>
    </div>
</body>
</html>