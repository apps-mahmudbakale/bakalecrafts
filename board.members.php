<?php 
include 'connection.php'; 
// include 'heroku.connection.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bakale Arts & Crafts Co. Ltd</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex" style="max-width: 1417px">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Bakale Arts & Crafts Co. Ltd<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#about">About Us</a></li>
          <li><a href="index.php#services">Services</a></li>
          <li><a href="index.php#portfolio">Portfolio</a></li>
          <li><a href="index.php#team">Team</a></li>
          <li class="active"><a href="board.members.php">Board of Directors</a></li>
          <li><a href="certifications.php">Certifications</a></li>
          <li><a href="index.php#contact">Contact Us</a></li>
          <li class="get-started"><a href="assets/Catalogue.pdf" download>Our Catalogue</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <main id="main">
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Board of Directors</h2>
        </div>

        <div class="row">

          <?php 
          $query = mysqli_query($db,"SELECT * FROM board_directors");

          while ($row = mysqli_fetch_array($query)) {?>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="member" data-aos="fade-up">
                <div class="pic"><img src="assets/img/board/<?php echo $row['image'] ?>" alt=""></div>
                <h4><?php echo $row['name'] ?></h4>
                <span><?php echo $row['rank'] ?></span>
                <div class="social">
                  <h4><?php echo $row['phone'] ?></h4>
                </div>
              </div>
            </div>

     <?php   } ?>
        </div>

      </div>
    </section><!-- End Team Section -->  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container" data-aos="fade-up">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>Bakale Arts & Crafts Co., Ltd.</h3>
            <p>We Are Creative, Be With Us</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="https://twitter.com/@bakalecraft" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://web.facebook.com/Bakale-Arts-Crafts-Co-Ltd-104055934545025/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/bakalecraft/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://skype.com/live:cid.abce5ce5cb5d3613265" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="https://www.linkedin.com/in/bakale-arts-and-crafts-co-ltd-9b80531b6/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
      Copyright  &copy; <?php echo date('Y') ?> <strong><span> Bakale Arts & Crafts Co., Ltd</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
        Designed by <a href="">Bnetworks Tech Solutions</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>