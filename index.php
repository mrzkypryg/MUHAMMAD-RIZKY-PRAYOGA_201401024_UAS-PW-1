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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.php"><img src="assets/img/logo2.png"></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="news.php">News</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-8 text-center text-lg-start">
              <h1 data-aos="fade-right">Read the news with R NEWS</h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Get the latest and most reliable news here.</p>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="news.php" class="btn btn-outline-white">Read</a></p>
            </div>
            <div class="col-lg-4 iphone-wrap">
              <img src="assets/img/Saly-12.png" alt="Image" class="phone-1" data-aos="fade-right">
              <img src="assets/img/5cb0633d80f2cf201a4c3253%20-%20Copy.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

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