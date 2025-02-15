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
        <li><a href="about.php" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="resume.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="portfolio.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="contactpage.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>

                      <script>
            document.addEventListener("DOMContentLoaded", function() {
              fetch('aboutdesc.json')
                .then(response => response.json())
                .then(data => {
                  document.querySelector('.about p').textContent = data.aboutDescription;
                  // Add more selectors and data according to your JSON structure
                })
                .catch(error => console.error('Error loading the JSON data: ', error));
            });
            </script>

        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/profile-img.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Under-Graduate Student</h3>
            <p class="fst-italic">
              Biodata
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>30 April 2004</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 851-0612-6799</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Surabaya, Indonesia</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Campus:</strong> <span>Ciputra University, Surabaya</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>kwandych@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Major:</strong> <span>Information System</span></li>
                </ul>
              </div>
            </div>
            <p>
              I was born in Makassar. I went to study at Ciputra University of Surabaya, majored in Information Systems for Business.
              Currently, I'm interested to develop my career to become an Application/Web Developer.
              The other things that I put interest is on Blockchain Technology.
              I started my coding journey since I was 15, I started coding because of my math teacher that recommend me to attend a Informatics Olympiad that force to to learn deeper about programming language.
              The first programming languange that I learn is Pascal, then after that I started learn C++ at 17 years old then after entering college I started to learn C#, Python, JavaScript, and many more.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End of About Section -->

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