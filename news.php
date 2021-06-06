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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>


<body>

    <style>
    
        
    /*GRID*/
        .jasgrid{padding:2px;}

        .box-item {
            float: left;
            opacity: 1;
            overflow: hidden;
            position: relative;
        }

        .box-item img {
            width: 100%;
        }
        .box-item a,span{color:#FFF;}

        .box-item .box-post span.meta {
            font-family:  sans-serif;
            font-size: 12px;
            color: #fff;
            margin-top: 15px;
            display: block;
        }

        .box-item .box-post span.meta span {
            margin-right: 15px;
        }

        .box-item .box-post {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 100%);
            padding: 30px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .box-item .box-post h1..post-title {
           font-size:10pt;
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
      
      <section>
      <!--Scrolling Breaking News Ticker-->
      <div class="tcontainer">
        <div class="ticker-wrap">
          <div class="ticker-move">
              <div class="ticker-item"><h6 id="hotnews" style="color:black"><img src="assets/img/news.png" width="18px">&nbsp;Hot News :&nbsp;</h6> </div>
              <div class="ticker-item"><img src="assets/img/logo.png" width="18px">&nbsp;<a href="https://waspada.co.id/2021/05/rs-usu-tidak-terima-pasien-covid-19-rujukan/" style="color:white">RS USU Tidak Terima Pasien Covid-19 Rujukan</a>&nbsp;&nbsp;&nbsp;&nbsp;</div>
              <div class="ticker-item"><img src="assets/img/amd.jpg" width="18px">&nbsp;<a href="https://batam.tribunnews.com/2021/05/16/berita-teknologi-laptop-varian-ryzen-5000-series-mobile-di-ajang-ces-2021-hadir-di-indonesia" style="color:white">Laptop Varian Ryzen 5000 Series Mobile di Ajang CES 2021 Hadir di Indonesia</a>&nbsp;&nbsp;&nbsp;&nbsp;</div>
              <div class="ticker-item"><img src="assets/img/kominfo.png" width="18px">&nbsp;&nbsp;<a href="https://www.pikiran-rakyat.com/nasional/pr-011940414/kemenkominfo-akui-data-bocor-dan-diperjualbelikan-adalah-milik-bpjs-kesehatan" style="color:white">Kemenkominfo Akui Data Bocor dan Diperjualbelikan Adalah Milik BPJS Kesehatan</a>&nbsp;&nbsp;&nbsp;&nbsp;</div>
              <div class="ticker-item"><img src="assets/img/emas.png" width="18px">&nbsp;<a href="https://money.kompas.com/read/2021/05/21/090500726/naik-rp-10.000-simak-rincian-harga-emas-antam-terbaru-hari-ini" style="color:white">Naik Rp 10.000, Simak Rincian Harga Emas Antam Terbaru Hari Ini</a>&nbsp;&nbsp;&nbsp;&nbsp;</div>
              <div class="ticker-item"><img src="assets/img/world.png" width="18px">&nbsp;<a href="https://www.bbc.com/indonesia/dunia-57195416" style="color:white">Bentrokan pecah di Masjid al-Aqsa setelah salat Jumat, banyak korban luka, menyusul gencatan senjata di Gaza</a>&nbsp;&nbsp;&nbsp;&nbsp;</div>
             
            </div>
          </div>
        </div>
         <form action="pencarian.php" method="GET" class="search-form">
                <div class="form-group">
                  <h5 style="text-align:center">Ingin Mencari Berita? </h5>
                  <span class="icon bi bi-search"></span>
                  <input type="text" name="cari" class="form-control" placeholder="Search here.."><br>
                  <h6>&nbsp;Tags : <a id="buttontag" href="#klik1">COVID 19</a> <a id="buttontag" href="#klik2">TECHNOLOGY</a> <a  id="buttontag" href="#klik3">LIFE &amp; STYLE</a> <a id="buttontag" href="#klik4">POLITICS</a> </h6> 
                </div>
        </form>
      
      </section>
      
        
    <section>
        <br> <h1 style="text-align:center; font-weight:bold" id="klik1"><hr>NEWS<hr></h1>
            <div class="container">
              <div class="row">
                <div class="col-md-6 jasgrid">
                    <h1 style="text-align:center; font-weight:bold" id="klik1"><hr>COVID 19<hr></h1>
                         <!-- Menyeleksi semua data dari jenis='covid' yang akan ditampilkan -->
                            <?php
                                $query = "SELECT * FROM gambar where jenis='covid'";
                                $result = mysqli_query($koneksi,$query);

                                while($row = mysqli_fetch_array($result))
                                {
                                $gambar = $row['gambar'];
                                $judul = $row['judul'];
                                $link = $row['link'];
                                $jenis= $row['jenis'];
                                if($koneksi)
                                {
                                echo " <div class='box-item'><div class='box-post'><span class='label label-success'><a href='#' rel='tag' style='text-decoration:none'>COVID 19</a></span><h1 class='post-title' style='font-size:20px'>
                                <a href='$link' style='text-decoration:none'>$judul</a></h1></span> </div><img src='$gambar' alt='' class=''> </div>";

                                }
                                }
                            ?>

                </div>

                <div class="col-md-6 jasgrid">
                    <h1 style="text-align:center; font-weight:bold" id="klik4"><hr>POLITICS<hr></h1>

                               <!-- Menyeleksi semua data dari jenis='covid' yang akan ditampilkan -->
                            <?php
                                $query = "SELECT * FROM gambar where jenis='politik'";
                                $result = mysqli_query($koneksi,$query);

                                while($row = mysqli_fetch_array($result))
                                {
                                $gambar = $row['gambar'];
                                $judul = $row['judul'];
                                $link = $row['link'];
                                $jenis= $row['jenis'];
                                if($koneksi)
                                {
                                    echo " <div class='box-item'><div class='box-post'><span class='label label-success'><a href='#' rel='tag' style='text-decoration:none'>POLITICS</a></span><h1 class='post-title' style='font-size:20px'>
                                    <a href='$link' style='text-decoration:none'>$judul</a></h1></span> </div><img src='$gambar' alt='$judul' class=''> </div>";

                                }
                                }
                            ?>

                  </div>

                   <div class="col-md-6 jasgrid">
                    <h1 style="text-align:center; font-weight:bold" id="klik3"><hr>LIFE & STYLE<hr></h1>

                               <!-- Menyeleksi semua data dari jenis='covid' yang akan ditampilkan -->
                            <?php
                                $query = "SELECT * FROM gambar where jenis='lifestyle'";
                                $result = mysqli_query($koneksi,$query);

                                while($row = mysqli_fetch_array($result))
                                {
                                $gambar = $row['gambar'];
                                $judul = $row['judul'];
                                $link = $row['link'];
                                $jenis= $row['jenis'];
                                if($koneksi)
                                {
                                echo " <div class='box-item'><div class='box-post'><span class='label label-success'><a href='#' rel='tag' style='text-decoration:none'>Life & Style</a></span><h1 class='post-title' style='font-size:20px'>
                                <a href='$link' style='text-decoration:none'>$judul</a></h1></span> </div><img src='$gambar' alt='$judul' class=''> </div>";

                                }
                                }
                            ?>

                  </div>          

                  <div class="col-md-6 jasgrid">
                    <h1 style="text-align:center; font-weight:bold" id="klik2"><hr>TECHNOLOGY<hr></h1>

                               <!-- Menyeleksi semua data dari jenis='covid' yang akan ditampilkan -->
                            <?php
                                $query = "SELECT * FROM gambar where jenis='technology'";
                                $result = mysqli_query($koneksi,$query);

                                while($row = mysqli_fetch_array($result))
                                {
                                $gambar = $row['gambar'];
                                $judul = $row['judul'];
                                $link = $row['link'];
                                $jenis= $row['jenis'];
                                if($koneksi)
                                {
                                echo " <div class='box-item'><div class='box-post'><span class='label label-success'><a href='#' rel='tag' style='text-decoration:none'>TECHONOLOGY</a></span><h1 class='post-title' style='font-size:20px'>
                                <a href='$link' style='text-decoration:none'>$judul</a></h1></span> </div><img src='$gambar' alt='$judul' class=''> </div>";

                                }
                                }
                            ?>

                  </div>

                </div>
                </div> <!-- /container -->
          <br><hr>
    </section>
      
      

  </main><!-- End #main -->

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