<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboad</title>
    <link rel="stylesheet" href="CSS/dashstyles.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>

<body>
<header id="header" class="fixed-top d-flex align-items-center bg-primary ">
    <div class="container d-flex bg-primary">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="images/comp1.jpg" alt="" width="100" height="80" class="d-inline-block align-text-top">
                </a>
                <a class="navbar-brand" href="#">
                    <br>GKaD Electronics <br>Solutions
                </a>
            </div>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active " href="#hero">Home</a></li>
                        <li><a class="nav-link active" href="#about">About</a></li>
                        <li><a class="nav-link active" href="#services">Services</a></li>
                        <li><a class="nav-link active " href="#products">Products</a></li>
                        <li><a class="nav-link active" href="#team">Team</a></li>
                        <li><a class="nav-link active" href="#contact">Contact</a></li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle float-end" href="#" id="navbarDropdownMenuLink"  role="button"  data-bs-toggle="dropdown" aria-expanded="false" >
                                Log in
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="Admin_login.php">Admin</a></li>
                                <li><a class="dropdown-item" href="customer_login.php">Customer</a></li>
                            </ul>
                        </li>



                    </ul>

                </div>

            </div>


        </nav><!-- .navbar -->
    </div>
</header>

<br>
<br>
<br>
<br>
<br>
<main id="main">


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <center> <h4>ABOUT</h4></center>

                <p>Gkad ia a company that offers you affodable services whenever you need it..</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <img src="images/assembling-and-service.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>The best services.</h3>
                    <p class="fst-italic">
                        That will Give you a long term solution
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> High Quality Products.</li>
                        <li><i class="bi bi-check-circle"></i> Less cost.</li>
                        <li><i class="bi bi-check-circle"></i> Free delivary on all products.</li>
                    </ul>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Cards Section ======= -->
    <section id="cards" class="cards">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="card">
                        <img src="images/products/customer%20sert.jpg." class="card-img-top" alt="...">
                        <div class="card-body">

                            <p class="card-text">Ensuaring that our customers are well Served</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="card">
                        <img src="images/products/educating.jpg" class="card-img-top" alt="...">
                        <div class="card-body">

                            <p class="card-text">Educating others</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="card">
                        <img src="images/Gmachine.jpg" class="card-img-top" alt="...">
                        <p class="card-text">Team Building</p>
                    </div>
            </div>

        </div>
    </section><!-- End Cards Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title m-3">
                <center>  <h4>Services</h4> </center>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="bi bi-briefcase"></i>
                        <h4><a href="#">Repair Services</a></h4>
                        <p>we do repair services of all machines</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-card-checklist"></i>
                        <h4><a href="#">Hardware trableshooting</a></h4>
                        <p> we make sure your hardware is well working</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-bar-chart"></i>
                        <h4><a href="#">Software Instalation</a></h4>
                        <p>We install softawares at an affortable prices</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-binoculars"></i>
                        <h4><a href="#">Sales</a></h4>
                        <p>We sale bath New and refurbished Labtops and CPU</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->


    <!-- ======= Portfolio Section ======= -->
    <section id="Products" class="products">
        <div class="container">

            <div class="section-title">
                <h2>Products</h2>
                <p>Products tha we sell.</p>
            </div>



            <div class="row product-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="images/products/2.png" class="img-fluid" alt="">

                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="images/products/3.png" class="img-fluid" alt="">

                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="images/products/5.png" class="img-fluid" alt="">

                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="images/products/hd.jpg" class="img-fluid" alt="">

                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="images/products/matherboard.jpg" class="img-fluid" alt="">

                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="images/products/ram.jpg" class="img-fluid" alt="">

                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="images/products/4.webp" class="img-fluid" alt="">

                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="images/products/6.webp" class="img-fluid" alt="">

                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="images/products/pws.jpg" class="img-fluid" alt="">

                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title">
                <center>
                    <h4>Team</h4>
                </center>

                <p>This is our able team that is resposnsiple for your work</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="images/teams/Founders.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="member-info">
                            <h4>Gilbert & Kagwe & Dickson</h4>
                            <span>Founders</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="images/teams/Dicson.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="member-info">
                            <h4>Dickson Kibet</h4>
                            <span>Admin</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                       <div class="member-img">
                            <img src="images/teams/gilbert.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="member-info">
                            <h4>Olekaka Gilbert</h4>
                            <span>Hardware Technician</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="images/teams/peter.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="member-info">
                            <h4>Peter Kagwe</h4>
                            <span>Software Technician</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact bg-info section-bg">
        <div class="container bg-info">

            <div class="section-title">
                <center><h2>Contact</h2></center>
                <p>Contact us for the beter services.</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p> Tomboya street, 90420-80100, Mombasa </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>gkard@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+254 719885775</p>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/dir/-4.0350149,39.6827742/gkad+electronic+solutions/@-4.0426622,39.6655018,16z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x184013e92825088f:0x6791ed9166a19e77!2m2!1d39.6682065!2d-4.0434771" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->




<footer id="footer">
    <div class="bg-info">
        <div class="container">
            <div class="row bg-info">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>GKaD</h3>
                        <p class="pb-3"><em></em></p>
                        <p>
                            Tom Mboya Street <br>
                            90420, Mombasa<br><br>
                            <strong>Phone:</strong>+254 719 885 775<br>
                            <strong>Email:</strong> gkadelec@gmail.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Hardware Repair</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#"> Software instalation</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Please Subscribe to our newslatter to receive new updates</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>
    <br><br>
    <div class="container bg-warning">
        <div class="">
            <div class="copyright ">
               <center &copy; Copyright <strong><span>GKaD</span></strong>. All Rights Reserved <center>
            </div>
        </div>
    </div>
</footer>
</body>
</html>



