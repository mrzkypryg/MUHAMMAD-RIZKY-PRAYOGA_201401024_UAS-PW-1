<?php         
    include ('includes/koneksi.php');
    if ($_SESSION['level']=="admin")
    {           
       header("location:admin/admin.php");
    }         
    else if ($_SESSION['level']==""){           
        header("location:index.php?pesan=gagal");
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
          <li><a href="index.php">Home</a></li>
          <li><a class="active" href="about.php">About</a></li>
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


  <main id="main">

    <!-- ======= Features Section ======= -->

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
                <h1 data-aos="fade-up" data-aos-delay="">R NEWS</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Your favorite news site</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
      
    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 me-auto">
            <h2 class="mb-4">The Most Complete News Category</h2>
            <p class="mb-4">R News provides news with the most complete variety of categories.</p>
            <p><a href="news.php">Read Now</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <img src="assets/img/about1.png" alt="Image" class="img-fluid" width="80%">
          </div>
        </div>
      </div>
      </section>


    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 ms-auto order-2">
            <h2 class="mb-4">Get the latest news</h2>
            <p class="mb-4">Our news site provides the latest news from all over the world!.</p>
            <p><a href="news.php">Read Now</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="assets/img/about3.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section class="section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 me-auto">
            <h2 class="mb-4">Written by a professional writer</h2>
            <p class="mb-4">The news we provide comes from professional writers. We provide all the best news for you.</p>
            <p><a href="news.php">Read Now</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <img src="assets/img/About2.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 ms-auto order-2">
            <h2 class="mb-4">Trusted </h2>
            <p class="mb-4">All news comes from reliable sources written by our professional team. We'll do our best for you!.</p>
            <p><a href="#">Read Now</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="assets/img/about4.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

      
    <section>
      <center>
        <h3 class="section-heading">Developer</h3><br>
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="img/Rizky.jpg" alt="Card image cap">
        <div class="card-body">
              <h4>Muhammad Rizky Prayoga</h4>
               <p>NIM   : 201401024 <br> Prodi : Ilmu Komputer-USU</p>
        </div>
        </div><br><br>
      </center>
      </section>
      
      
    <!-- ======= Testimonials Section ======= -->
    <section class="section border-top border-bottom">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Review From Our Users</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-7">

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                    </p>
                    <h3>Excellent!</h3>
                    <blockquote>
                      <p>Jangan ragu dengan R NEWS sebab situs mereka dirancang oleh tim yang handal dan berkualitas. Selain itu konten berita yang ditampilkan juga terpercaya dan up to date.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/fasilkomti.png" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Prof. Dr. Drs. Opim Salim Sitompul M.Sc</span>, &mdash; User
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Trusted News Site!</h3>
                    <blockquote>
                      <p> R NEWS merupakan salah satu contoh situs berita yang mampu memberikan berita-berita baik dari dalam negeri maupun dari berbagai penjuru dunia yang berkualitas dan terpercaya.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/aisyah.jpeg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Aisyah</span>, &mdash; User
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Awesome functionality!</h3>
                    <blockquote>
                      <p>Meski masih tergolong baru namun R NEWS mampu membuktikan kualitasnya, berita yang disajikan tidak kalah kualitasnya dengan berita-berita yang diterbitkan oleh situs-situs berita ternama di Indonesia.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/rektorusu.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Dr Muryanto Amin</span>, &mdash; User
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
            <h2>Read R NEWS Now!</h2>
          </div>
          <div class="col-md-5 text-center text-md-end">
           <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="news.php" class="btn btn-outline-white">Let's Go !</a></p>
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

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