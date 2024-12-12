@extends('layouts.app')

@section('content')

<body class="portfolio-page">
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Projets</h1>
              <p class="mb-0">Découvrez ici l'ensemble de mes projets.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('accueil') }}">Accueil</a></li>
            <li class="current">Portfolio</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Tout</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-siteWeb">Site web</li>
            <li data-filter=".filter-intranet">Intranet</li>
            <li data-filter=".filter-bonus">Bonus</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <!-- Boucle Blade pour afficher les projets -->
            @foreach ($projets as $projet)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <!-- Vérifier si l'image est en base64, puis l'afficher -->
                @if ($projet->cover_image)
                <img src="data:image/jpeg;base64,{{ $projet->cover_image }}" class="img-fluid" alt="Project Image">
                @else
                <img src="{{ asset('img/visuel-non-disponible_.jpg') }}" class="img-fluid" alt="Default Image">
                @endif
                <div class="portfolio-info">
                  <h4>{{ $projet->designation }}</h4>
                  <p>{{ $projet->description }}</p>
                  <a href="{{ $projet->url }}" title="More Details" class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            @endforeach 

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

  </main>

  <!-- Scroll Top -->
  <a href="" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>
@endsection