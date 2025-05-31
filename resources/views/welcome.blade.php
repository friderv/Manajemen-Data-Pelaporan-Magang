<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>E-Magang | Beranda</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset ('enno/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset ('enno/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('enno/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('enno/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('enno/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('enno/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('enno/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('enno/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="#" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">E-Magang</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang Kita</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      @auth
        <a class="btn-getstarted" href="{{ route('dashboard') }}">Dashboard</a>
      @else
        <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
      @endauth
      

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <h1>E-Magang</h1>
            <p>Aplikasi Manajemen Data Pelaporan Magang</p>
            <div class="d-flex">
              @auth
                <a href="{{ route('dashboard') }}" class="btn-get-started">Dashboard</a>
              @else
                <a href="{{ route('login') }}" class="btn-get-started">Login</a>
              @endauth
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('enno/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Tentang Kita<br></span>
        <h2>Tentang Kita</h2>
        <p>Sistem Manajemen Data Pelaporan Magang adalah platform digital mengelola dan memonitoring kegiatan magang mahasiswa secara terpadu dan efisien.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
          </div>
          <div class="col-xl-12 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Sistem terintegrasi untuk memfasilitasi proses pelaporan magang yang transparan dan akuntabel.</h3>
            <p class="fst-italic">
              Platform ini menghubungkan mahasiswa dan dosen dalam satu sistem yang memungkinkan monitoring progress magang secara real-time dan pengelolaan dokumen yang terstruktur.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>UPengelolaan data mahasiswa magang - Sistem pencatatan dan tracking status magang mahasiswa secara komprehensif</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Integrasi multi-user - Platform yang menghubungkan mahasiswa dosen dalam satu sistem terpadu</span></li>
            </ul>
            <p>
              Dengan sistem ini, proses administrasi magang menjadi lebih efisien dan terorganisir. Mahasiswa dapat melaporkan kegiatan magang dan dosen dapat memantau progress secara real-time serta institusi dapat mengelola data magang secara terpusat. Sistem ini mendukung digitalisasi proses akademik yang lebih modern dan responsif terhadap kebutuhan era digital.
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Kontak</span>
        <h2>Kontak</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-xl-12">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>JL. Syech Abdurrauf No.3, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 23111</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+6208574233040</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>raziansabri224@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.744840501633!2d95.3677001534189!3d5.56935123219506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304037b98ba13e41%3A0x93d7ebf4986961a9!2sFMIPA%20USK!5e0!3m2!1sid!2sid!4v1748491243853!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">eNno</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src=" {{ asset('enno/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src=" {{ asset('enno/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src=" {{ asset('enno/assets/vendor/aos/aos.js') }}"></script>
  <script src=" {{ asset('enno/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src=" {{ asset('enno/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src=" {{ asset('enno/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src=" {{ asset('enno/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src=" {{ asset('enno/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src=" {{ asset('enno/assets/js/main.js') }}"></script>

</body>

</html>