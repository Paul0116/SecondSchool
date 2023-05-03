<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AsiaSchool</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>E-School</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{ asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
   
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Build Your Future Career With <span>E-School</span></h1>
            <h2>We have talented teachers</h2>
            <div class="text-center text-lg-start">
              <a href="#contact" class="btn-get-started scrollto">Enroll Now</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Features</h2>
          <p>Check The Features</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="">Magni Dolores</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">Nemo Enim</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">Midela Teren</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">Pira Neve</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="">Dirada Pack</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a href="">Moton Ideal</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a href="">Verdo Park</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
  
    <!-- ======= Details Section ======= -->
   
    <!-- ======= Gallery Section ======= -->
 
    <!-- ======= Testimonials Section ======= -->
 
    <!-- ======= Team Section ======= -->
  

    <!-- ======= Pricing Section ======= -->
  
    <!-- ======= F.A.Q Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <br/><br/><br/><br/><br/><br/><br/>
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pre-Enroll Now</h2>
         
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
             

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form method="POST" action="{{ route('enroll') }}" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" :value="old('name')"  placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" :value="old('email')" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="course" id="subject" :value="old('course')" placeholder="Course" required>
              </div>
             
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message">Success. Thank you!</div>
             
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              @if(session('success'))
             
              <div class="sent-message">Your message has been sent. Thank you!</div>
                
                @endif
              <div class="text-center"><button type="submit">Submit</button></div>
            </form>

          </div>

        </div>

      </div>
      <br/><br/><br/><br/><br/><br/><br/>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
      
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>E-School</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
      
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>