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
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="board.members.php">Board of Directors</a></li>
          <li><a href="certifications.php">Certifications</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li class="get-started"><a href="assets/Catalogue.pdf" download>Our Catalogue</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row d-flex align-items-center">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
        <h1>Welcome to the official Sites of Bakale Arts & Crafts Co. Ltd</h1>
        <h2>We are a leading professional manufacturer of customized merchandise, we offer a wide range of corporate souvenirs and promotional items. We are creative and dynamic team which are ready to serve your needs. We are ready to be partners with different souvenirs dealers. Our aim is to be your best souvenirs supplier in Africa.</h2>
        <a href="assets/Catalogue.pdf" download class="btn-get-started scrollto">Our Catalogue</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="assets/img/BGS Logo Tranfnt.fw.png" class="img-fluid" alt="">
      </div>
    </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <?php 
            $query = mysqli_query($db,"SELECT * FROM clients ORDER BY RAND() LIMIT 6 ");

            while ($roz = mysqli_fetch_array($query)) {
          ?>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/<?php echo $roz['image'] ?>" class="img-fluid" alt="<?php echo $roz['name'] ?>" data-aos="flip-right">
            </div>
          </div>
        <?php } ?>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-in" data-aos-delay="100">About Bakale Arts and Crafts Co. Ltd</h3>
              <p data-aos="fade-in">
                Bakale Arts & Crafts Co. Ltd. is an Art and Craft Company, which Specializes in Designing and Production of Corprate Souvenirs and Promotional items, It was Founded in 2020. <br>  Our Head Office, located in Kano State, Nigeria.
              </p>
              <div class="row">
                <div class="col-md-10 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4 class="text-center"><a href="#">VISION</a></h4>
                  <p>Our Vision is to be the Best, Most Trusted and Preferred Organization in the Art and Craft Sector.</p>
                </div>
                <div class="col-md-10 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4 class="text-center"><a href="#">MISSION</a></h4>
                  <p> 1. To Combine the Aggressive Strategic Marketing with Quality Products to our Valued Customers.
                    <br>
    2. To deliver Operational Excellence in every corner of the company that meet or exceed our Commitments.
    <br>
    3. To devote ourselves in Promoting and Value the brand of our Clients - Providing Customized, Good, Beauty and Distinctive added value to brand of our Clients. </p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Services</h2>
          <p data-aos="fade-in">We are Committed to deliver operational excellence in every corner of the company. We welcomes all customers worldwide and happy to offer you with our high quality products and reliable servie. High quality is what we always promise!</p>
        </div>

        <div class="row">
          <?php 
          $query = mysqli_query($db,"SELECT * FROM services");
          while($row = mysqli_fetch_array($query)){
           ?>
           <br>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services/<?php echo $row['caption']; ?>" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo $row['title']; ?></a></h5>
                <p class="card-text"><?php echo $row['body']; ?></p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        <?php } ?>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Portfolio</h2>
          <p data-aos="fade-in">Our products are usually used for promotional purposes in marketing and marketing communications and value the brands of our clients, by providing customized good and beauty merchandise.</p>
        </div>
        <div class="row portfolio-container" data-aos="fade-up">

          <?php 
          $query = mysqli_query($db,"SELECT * FROM gallery");

          while ($row = mysqli_fetch_array($query)) {?>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/<?php echo $row['image'] ?>" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/<?php echo $row['image'] ?>" data-gall="portfolioGallery" class="venobox" title="<?php echo $row['name'] ?>"><i class="icofont-plus-circle"></i></a>
                <a href="#" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4><?php echo $row['name'] ?></h4>
                <p>Our Works</p>
              </div>
            </div>
          </div>  
        
      <?php   } ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Team</h2>
          <p data-aos="fade-in">Our Team is very strong and well experienced in management and operational service. Your statisfactions are always our best priority.</p>
        </div>

        <div class="row">

          <?php 
          $query = mysqli_query($db,"SELECT * FROM team");

          while ($row = mysqli_fetch_array($query)) {?>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="member" data-aos="fade-up">
                <div class="pic"><img src="assets/img/team/<?php echo $row['picture'] ?>" alt=""></div>
                <h4><?php echo $row['name'] ?></h4>
                <span><?php echo $row['rank'] ?></span>
                <div class="social">
                  <a href="<?php echo $row['twitter'] ?>"><i class="icofont-twitter"></i></a>
                  <a href="<?php echo $row['facebook'] ?>"><i class="icofont-facebook"></i></a>
                  <a href="<?php echo $row['instagram'] ?>"><i class="icofont-instagram"></i></a>
                  <a href="<?php echo $row['linkedn'] ?>"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>

     <?php   } ?>
        </div>

      </div>
    </section><!-- End Team Section -->  
  <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Testimonies</h2>
          <p data-aos="fade-in">Some Appreciations from our beloved customers.</p>
        </div>
        <?php 
        $monies = mysqli_query($db,"SELECT * FROM testimonies");

        while ($tsrows = mysqli_fetch_array($monies)) {
         ?>
        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4><?php echo strtoupper($tsrows['name']) ?></h4>
          </div>
          <div class="col-lg-7">
            <p>
              <?php echo $tsrows['comment'] ?>
            </p>
          </div>
        </div><!-- End F.A.Q Item-->
    <?php } ?>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Contact </p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Zoo Road, Kano State - Nigeria</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@bakalecraft.com<br>sales@bakalecraft.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+2349065929138<br>+2348034237875</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
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

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container" data-aos="fade-up">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>Bakale Arts & Crafts Co. Ltd.</h3>
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
      Copyright  &copy; <?php echo date('Y') ?> <strong><span> Bakale Arts & Crafts Co. Ltd</span></strong>. All Rights Reserved
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