<?php require_once('reguser.php') ?>

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
  <link href="PetVille/assets/css/myprofile.css" rel="stylesheet">


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
        <li class="dropdown"><a href="#"><span>View</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">View Products</a></li>
              <li><a href="#">View Grooming Center</a></li>
              <li><a href="#">View Veterinarian</a></li>
              <li><a href="#">View Animal Shelters</a></li>
              <li><a href="#">View Drop in Centers</a></li>
              <li><a href='allUsers.php'>View All Users</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Add</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="store.php">Add Product</a></li>
              <li><a href="grooming_center.php">Add Grooming Center</a></li>
              <li><a href="Veterinarians.php">Add Veterinarian</a></li>
              <li><a href="Animal_boarding.php">Add Animal Shelters</a></li>
              <li><a href="Drop_in_center.php">Add Drop in Centers</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>ADMIN</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="myprofile">My Profile</a></li>
              <li><a href="logout.php">Log Out</a></li>
            </ul>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
    </div>
  
  </header><!-- End Header -->
  <div class="main"> 
    <!-- Put the dashboard content here -->
    <form method="POST" class="add-animal-boarding-form" id="add-animal-boarding-form">
      <div class="wrapper bg-white mt-sm-5">
      <h4 class="pb-4 border-bottom">Add User</h4>
        <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
        <style>
          #img-section {
            display: inline-block;
            position: relative;
            overflow: hidden;
            cursor:pointer;
          }
          #img-section input[type=file] {
            left: 0;
            top: 0;
            opacity: 0;
            position: absolute;
            font-size: 90px;
            cursor:pointer;
          }
          .btn-upload {
            background-color: #fff;
            border: 3px solid #000;
            color: #000;
            padding: 10px 25px;
            border-radius: 10px;
            font-size: 22px;
            font-weight: bold;
            cursor:pointer;
          }
        </style>
            <div class="pl-sm-4 pl-2" id="img-section"> <b>image of the User</b>
                <p>Accepted file type .png .jpg .jpeg Less than 1MB</p> 
                <button class="btn button border"><b>Choose File</b></button>
                <input type="file" name="animal_boarding_img" multiple>
            </div>
        </div>
        <div class="py-2">
          <div class="row py-2">
              <div class="col-md-6"> <label for="animal_boarding_name">Username</label> <input type="text" name = "user_username" class="bg-light form-control" placeholder="Username"> </div>
              <div class="col-md-6 pt-md-0 pt-3"> <label for="animal_boarding_contact_number">Contact Number</label> <input type="text" name = "user_contactnumber" class="bg-light form-control" placeholder="Contact Number"> </div>
          </div>
          <div class="row py-2">
              <div class="col-md-6"> <label for="animal_boarding_location">Email</label> <input type="text" name = "user_email" class="bg-light form-control" placeholder="Email"> </div>
              <div class="col-md-6 pt-md-0 pt-3"> <label for="animal_boarding_email">Password</label> <input type="password" name = "user_password" class="bg-light form-control" placeholder="Password"> </div>
          </div>
         
          <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3" name = "submit" id= "submit">Submit</button> <button class="btn border button">Cancel</button> </div>
          
            </form>
      </div>
  </div>
    </form>
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