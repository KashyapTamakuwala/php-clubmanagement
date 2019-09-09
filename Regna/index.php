<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Club Management System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/clublogo3.gif" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#amenities">Amenities</a></li>
          <li><a href="#activities">Activities</a></li>
          <li class="menu-has-children"><a href="">Membership</a>
            <ul>
              <li><a href="/clubmanagement/Regna/sign-up-form/register.php">Become a member?</a></li>
            
              <!-- <li><a href="#">Membership Information</a></li> -->
              <!-- <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li> -->
            </ul>
          </li>
          <li><a href="/clubmanagement/php/timeline.php">Plan your day</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <?php
            if(isset($_SESSION["username"]))
            {
              $msg=$_SESSION["username"];
              $msg1="LOGOUT";
              echo "<li> <button type='button' class='btn btn-lg btn-success disabled ' >$msg";
              echo"</button><li>";
              echo "<li> <button type='button' class='btn btn-lg btn-danger disabled ' > <a href='/clubmanagement/Logout.php/'> $msg1 </a> ";
              echo"</button><li>";
 
            }
            else
            {
              $msg="LOGIN";
              
              echo "<li> <button type='button' class='btn btn-lg btn-success disabled ' > <a href='/clubmanagement/Login/'> $msg </a> ";
              echo"</button><li>";
             
            }
          ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to Regna</h1><br><br>
      <a href="/clubmanagement/Regna/sign-up-form/register.php" class="btn-get-started">Become a member?</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    

    <section id="amenities">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Amenities</h3>
          <p class="section-description"></p>
        </div>
        <div class="row">

          

        <div class="row" id="amenities-wrapper">
          <div class="col-lg-3 col-md-6 amenities-item filter-app">
            <a href="/clubmanagement/risotto/">
              <img src="img/resimages/blog02.jpg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>French</h4>
                <!-- <span>Alored dono par</span> -->
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 amenities-item filter-web">
            <a href="/clubmanagement/risotto/">
              <img src="img/resimages/background03.jpg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>Mexican</h4>
                <!-- <span>Alored dono par</span> -->
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 amenities-item filter-app">
            <a href="/clubmanagement/risotto/">
              <img src="img/resimages/background02.jpg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>Italian</h4>
                <!-- <span>Alored dono par</span> -->
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 amenities-item filter-card">
            <a href="/clubmanagement/risotto/">
              <img src="img/resimages/background01.jpg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>Indian</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 amenities-item filter-card">
            <a href="/clubmanagement/theriver/">
              <img src="img/hotelimages /images/booking_3.jpg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>Basic Rooms</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 amenities-item filter-web">
            <a href="/clubmanagement/theriver/">
              <img src="img/hotelimages /images/booking_1.jpg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>Deluxe Rooms</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 amenities-item filter-card">
            <a href="/clubmanagement/theriver/">
              <img src="img/hotelimages /images/booking_2.jpg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>Super Deluxe Rooms</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 amenities-item filter-app">
            <a href="/clubmanagement/theriver/">
              <img src="img/hotelimages /images/booking.jpg" height="200px" width="280px" alt="">              <div class="details">
                <h4>Suite</h4>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section>
    
    <!--==========================
      activities Section
    ============================-->
    <section id="activities">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Activities</h3>
          <p class="section-description"></p>
        </div>
        <div class="row">

        
        <div class="row" id="activities-wrapper">
          <div class="col-lg-3 col-md-6 activities-item filter-app">
            <a href="/clubmanagement/fitnessgym/">
              <img src="img/gym/breadcumb-2.jpg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>Power Lifting</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 activities-item filter-web">
            <a href="/clubmanagement/fitnessgym/">
              <img src="img/gym/bg-14.jpg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>Calisthenics</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 activities-item filter-app">
            <a href="/clubmanagement/fitnessgym/">
              <img src="img/gym/bg-11.jpg" height="200px" width="280px" alt="">
              <div class="details">
              <h4>Bosu Training</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 activities-item filter-card">
            <a href="/clubmanagement/fitnessgym/">
              <img src="img/gym/breadcumb.jpg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>Weightlifting</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 activities-item filter-card">
            <a href="/clubmanagement/fitnessgym/swimming.php">
              <img src="img/gym/swim4.jpeg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>Deep Diving</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 activities-item filter-web">
            <a href="/clubmanagement/fitnessgym/swimming.php">
              <img src="img/gym/swim3.jpeg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>Water Polo</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 activities-item filter-card">
            <a href="/clubmanagement/fitnessgym/swimming.php">
              <img src="img/gym/swim2.jpeg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>Free Diving</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 activities-item filter-app">
            <a href="/clubmanagement/fitnessgym/swimming.php">
              <img src="img/gym/swim1.jpeg" height="200px" width="280px" alt="">
              <div class="details">
                <h4>Scuba Diving</h4>
              </div>
            </a>
          </div>


        </div>

      </div>
    </section><!-- #activities -->

    
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description"></p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.300231767477!2d72.87822071496154!3d22.679864785127727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e5adf306c3b87%3A0xda70cb93d6f36113!2sFaculty+Of+Technology+DDIT!5e0!3m2!1sen!2sin!4v1552409700680" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>College Road<br>Nadiad, Gujarat 387001</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>8758845172</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna Club</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Designed by <b>Anshuman Aich</b> & <b>Kashyap Tamabakkuwala</b>
      </div>
    </div>
  </footer><!-- #footer -->
  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
