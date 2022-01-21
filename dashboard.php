

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
        <li><a class="nav-link scrollto" href="index.php">About Us</a></li>
          <li><a class="nav-link scrollto" href="#about">Pet Store</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>

          <li><a class="nav-link scrollto " href="AdoptPet.php">Adoption</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Drop in Centers</a></li>
          <li><a class="nav-link scrollto active" href=""><i class="fa fa-user-circle" aria-hidden="true" style="font-size:40px"></i></a></li>
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
            width: 250px;
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
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
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
        .container .card:nth-child(4) .petimage{
            background: rgba(77, 5, 232, 1);
            clip-path: circle(70% at 50% 50%);
            position: relative;
            padding: 35px 25px;
            display: inline-block;
        }
        
        .secondcircle{
          background: #rgba(77, 5, 232, 1);
          border: 0.1875em solid #fff;
          border-radius: 50%;
          box-shadow: 0.375em 0.375em 0 0 rgba(15, 28, 63, 0.125);
          height: 5em;
          width: 5em;
          position: relative;
          display: inline-block;
          margin: -75px 10px 65px 160px;
        }

        .heart {
          width:35px;
          background:
          radial-gradient(circle at 60% 65%, white 64%, transparent 65%) top left,
          radial-gradient(circle at 40% 65%, white 64%, transparent 65%) top right,
          linear-gradient(to bottom left, white 43%,transparent 43%) bottom left ,
          linear-gradient(to bottom right,white 43%,transparent 43%) bottom right;
          background-size:50% 50%;
          background-repeat:no-repeat;
          display:inline-block;
          margin: 14px auto 52px auto;
        }

        .heart::before {
          content:"";
          display:block;
          padding-top:100%;
        }
    </style>
    <section id="hero">
    <div class="hero-container">
      <a href="index.html" class="hero-logo" data-aos="zoom-in"><img src="PetVille/assets/img/bluepaw.png" alt=""></a>
      <h1 data-aos="zoom-in">Welcome To Pet Society</h1>
      <h2 data-aos="fade-up">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </h2>
    </div>
  </section><!-- End Hero -->

    <section class="pet-container">
    <div class="section-title" data-aos="fade-up">
          <h2 style = "color:rgba(77, 5, 232, 1)">What are you looking for?</h2>
          <p style = "font-style:italic">Magnam dolores commodi suscipit eius consequatur</p>
          <input type="text" placeholder="Search Product" dir="auto" style="border: 1px solid rgba(0, 0, 0, 0.39); background-color: transparent; box-sizing: border-box; height: 54px; width: 780px; position: relative; vertical-align: top; border-radius: 5px; font-family: Barlow; font-size: 16px; font-weight: 500; color: rgb(153, 153, 153); margin: 30px 0px 0px 295px; padding: 0px 20px;" class="tt-input" autocomplete="off" spellcheck="false" tabindex="13">
        </div>
        
        <div class="container" data-aos="fade-up">
            <div class="card">
                <div class="petimage">
                    <img src="PetVille/assets/img/dogone.jpg">
                </div>
                <div class="circle"></div>
                <div class="secondcircle" style="top: -10px">
                  <div class="heart" id="heart"></div>
                </div>
                <div class="content">
                  <p>Shop for Dogs</p>
                  <a href="doginfo.php">Read More</a>
                </div>    
            </div>
            <div class="card">
                <div class="petimage">
                    <img src="PetVille/assets/img/dogone.jpg">
                </div>
                <div class="circle"></div>
                <div class="secondcircle" style="top: -10px">
                  <div class="heart" id="heart"></div>
                </div>
                <div class="content">
                  <p>Shop for Cats</p>
                  <a href="#">Read More</a>
                </div>    
            </div>
            <div class="card">
                <div class="petimage">
                    <img src="PetVille/assets/img/dogone.jpg">
                </div>
                <div class="circle"></div>
                <div class="secondcircle" style="top: -10px">
                  <div class="heart" id="heart"></div>
                </div>
                <div class="content">
                  <p>Shop for Fish</p>
                  <a href="#">Read More</a>
                </div>    
            </div>
            <div class="card">
              <div class="petimage">
                <img src="PetVille/assets/img/paw.png" style="height: 150px">
              </div>
              <div class="circle"></div>
              <div class="content">
                <a href="#">Find More Available Pets</a>
                <p>Save a Pet</p>
              </div>
            </div>
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