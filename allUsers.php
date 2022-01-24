<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "petsociety";
 
$conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

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
<?php	
	$pdo_statement = $conn->prepare("SELECT * FROM users_table ORDER BY user_id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>
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
              <li><a href="viewProducts.php">View Products</a></li>
              <li><a href="viewGroomingCenter.php">View Grooming Center</a></li>
              <li><a href="viewVeterinarian.php">View Veterinarian</a></li>
              <li><a href="viewAnimalShelter.php">View Animal Shelters</a></li>
              <li><a href="viewDropinCenter.php">View Drop in Centers</a></li>
              <li><a href='allUsers.php'>View All Users</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Add</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="store.php">Add Product</a></li>
              <li><a href="grooming_center.php">Add Grooming Center</a></li>
              <li><a href="addUser.php">Add User</a></li>
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
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <p class="card-title"></p>
                    <table class="table table-hover" id="dataTables-example" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Password</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          <style>
                            .img{
                              border-radius: 50%;
                            }
                          </style>
						<?php
							if(!empty($result)) { 
								foreach($result as $row) {
							?>
							<tr class="table-row">
								<td><?php echo $row["user_id"]; ?></td>
                <td><img src="<?php echo (!empty($row["user_profilephoto"]))? ' ' .$row["user_profilephoto"]: 'PetVille/assets/img/defaultuserimg.png'; ?>"class = "img-circle" height="50" width="50"></td>
								<td><?php echo $row["user_username"]; ?></td>
								<td><?php echo $row["user_email"]; ?></td>
								<td><?php echo $row["user_contactnumber"]; ?></td>
								<td><?php echo $row["user_password"]; ?></td>
								<td><a class="ajax-action-links" href='updateUser.php?user_id=<?php echo $row['user_id']; ?>'><button class="btn btn-primary mr-3" name = "edit" id= "edit">Update</button></td>
								<td><a class="ajax-action-links" href='deleteUser2.php?user_id=<?php echo $row['user_id']; ?>'><button class="btn btn-danger" style="color:rgba(255, 255, 255, 255)">Delete</button></td>
							</tr>
							<?php
								}
							}
							?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
  </div>
  
  <!-- Put the dashboard content here -->
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

