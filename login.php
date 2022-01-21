<?php include('functions.php') ?>
<?php include('loginuser.php') ?>
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
          <script>
            $('#about').click(function(){
              $document.scrollTop(100)
            });
          </script>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="login.php">Login as user</a></li>
              <li><a href="adminLogin.php">Login as admin</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
    </div>
  
  </header><!-- End Header -->
  <div class="main"> 
    <!-- Sign in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="PetVille/assets/img/petshelter.png" alt="sing up image" styles="background: #ced4da" style="max-width:400px"></figure>
                    <a href="signup.php" class="signup-image-link">Don't have an account yet</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign in</h2>
                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="your_name"><i class="fa fa-user"></i></label>
                            <input type="email" name="email" id="email" placeholder="Email" required/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="fa fa-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password" required/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Log in" a href="dashboard.php"/>
                        </div>
                    </form>
                      <div class="social-login">
                          <span class="social-label">Or login with</span>
                          <ul class="socials">
                              <li><a href="#"><i class="fa fa-facebook" style="background:#3c5a99"></i></a></li>
                              <li><a href="#"><i class="fa fa-google" style="background:red"></i></a></li>
                          </ul>
                      </div>
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
        &copy; Copyright <strong><span>Ampon</span></strong>. All Rights Reserved
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