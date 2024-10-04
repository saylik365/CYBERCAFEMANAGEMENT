<?php
 $con=mysqli_connect("localhost", "root", "", "ccmsdb");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cyber Cafe Management Web App</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img1.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Sat : 10.00 am - 10.00 pm </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>internetcafe@gmail.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+91 99999 99999</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i></i>Internet Cafe</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link ">About</a>
                <a href="services.php" class="nav-item nav-link">Service</a>
              <!--  <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Computers</a>
                     <div class="dropdown-menu m-0">
                        <a href="HP.php" class="dropdown-item">HP</a>
                        <a href="Dell.php" class="dropdown-item">DELL</a>
                        <a href="Asus.php" class="dropdown-item">ASUS</a>
                        <a href="Lenovo.php" class="dropdown-item">LENOVO</a>
                    </div>
                </div> -->
                <a href="contact.php" class="nav-item nav-link active">Contact</a>
            </div>
           <!--  <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button> -->
            <!-- <a href="login.php" class="btn btn-primary py-2 px-4 ms-3">User Login</a> -->
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-8" style="background-image: url('internet2.jpg');">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Contact Us</h1>
                <a href="index.php" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="#" class="h4 text-white">Contact</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded h-100 p-5">
                        <div class="section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                            <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Our Office</h5>
                                <span>Ajinkya City,latur(413-512)</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Email Us</h5>
                                <span>internetcafe@gmail.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Call Us</h5>
                                <span>+91 99999 99999</span>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form action="contact.php" method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" name="name" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control border-0 bg-light px-4" name="email" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="number" class="form-control border-0 bg-light px-4" name="contact" placeholder="Contact" style="height: 55px;">
                            </div>
                             <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" name="idp" placeholder="ID Proof" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <!-- <textarea class="form-control border-0 bg-light px-4 py-3" rows="5" name="address" placeholder="Address"></textarea> -->
                                <input type="text" name="address" class="form-control border-0 bg-light px-4 py-3" placeholder="Address">
                            </div>
                             <div class="col-12">
                                    <select class="form-select bg-light border-0" name="computer" style="height: 55px;">
                                        <option selected>Select Computer</option>
                                        <?php $query=mysqli_query($con,"select * from  tblcomputers");
                                  while($row=mysqli_fetch_array($query))
                                  {
                                  ?>    
              <option value="<?php echo $row['ComputerName'];?>"><?php echo $row['ComputerName'];?></option>
                  <?php } ?>  
                                        
                                    </select>
                                </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="save"type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.5650256717217!2d76.56800631513902!3d18.412637515261327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcf83f32596d243%3A0x2d36a7417d5ecdd9!2sAjinkya%20City%2C%20Renuka%20nagar%20Road%2C%20Ambajogai%20Rd%2C%20Sawe%20Wadi%2C%20Latur%2C%20Maharashtra%20413512!5e0!3m2!1sen!2sin!4v1679664640202!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="services.php"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <!-- <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a> -->
                        <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
               <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Computers</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="Asus.php"><i class="bi bi-arrow-right text-primary me-2"></i>ASUS</a>
                        <a class="text-light mb-2" href="HP.php"><i class="bi bi-arrow-right text-primary me-2"></i>HP</a>
                        <a class="text-light mb-2" href="Dell.php"><i class="bi bi-arrow-right text-primary me-2"></i>DELL</a>
                       <!--  <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a> -->
                        <a class="text-light" href="Lenovo.php"><i class="bi bi-arrow-right text-primary me-2"></i>LENOVO</a>
                    </div>
              
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Ajinkya City,latur(413-512)</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>internetcafe@example.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>7276416934</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Internet Cafe</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="#">Group no. 11</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php
if(isset($_POST['save'])) 
{
   $name=$_POST['name'];
    $add=$_POST['address'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $computer=$_POST['computer'];
     $idproof=$_POST['idp'];

   if(mysqli_query($con,"INSERT INTO requsers VALUES('','".$name."','".$add."','".$contact."','".$email."','".$computer."','".$idproof."')"))
   {
      echo "
         <script>
            alert('Request sent  successfully...!!');
            window.location.href='contact.php';
         </script>
      ";
   }
   else
   {
      echo "
         <script>
            alert('Try Again..!!');
            window.location.href='contact.php';
         </script>
      ";
   }
}
?>