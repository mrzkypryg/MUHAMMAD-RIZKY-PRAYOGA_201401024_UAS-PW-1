
<?php         
    include ('includes/koneksi.php');
    if ($_SESSION['level']=="admin")
    {           
       header("location:admin/admin.php");
    }         
    else if ($_SESSION['level']==""){           
        header("location:login_register.php?pesan=gagal");
    }     
   
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NEWS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/r.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <style>
        .sidebar.widget {
  background: #f2f2f2;
  border: 1px solid #ddd;
  padding: 10px 20px;
}
.sidebar.widget ul {
    margin: 0px;
    padding: 0;
    overflow: hidden;
}
.sidebar.widget ul li {
    overflow: hidden;
    font-size: 14px;
    margin-bottom: 20px;
    border-bottom: 1px dashed #ddd;
    padding-bottom: 20px
}
.sidebar-thumb{
    float: left;
    overflow: hidden;
    margin-right: 15px;
}
.sidebar-thumb img{
  background: #fff;
  border: 1px dashed #e0e0e0;
  padding: 6px;
  height: 75px;
  width: 75px;
  
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
}
.sidebar-content h5{ 
    font-size: 16px;
    cursor: pointer;
    line-height: 24px;
}
.sidebar-content h5 a:hover{ 
  color: #2996bd;
}

.sidebar-content h5 a{ 
    color: #202020;
    outline: 0 none;
    text-decoration: none;
    font-weight: bold
}
.sidebar-meta{
  margin-top: 10px;
}
.sidebar-meta span{
  color: #2e2e2e;
}
.sidebar-meta span.time{
  margin-right: 10px;
}
.sidebar-meta span i{
  color: #2996bd
}
    
    </style>
    
    
 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.php"><img src="assets/img/logo2.png"></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="news.php">News</a></li>
          <li><a href="contact.php">Contact Us</a></li>
              <span>&nbsp;</span>
              <span>&nbsp;</span>
              <span>&nbsp;</span>
              <span>&nbsp;</span>
          <li><a id="button2"><i class="bi bi-person-circle" style="font-size:18px; color: yellow">&nbsp; Welcome, <?php echo $_SESSION['username']?> &nbsp; &nbsp;</i></a></li> <span>&nbsp;</span>
          <li><a id="button1" href="logout.php">Logout &nbsp; &nbsp;&nbsp; &nbsp;</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

 <!-- ======= Blog Section ======= -->
    <section class="hero-section inner-page">
      <div class="wave">
        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="" style="font-size: 58px;"><img src="assets/img/12.png" width="10%"> <img src="assets/img/logo2.png" width="35%"> PORTAL <img src="assets/img/portal.png" width="10%"></h1> 
              </div>
            </div>
          </div>
        </div>
      </div>    
    </section>
      
    <section class="site-section mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
          </div>
            <section class="site-section mb-4">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 blog-content">
                      <br>

                            <?php 
                                // Jika tombol cari diklik
                                if(isset($_GET['cari'])){
                                $cari = $_GET['cari'];
                                // Menyeleksi semua data dari tabel gambar dengan judul yang dimasukkan
                                $query = mysqli_query($koneksi, "SELECT * FROM gambar WHERE judul LIKE '%$cari%' ");
                                }
                                if(mysqli_num_rows($query))
                                {
                                  echo "<center><b style='color:black'>Hasil pencarian : ".$cari."</b></center><br>";

                                foreach($query as $data)
                                {
                               ?>

                                 <!-- Menampilkan hasil pencarian -->
                                <img src="<?php echo "$data[gambar]"; ?>" class="card-img">&nbsp;
                                <h5 class="card-title" style="font-weight:bold"><a style="text-align:justify" href="<?php echo $data['link'];?>"><?php echo $data['judul'];?></a><br><br></h5>

                                <!-- Menampilkan kalimat tidak ada berita jika judul tidak ada di database -->
                                <?php 
                                      }
                                    }
                                    else
                                    {
                                      echo "<center><h3><b style='color:navy'>Tidak Ada Berita</b></h3></center><br>";
                                    }

                                ?>

                  </div>
                  <div class="col-md-4 sidebar">
                    <div class="sidebar-box">
                      <form action="#" class="search-form">
                        <div class="form-group">
                          <span class="icon fa fa-search"></span>
                          <input type="text" name="cari" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                      </form>
                    </div>


                  <div class="sidebar widget">
                      <h4>Recent Post</h4>
                      <ul>
                            <?php 
                                $query = "SELECT * FROM gambar where jenis='postbaru'";
                                $result = mysqli_query($koneksi,$query);

                                while($row = mysqli_fetch_array($result))
                                {
                                  $gambar = $row['gambar'];
                                  $judul = $row['judul'];
                                  $link = $row['link'];
                                  if($koneksi)
                                  {
                                    echo "<li><div class='sidebar-thumb'><a><img class='animated rollIn' src='$gambar' alt=''></a></div>
                                    <div class='sidebar-content'><h6 class='animated bounceInRight'><a href='$link'>$judul</a></h6></div>
                                    </li>";
                                  }
                                }
                            ?>
                          </ul><!-- .Ul ends here -->
                      </div><!-- .Widget ends here -->
                      <br>
                    <div class="sidebar widget">
                      <h4>Popular Post</h4>
                      <ul>
                            <?php 
                                $query = "SELECT * FROM gambar where jenis='populer'";
                                $result = mysqli_query($koneksi,$query);

                                while($row = mysqli_fetch_array($result))
                                {
                                  $gambar = $row['gambar'];
                                  $judul = $row['judul'];
                                  $link = $row['link'];
                                  if($koneksi)
                                  {
                                    echo "<li><div class='sidebar-thumb'><a><img class='animated rollIn' src='$gambar' alt=''></a></div>
                                    <div class='sidebar-content'><h6 class='animated bounceInRight'><a href='$link'>$judul</a></h6></div>
                                    </li>";
                                  }
                                }
                            ?>
                          </ul><!-- .Ul ends here -->
                      </div><!-- .Widget ends here -->
                  </div><!-- .Col ends here -->
                <div class="col-md-4"></div><!-- .Col ends here -->
              </div><!-- .Row ends here -->
            </div><!-- .Container ends here -->
            </section>
          </div>
        </div>
    </section>

    </main>

 <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>About</h3>
          <p><a href="index.php"><img src="assets/img/logo1.png" width="25%"></a></p>
          <p style="text-align: justify">R NEWS stands for Read the News. We provide the latest news from around the world. R NEWS established since 2021.</p>
          <p class="social">
            <a href="https://twitter.com/usuofficial/with_replies"><span class="bi bi-twitter"></span></a>
            <a href="https://www.facebook.com/muhammad.rizky.prayoga3"><span class="bi bi-facebook"></span></a>
            <a href="https://www.instagram.com/mrzkypryg/"><span class="bi bi-instagram"></span></a>
            <a href="https://www.youtube.com/channel/UC9ypN-NEDO8haTDYU1RKaDw/featured"><span class="bi bi-youtube"></span></a>
          </p>
        </div>   
          <div class="col-md-4">
            <h3>INFORMATION</h3>
              <ul>
                    <li>
                      <a href="https://api.whatsapp.com/send?phone=6282162653958"><i class="bi bi-whatsapp"></i> WhatsApp : (+62 821 6265 3958) </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/mrzkypryg/"><i class="bi bi-instagram"> </i>Instagram : mrzkypryg </a>
                    </li>
                    <li>
                      <a href="https://msng.link/o/?mrzkypryg=tg"><i class="bi bi-telegram"> </i>Telegram : Rizky (@mrzkypryg) </a>
                    </li>
                    <li>
                        <a href="https://e-mailer.link/100156744693"><i class="bi bi-envelope"></i> Email : mrpharyga2019@gmail.com </a>
                    </li>
              </ul>
        </div>
             <div class="col-md-4">
                <h3 style="text-align: center; font-weight: bold">R NEWS Clock</h3>
                  <div class="wrapper">
                    <div class="display">
                        <div id="date"></div>
                        <div id="time"></div>
                        </div>
                  </div>
                </div>
          </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">Copyright &copy;2021 <strong>R NEWS</strong>. All Rights Reserved</p>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!--JS JAM-->
    <script>
        window.onload = setInterval(clock,1);
        function clock()
        {
            const time = document.querySelector(".display #date");
            var d = new Date();
            var day =d.getDay();
            var date = d.getDate();
            var year = d.getFullYear();
            var month = d.getMonth();
            var monthArr = ["January", "February","March", "April", "May", "June", "July", "August", "September", "October", "November","December"];
            var daysArr = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            month = monthArr[month];
            day = daysArr[day];
            document.getElementById("date").innerHTML=day+", "+date+" "+month+" "+year;
        }
        
         setInterval(()=>{
           const time = document.querySelector(".display #time");
           let date = new Date();
           let hours = date.getHours();
           let minutes = date.getMinutes();
           let seconds = date.getSeconds();
           let day_night = "AM";
           if(hours > 12){
             day_night = "PM";
             hours = hours - 12;
           }
           if(seconds < 10){
             seconds = "0" + seconds;
           }
           if(minutes < 10){
             minutes = "0" + minutes;
           }
           if(hours < 10){
             hours = "0" + hours;
           }
           time.textContent = hours + ":" + minutes + ":" + seconds + " "+ day_night;
         });
        </script>
    
</body>

</html>