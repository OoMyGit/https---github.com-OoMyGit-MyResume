<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Portfolio Resume</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">
  


    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="about.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="resume.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="portfolio.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="contactpage.php" class="nav-link scrollto active"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Cornell Apartment & SOHO, CBD Boulevard Road, Made, Sambikerep, Surabaya, East Java</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>kwandych@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 851 0612 6799</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
          <?php
          if (!isset($_GET["action"])) {
          ?>
            <form action="contactpage.php?action=save" method="post" role="form" class="php-email-form">
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
            <?php
   } else {
      $servername = 'localhost';
      $username = "root";
      $password = "isbmantap";
      $database = "webdev_afl2";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $database);

      // Check connection
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }

      // Retrieve form data
      $name = $_POST["name"];
      $email = $_POST["email"];
      $subject = $_POST["subject"];
      $message = $_POST["message"];

      // Create table if not exists
      $sql_create_table = "CREATE TABLE IF NOT EXISTS response (
         name VARCHAR(100) NOT NULL,
         email VARCHAR(100) NOT NULL,
         subject VARCHAR(100) NOT NULL,
         message VARCHAR(100) NOT NULL)";
     if ($conn->query($sql_create_table) === FALSE) {
         echo "Error creating table: " . $conn->error;
     }

      // SQL to insert data into table
      $sql = "INSERT INTO response (name, email, subject, message)
              VALUES ('$name', '$email', '$subject', '$message')";

      if ($conn->query($sql) === TRUE) {
         echo '<script>alert("Response submitted successfully"); window.location.href = "view.php";</script>';
      } else {
         echo '<script>alert("Error: ' . $sql . '\\n' . $conn->error . '"); </script>';
      }
      $conn->close();
   }
   ?>
          </div>

        </div>

      </div>
    </section><!-- End of Contact Section -->

  </main><!-- End of #main -->



  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Kwandy Chandra</h3>
      <div class="social-links">
      <a href="https://twitter.com/kwandychndra?lang=en" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.instagram.com/kwandy_chndra?igsh=MWl0N3NuZm12ZDNuZg%3D%3D&utm_source=qr" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://github.com/OoMyGit" class="github"><i class="bx bxl-github"></i></a>
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=kwandych@gmail.com&su=SUBJECT&body=BODY&bcc=" class="gmail"><i class="bx bxl-gmail"></i></a>
        <a href="https://www.linkedin.com/in/kwandy-chandra-7aa878292/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Kwandy Chandra</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
         Designed by Kwandy Chandra
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>