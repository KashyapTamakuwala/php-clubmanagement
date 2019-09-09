<?php
session_start();
if(isset($_SESSION["username"]))
{
    if(isset($_POST['submit']))
    {
        try{
            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=CLUB','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $name=$_POST['name'];
            $email=$_POST['email'];
            $number=$_POST['number'];
            $mid=$_POST['mid'];
            $date = $_POST['date'];
            $time=$_POST['time'];
            $sql="insert into gymreq (name,emailid,phonenumber,timing,mid,gym_date) values ('".$name."','".$email."','".$number."','".$time."','".$mid."','".$date."')";
            $query=$dbhandler->query($sql);
            
            
        }
        catch(PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
}

else
{
    header("Location:/clubmanagement/Login/");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Fitness Gym </title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="fitness-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="fitnessNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/clubmanagement/regna/">Home</a></li>
                                    <li><a href="#Newsletterform">GYM BOOKING</a></li>

                                </ul>

                                <!-- Call Button -->
                                <a href="#" class="fitness-btn menu-btn ml-30">Call: 9157370242</a>
                                <a href="/clubmanagement/logout.php/" class="fitness-btn menu-btn ml-30">Logout</a>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Get fit &amp; healthy.</h2>
                                <p data-animation="fadeInUp" data-delay="400ms">HII</p>
                                <a href="#Newsletterform" class="btn fitness-btn wel-btn" data-animation="fadeInUp" data-delay="700ms">Book GYM</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Long life Fitness.</h2>
                                <p data-animation="fadeInUp" data-delay="400ms">kashayp</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Fitness wonder.</h2>
                                <p data-animation="fadeInUp" data-delay="400ms">TAMAKUWALA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Fitness Adds Area Start ##### -->
    <div class="fitness-adds-area">
        <div class="container">
            <div class="row">

                <!-- Single Add Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-add-area mt-100">
                        <a href="#"><img src="img/bg-img/add1.gif" alt=""></a>
                    </div>
                </div>

                <!-- Single Add Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-add-area mt-100">
                        <a href="#"><img src="img/bg-img/add2.png" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Fitness Adds Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h6>Fitness Gym</h6>
                        <h2>Why choose Fitness Gym?</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <!-- About Text -->
                        <div class="col-12 col-lg-6">
                            <div class="about-text">
                                <p>first para</p>
                            </div>
                        </div>
                        <!-- About Text -->
                        <div class="col-12 col-lg-6">
                            <div class="about-text">
                                <p>second para</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="about-thumb">
                        <img src="img/bg-img/man.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Experts Area Start ##### -->
    <div class="meet-the-experts-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-6.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <h6>Fitness Gym</h6>
                        <h2>Ask the experts</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="experts-text">
                        <p>Donec id mattis est. Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id. Nullam vulputate a lectus non molestie.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="experts-team-members">

                        <!-- Single Team Members -->
                        <div class="single-team-members wow fadeInUp" data-wow-delay="0.2s">
                            <img src="img/team-img/1.png" alt="">
                            <!-- Team Members Info -->
                            <div class="team-members-info">
                                <h3>Julia Smith</h3>
                                <h6>Personal trainer</h6>
                            </div>
                        </div>

                        <!-- Single Team Members -->
                        <div class="single-team-members wow fadeInUp" data-wow-delay="0.3s">
                            <img src="img/team-img/2.png" alt="">
                            <!-- Team Members Info -->
                            <div class="team-members-info">
                                <h3>Mick Hamilton</h3>
                                <h6>Personal trainer</h6>
                            </div>
                        </div>

                        <!-- Single Team Members -->
                        <div class="single-team-members wow fadeInUp" data-wow-delay="0.4s">
                            <img src="img/team-img/3.png" alt="">
                            <!-- Team Members Info -->
                            <div class="team-members-info">
                                <h3>Jack Black</h3>
                                <h6>Personal trainer</h6>
                            </div>
                        </div>

                        <!-- Single Team Members -->
                        <div class="single-team-members wow fadeInUp" data-wow-delay="0.5s">
                            <img src="img/team-img/4.png" alt="">
                            <!-- Team Members Info -->
                            <div class="team-members-info">
                                <h3>Criss James</h3>
                                <h6>Fitness trainer</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Experts Area End ##### -->

    <!-- ##### Service Area Start ##### -->
    <div class="fitness-services-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="course-content d-flex align-items-center">
                            <!-- Course Icon -->
                            <div class="course-icon d-flex align-items-center justify-content-center">
                                <img src="img/core-img/dumbbell.png" alt="">
                            </div>
                            <h4>Business School</h4>
                        </div>
                        <p>Donec id mattis est. Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="course-content d-flex align-items-center">
                            <!-- Course Icon -->
                            <div class="course-icon d-flex align-items-center justify-content-center">
                                <img src="img/core-img/slim-down.png" alt="">
                            </div>
                            <h4>Fitness Pro</h4>
                        </div>
                        <p>Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="course-content d-flex align-items-center">
                            <!-- Course Icon -->
                            <div class="course-icon d-flex align-items-center justify-content-center">
                                <img src="img/core-img/lotus-position.png" alt="">
                            </div>
                            <h4>Yoga Courses</h4>
                        </div>
                        <p>Nullam vulputate a lectus non molestie. Duis at lobortis neque, in maximus leo. Donec nec blandit ex, in finibus tortor.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="course-content d-flex align-items-center">
                            <!-- Course Icon -->
                            <div class="course-icon d-flex align-items-center justify-content-center">
                                <img src="img/core-img/apple.png" alt="">
                            </div>
                            <h4>Diet Specialists</h4>
                        </div>
                        <p>Donec id mattis est. Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="course-content d-flex align-items-center">
                            <!-- Course Icon -->
                            <div class="course-icon d-flex align-items-center justify-content-center">
                                <img src="img/core-img/stationary-bike.png" alt="">
                            </div>
                            <h4>Spinning Class</h4>
                        </div>
                        <p>Nullam vulputate a lectus non molestie. Duis at lobortis neque, in maximus leo. Donec nec blandit ex, in finibus tortor.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Service Area End ##### -->

    <!-- ##### Pricing Table Area Start ##### -->
    <div class="fitness-pricing-table-area section-padding-100-0 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/bg-7.jpg);">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Single Price Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-table mb-100">
                        <img src="img/bg-img/bg-8.jpg" alt="">
                        <div class="price-table-content">
                            <!-- price -->
                            <h2 class="price">
                                $50<span>/ Month</span>
                            </h2>
                            <h5>Woman Fitness Class</h5>
                            <!-- Price Data -->
                            <ul class="price-data">
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Donec molestie tincidunt tellus</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Sit amet aliquet auctor nisi</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Dut purus eleifentincid</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Single Price Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-table mb-100">
                        <img src="img/bg-img/bg-9.jpg" alt="">
                        <div class="price-table-content">
                            <!-- price -->
                            <h2 class="price">
                                $70<span>/ Month</span>
                            </h2>
                            <h5>Spinning Class + BONUS</h5>
                            <!-- Price Data -->
                            <ul class="price-data">
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Donec molestie tincidunt tellus</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Sit amet aliquet auctor nisi</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Dut purus eleifentincid</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Single Price Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-table mb-100">
                        <img src="img/bg-img/bg-10.jpg" alt="">
                        <div class="price-table-content">
                            <!-- price -->
                            <h2 class="price">
                                $90<span>/ Month</span>
                            </h2>
                            <h5>All Inclusive Gym</h5>
                            <!-- Price Data -->
                            <ul class="price-data">
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Donec molestie tincidunt tellus</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Sit amet aliquet auctor nisi</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Dut purus eleifentincid</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Pricing Table Area End ##### -->

    <!-- ##### Working Hours Area Start ##### -->
    <div class="fitness-working-hours-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- Fitness Working Hours -->
                <div class="col-12 col-lg-6">
                    <div class="fitness-working-hours mb-100">
                        <div class="section-heading">
                            <h6>Fitness Gym</h6>
                            <h2>Working Hours</h2>
                        </div>
                        <!-- Working Hours -->
                        <ul class="working-hours">
                            <li><span>Monday</span> <span>16:00 - 20:00</span></li>
                            <li><span>Tuesday</span> <span>12:00 - 20:00</span></li>
                            <li><span>Wednesday</span> <span>12:00 - 20:00</span></li>
                            <li><span>Thursday</span> <span>12:00 - 20:00</span></li>
                            <li><span>Friday</span> <span>15:00 - 21:00</span></li>
                            <li><span>Saturday</span> <span>10:00 - 20:00</span></li>
                            <li><span>Sunday</span> <span>Closed</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Our Newsletter Area -->
                <div class="col-12 col-lg-6" id="Newsletterform">
                    <div class="our-newsletter-area mb-100">
                        <div class="section-heading">
                            <h6>Fitness Gym</h6>
                            <h2>GYM BOOKING</h2>
                        </div>

                        <!-- Newsletter Form -->
                        <form action="" method="post" >
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Your E-mail">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="number" id="number"  placeholder="PHONE NUMBER">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="mid" id="mid"  placeholder="MEMBERSHIP ID">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="date" id="date"  placeholder="Date">
                            </div>
                            <div class="form-group">
                                <input type="time" class="form-control" name="time" id="time"  placeholder="Timing">
                            </div>
                            <button type="submit" name="submit" value="submit" class="btn fitness-btn btn-white mt-50">submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Working Hours Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-11.jpg);">

        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget-area mb-50">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <p class="mb-30">Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id. Nullam vulputate a lectus non molestie. Duis at lobortis neque.</p>
                            <!-- Social Info -->
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget-area mb-50">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>testimonials</h6>
                            </div>

                            <!-- Testimonials Slides -->
                            <div class="testimonials-slides owl-carousel">

                                <div class="single-slide">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>“ Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus</p>
                                        <span>Michael Smith</span>
                                    </div>
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>“ Molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus</p>
                                        <span>Julia Williams</span>
                                    </div>
                                </div>

                                <div class="single-slide">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>“ Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus</p>
                                        <span>Michael Smith</span>
                                    </div>
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>“ Molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus</p>
                                        <span>Julia Williams</span>
                                    </div>
                                </div>

                                <div class="single-slide">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>“ Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus</p>
                                        <span>Michael Smith</span>
                                    </div>
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>“ Molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus</p>
                                        <span>Julia Williams</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget-area mb-50">
                            <div class="widget-title">
                                <h6>Classes</h6>
                            </div>

                            <nav>
                                <ul class="fitness-classes">
                                    <li><p>Bodybuilding Class</p></li>
                                    <li><p>Fitness Class</p></li>
                                    <li><p>Yoga Courses</p></li>
                                    <li><p>Dumbell Class</p></li>
                                    <li><p>Spinning Class</p></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget-area mb-50">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>

                            <!-- Single Contact -->
                            <div class="single-contact mb-30">
                                <span>Address:</span>
                                <p>481 Creekside Lane Avila <br>Beach, CA 93424</p>
                            </div>

                            <!-- Single Contact -->
                            <div class="single-contact mb-30">
                                <span>Phone:</span>
                                <p>+53 345 7953 32453</p>
                            </div>

                            <!-- Single Contact -->
                            <div class="single-contact mb-30">
                                <span>Email:</span>
                                <p>yourmail@gmail.com</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Live Chat Code :: Start of Tawk.to Script -->
    <script>
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5b55ea72df040c3e9e0bdf85/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!-- End of Tawk.to Script -->
</body>

</html>