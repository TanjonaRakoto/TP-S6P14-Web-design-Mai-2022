<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accueil BackOffice</title>
  <meta content="Intelligence artificielle" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

  <!-- =======================================================
  * Template Name: Logis
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: rgb(23, 13, 65)">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('assets/img/logo.png') }}" alt=""> -->
        <h1>IA News</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="">Add</a></li>
          <li><a href="/listeActu.html">List News</a></li>

          <li><a class="get-a-quote" href="/">Deconnexion</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 mt-4">

          <div class="col-lg-8">
            <h3 style="text-color: rgb(14, 14, 73)">Ajouter news</h3>
            <form action="/insererActu" enctype="multipart/form-data" method="post" role="form">
                @csrf
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="title" id="subject" placeholder="Titre" required>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="summary" id="subject" placeholder="Résumé" required>
                </div>
                <div class="form-group mt-3">
                    <input type="file" class="form-control" name="image" id="subject" placeholder="Image" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="ckeditor" name="contain" rows="5" placeholder="Contenu" required></textarea>
                </div>
                <div style="margin-top: 3%">
                    <button type="submit" class="btn btn-primary">Publier l'article</button>
                </div>
            </form>
          </div><!-- End Contact Form -->

          <div class="col-lg-4">
            <h3 style="text-color: rgb(14, 14, 73)">Ajouter citation</h3>
            <form action="/insererCitation" enctype="multipart/form-data" method="post" role="form">
                @csrf
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="auteur" id="subject" placeholder="Auteur" required>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="position" id="subject" placeholder="Position" required>
                </div>
                <div class="form-group mt-3">
                    <input type="file" class="form-control" name="image" id="subject" placeholder="Image" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="valeur" rows="5" placeholder="Contenu" required></textarea>
                </div>
                <div style="margin-top: 3%">
                    <button type="submit" class="btn btn-primary">Ajouter Citation</button>
                </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
