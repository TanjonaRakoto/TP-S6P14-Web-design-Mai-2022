<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accueil FrontOffice</title>
  <meta content="" name="description">
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
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('assets/img/logo.png') }}" alt=""> -->
        <h1 style="color: blue;">IA NEWS</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main" style="margin: 2%">

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Actualité</span>
          <h2>Actualité</h2>

        </div>

        <div class="row gy-4">
            @if (count($listes)==0)
                <p style="text-align: center; color: rgb(25, 0, 255)">Il n'y a aucun actualité pour le moment</p>
            @else
            @foreach ($listes as $liste)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset($liste->image_news) }}" alt="" class="img-fluid">
                    </div>
                    <h3><a href="/detailsFrontOffice.html/{{ $liste->summary_news }}/{{ $liste->id_news }}" class="stretched-link">{{ $liste->title_news }}</a></h3>
                    <p>{{ $liste->date_news }}</p>
                    <p>{{ $liste->summary_news }}</p>
                </div>
            </div><!-- End Card Item -->
            @endforeach

            @endif

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

          <div class="slides-1 swiper" data-aos="fade-up">
            <div class="swiper-wrapper">

              @foreach ($citations as $citation)
              <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="{{ asset($citation->image_auteur) }}" class="testimonial-img" alt="">
                    <h3>{{ $citation->auteur_citation }}</h3>
                    <h4>{{ $citation->fonction_auteur }}</h4>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      {{ $citation->valeur_citation }}
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->
              @endforeach

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End Testimonials Section -->
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

  <div id="preloader"></div>

  {{-- <script>
    // Faire une requête Ajax à l'API Laravel
    fetch('http://localhost:8000/api/liste')
    .then(response => response.json())
    .then(data => {
      const listeActualitesDiv = document.getElementById('liste-actualites');
      data.listeActu.forEach(actu => {
        const div = document.createElement('div');
        div.setAttribute('class', 'col-lg-4 col-md-6');
        div.setAttribute('data-aos', 'fade-up');
        div.setAttribute('data-aos-delay', '100');
        div.innerHTML = `
            <div class="card">
              <div class="card-img">
                <img src="http://127.0.0.1:8000/${actu.image_news}" alt="" class="img-fluid">
              </div>
              <h3><a href="detailsFrontOffice/${actu.id_news}" class="stretched-link">${actu.title_news}</a></h3>
              <p>${ actu.date_news }</p>
              <p>${ actu.summary_news }</p>
            </div>
        `;
        listeActualitesDiv.appendChild(div);
      });
      // listeActualitesDiv.appendChild(ul1);

      const listeCitationsDiv = document.getElementById('liste-citation');
      data.citations.forEach(actu => {
        const div = document.createElement('div');
        div.setAttribute('class', 'swiper-slide');
        div.innerHTML = `
          <div class="testimonial-item">
                <img src="http://127.0.0.1:8000/${actu.image_auteur}" class="testimonial-img" alt="">
                <h3>${actu.auteur_citation}</h3>
                <h4>${actu.fonction_auteur}</h4>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  ${actu.valeur_citation}
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
        `;
        listeCitationsDiv.appendChild(div);
      });
      // listeCitationsDiv.appendChild(ul2);
    });
  </script> --}}

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
