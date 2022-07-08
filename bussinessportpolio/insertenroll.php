<?php 

$database="localhost";
$dbusername="root";
$dbpass="";
$dbname="bussinessportpolio";

$con=mysqli_connect($database,$dbusername,$dbpass,$dbname);

?>


<?php

include'connect.php';

if (isset($_POST['submit'])) {
	$FirstName = $_POST['firstname'];
	$LastName  = $_POST['lastname'];
	$email     = $_POST['email'];
	$pass      = $_POST['password'];
	$number    = $_POST['number'];
	$gender    = $_POST['gender'];
	$education = $_POST['education'];
	$branch    = $_POST['specialization'];
	$course    = $_POST['course'];
	$address   = $_POST['address'];


	$query = "INSERT INTO `enrollform`(`firstname`, `lastname`, `email`, `password`, `contact`, `gender`, `education`, `branch`, `course`, `address`) VALUES ('$FirstName','$LastName','$email','$pass','$number','$gender','$education','$branch','$course','$address')";

	$SQL = mysqli_query($con,$query);

	if ($SQL) {
		header('location:insertenroll.php');
		echo "successfully inserted data.....";
	}
	else{
		echo "error in insert form.....";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>succsessfully--Enroll|Now-Your dream course </title>
     <link rel="icon" type="text/css" href="img/success.png">
    <link rel="icon" type="text/css" href="img/success.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End -->



    <!-- Brand & Contact Start -->
    <div class="container-fluid py-4 px-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row align-items-center top-bar">
            <div class="col-lg-4 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
                    <h1 class="fw-bold text-primary m-0"><img src="img/logocoding.png" style="width: 70px; height: 70px; margin-left: 10px;">JITU-CodingClass</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
            </div>
        </div>
     </div>
   
    <!-- Brand & Contact End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn navbar-active" data-wow-delay="0.1s">
        <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto p-3 p-lg-0">
                <a href="index.php" class="nav-item nav-link active" target="_blank">Home</a>
            </div>
            <!-- <a href="login.php" class="btn btn-sm btn-outline-light">Login</a> -->
       
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">Enroll Now for your Course</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- successfully registration Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <img src="img/success.png" style="width: 150px; height: 150px;">
                    <h1 class="display-1">Successfully</h1>
                    <h1 class="mb-4">Eroll Your Response</h1>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="index.php">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- successfully registration End -->
       
   <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Madhuban apartment 6 floor, New Bidipeth,Nagpur - 440024</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 8483931721</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>jaypardhi@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href="https://www.facebook.com/jiten.pardhi.3/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-0" href="https://www.linkedin.com/in/jitendra-pardhi-2a699b22b/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="about.php" target="_blank">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
        </div>
    </div>
    <!-- Footer End -->

   

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>