<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pet Society</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="PetVille/assets/img/bluepaw.png" rel="icon">
  <link href="PetVille/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="PetVille/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="PetVille/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="PetVille/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="PetVille/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="PetVille/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link href="PetVille/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <!-- Template Main CSS File -->
  <link href="PetVille/assets/css/style.css" rel="stylesheet">
  <link href="PetVille/assets/css/login.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Hero Section ======= -->
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.html"><img src="PetVille/assets/img/bluepaw.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="sidebar" class="sidebar">
      </nav>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Lorem</a></li>
          <li><a class="nav-link scrollto" href="#services">Ipsum</a></li>

          <li><a class="nav-link scrollto " href="#Announcement">Dolor</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Donate</a></li>
          <li><a class="nav-link scrollto active" href="" data-toggle="modal" data-target="#loginModal">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
    </div>
  
  </header><!-- End Header -->
  <div class="main"> 
    <!-- Put the dashboard content here -->
    <style>
        .container .card{
            position: relative;
            width: 100%;
            height: 320px;
            background: #fff;
            margin: 10px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
            transition: 0.5s;
            display: inline-block;
            
        }

        .container .card .petimage{
            position: relative;
            width: 100%;
            height: 100%;
            text-align: left;
            margin: 20px 0;
        }

        .container .card:hover{
            filter: blur(0px);
            transform: scale(1.1);
            opacity: 1;
            cursor: pointer;
        }

        
        .container .card .circle {
            position: relative;
            width: 100%;
            height: 100%;
            background: rgba(77, 5, 232, 1);
            clip-path: circle(70% at 50% 125%);
            text-align: center;
        }

        .container .card .circle h2 {
            color: #fff;
            font-size: 4.5em;
            padding: 30px 0;
        }

        .container .card .content{
            position: absolute;
            bottom: 10px;
            padding: 20px;
            text-align: center;
        }

        

        .container .card .content p{
            color: #fff;
            text-align: center;
            margin: auto;
            position: relative;
            display: inline-block;
            padding: 10px 5px;
            margin: auto auto -35px 8.2rem;
            font-size: 14px;
        }

        .container .card .content h2 {
          font-size: 12px;
          position: fixed;
          font-weight: normal; 
          text-align: center;
          height: 100%;
          width: auto;
          margin: -205px  20px 80px 8.2rem;
          margin-left: 150px;
          padding: 10px 5px;
    
        }
        
        .container .card .content a{
            position: relative;
            display: inline-block;
            padding: 5px 20px;
            background: rgba(77, 5, 232, 1);
            color: #fff;
            border-radius: 40px;
            text-decoration: none;
            margin-top: 10px;
            text-align: right;
            
            /* background: url("../img/dogone.jpg") no-repeat; */
        }

        

        .container .card:nth-child(1) .circle,
        .container .card:nth-child(1) .content a{
            background: rgba(77, 5, 232, 1);
        }

        .container .card:nth-child(2) .circle,
        .container .card:nth-child(2) .content a{
            background: rgba(77, 5, 232, 1);
        }

        .container .card:nth-child(3) .circle,
        .container .card:nth-child(3) .content a{
            background: rgba(77, 5, 232, 1);
        }

        .container .card:nth-child(4) .circle,
        .container .card:nth-child(4) .content a,
        .container .card:nth-child(4) .content p,
        .container .card:nth-child(4) .petimage{
            background: rgba(77, 5, 232, 1);
            clip-path: circle(70% at 50% 50%);
            position: relative;
            padding: 35px 25px;
            display: inline-block;
            text-align: center;
            margin: 0 auto;
        }
    </style>
    <section class="pet-container">
    <div class="section-title" data-aos="fade-up">
      <h2 style = "color:rgba(77, 5, 232, 1)">Veterinary Clinics</h2>
      <p style = "font-style:italic">Magnam dolores commodi suscipit eius consequatur</p>
    </div>
    <div class="container" data-aos="fade-up">      
      <div class="card">
        <div class="petimage">
          <img src="PetVille/assets/img/qmark.png" style="height:200px">
        </div>
        <div class="content">
          <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt error aut ut laborum. Placeat nostrum inventore hic illum aut. Iusto perspiciatis odit esse atque ea, totam non omnis nostrum consequatur!</h2>
          <a href="doginfo.php">Read More</a>
        </div>
        <div class="vet-links">
          <i class="fas fa-facebook"></i>
        </div>        
      </div>
    </div>
    </section>
    <section id="services" class="services">
      <div class="container" style="position:fixed">
        <div class="section-title" data-aos="fade-up">
          <h2 style="color: rgba(77, 5, 232, 1)">Plan to help?</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>
        <div class="row">

        </div>
      </div>
    </section>
</div>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <a href="#header" class="scrollto footer-logo"><img src="PetVille/assets/img/bluepaw.png" alt=""></a>
            <h3>Pet Society</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
          </div>
        </div>
        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Pet Society</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-free-bootstrap-theme/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->
  


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background:blue"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="PetVille/assets/vendor/aos/aos.js"></script>
  <script src="PetVille/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="PetVille/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="PetVille/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="PetVille/assets/vendor/php-email-form/validate.js"></script>
  <script src="PetVille/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>

  <!-- Template Main JS File -->
  <script src="PetVille/assets/js/main.js"></script>

</body>

</html>