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
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="news.php">News</a></li>
          <li><a class="active" href="contact.php">Contact Us</a></li>
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
                <h1 data-aos="fade-up" data-aos-delay="">Get in touch</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="section">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>Contact Form</h2>
            <p class="mb-0">All forms of questions, suggestions and criticisms we really expect from you. Please submit it in the form below.</p>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4 ms-auto order-2" data-aos="fade-up">
            <ul class="list-unstyled">
              <li class="mb-3">
                <strong class="d-block mb-1">Address</strong>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15928.44801737182!2d98.64758752581854!3d3.561675958528512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fe03ed8450b%3A0xe84941c195268efc!2sUniversity%20of%20Sumatera%20Utara!5e0!3m2!1sen!2sid!4v1621525697111!5m2!1sen!2sid" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Phone</strong>
                <span>+62 821 6265 3958</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Email</strong>
                <span>mrpharyga2019@gmail.com</span>
              </li>
            </ul>
          </div>

          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <form action="#"  role="form">

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" name="userName" id="userName" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" name="userEmail" id="userEmail" required>
                </div>
                <div class="col-md-12 form-group mt-3">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="col-md-12 form-group mt-3">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="content" id="content" required></textarea>
                  </div>

                <div class="col-md-6 form-group">
                    <br>
                  <input type="submit" name="send" class="btn btn-primary d-block w-100" value="Send Message">
                </div>
    
              </div>

            </form>
          </div>

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

  <!--FORM-->
     <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
        </script>

</body>

</html>