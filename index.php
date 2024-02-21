<?php
include 'partials/_header.php';
include 'partials/_menu.php';
?>
  <!-- WELCOME -->
  <section class="border-bottom">
    <div class="container">
      <div class="row align-items-stretch">
        <div class="col-12 col-md-6 offset-md-1 order-md-2">

          <!-- Slider (mobile) -->
          <div class="d-md-none img-cover"
            data-flickity='{"imagesLoaded": true, "wrapAround": true, "prevNextButtons": false, "pageDots": false}'>
            <div class="w-100">

              <!-- Image -->
              <img src="assets/img/covers/cover5.jpeg" alt="..." class="img-fluid">

            </div>
            <div class="w-100">

              <!-- Image -->
              <img src="assets/img/covers/cover6.jpeg" alt="..." class="img-fluid">

            </div>
          </div>

          <!-- Slider -->
          <div class="position-relative h-100 vw-50 d-none d-md-block" data-aos="fade-left">

            <!-- Slider -->
            <div class="flickity-button-bottom flickity-button-white h-100 w-100"
              data-flickity='{"imagesLoaded": true, "setGallerySize": false, "wrapAround": true, "pageDots": false}'>
              <div class="w-100 h-100 bg-cover" style="background-image: url(assets/img/covers/cover5.jpeg);"></div>
              <div class="w-100 h-100 bg-cover" style="background-image: url(assets/img/covers/cover6.jpeg);"></div>
            </div>

            <!-- Shape -->
            <div class="shape shape-start shape-fluid-y svg-shim text-white">
              <svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h100v386l-50 772v386H0V0z" fill="currentColor" />
              </svg>
            </div>

          </div>

        </div>
        <div class="col-12 col-md-5 py-8 py-md-14 order-md-1" data-aos="fade-right">

          <!-- Heading -->
          <h1 class="display-3">
            Bienvenue dans la commune <span class="text-success">Akpro Misserété.</span>
          </h1>

          <!-- Text -->
          <p class="lead text-muted mb-6 mb-md-8">
            C'est une commune et une ville du sud-est du Bénin, préfecture du département de Ouémé.
          </p>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- FLEXIBILITY -->
  <section class="pt-8 pt-md-11 bg-gradient-light-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Badge -->
          <span class="badge rounded-pill bg-success-soft mb-3">
            <span class="h6 text-uppercase">Services</span>
          </span>

          <!-- Heading -->
          <h1>
            Découvrez les services disponibles.
          </h1>

          <!-- Text -->
          <p class="fs-lg text-gray-700 mb-7 mb-md-9">
            Depuis le confort de votre maison, vous pouvez accéder à tous les services de la mairie en un clic.
          </p>

        </div>
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-12 col-md-4" data-aos="fade-up">

          <!-- Card -->
          <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">

            <!-- Image -->
            <img src="assets/img/photos/service1.jpg" alt="..." class="card-img-top">

            <!-- Shape -->
            <div class="position-relative">
              <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
                </svg>
              </div>
            </div>

            <!-- Body -->
            <div class="card-body position-relative">

              <!-- Badge -->
              <div class="position-relative text-end mt-n8 me-n4 mb-3">
                <span class="badge rounded-pill bg-success">
                  <span class="h6 text-uppercase">100.000f CFA</span>
                </span>
              </div>

              <!-- Heading -->
              <h3>
                Fosse Cimentée Ordinaire
              </h3>
              
              <!-- Link -->
              <a href="#!" class="fw-bold text-decoration-none">
                Demandez <i class="fe fe-arrow-right ms-3"></i>
              </a>

            </div>

          </div>

        </div>
        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">

          <!-- Card -->
          <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">

            <!-- Image -->
            <img src="assets/img/photos/service.jpg" alt="..." class="card-img-top">

            <!-- Shape -->
            <div class="position-relative">
              <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
                </svg>
              </div>
            </div>

            <!-- Body -->
            <div class="card-body position-relative">

              <!-- Badge -->
              <div class="position-relative text-end mt-n8 me-n4 mb-3">
                <span class="badge rounded-pill bg-warning">
                  <span class="h6 text-uppercase">20.000F CFA</span>
                </span>
              </div>

              <!-- Heading -->
              <h3>
              Relèvement des tombes
              </h3>

              <!-- Link -->
              <a href="#!" class="fw-bold text-decoration-none">
                Demandez<i class="fe fe-arrow-right ms-3"></i>
              </a>

            </div>

          </div>

        </div>
        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">

          <!-- Card -->
          <div class="card shadow-light-lg lift lift-lg">

            <!-- Image -->
            <img src="assets/img/photos/service2.jpg" height="210" alt="..." class="card-img-top">

            <!-- Shape -->
            <div class="position-relative">
              <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
                </svg>
              </div>
            </div>

            <!-- Body -->
            <div class="card-body position-relative">

              <!-- Badge -->
              <div class="position-relative text-end mt-n8 me-n4 mb-3">
                <span class="badge rounded-pill bg-success">
                  <span class="h6 text-uppercase">50.000f CFA</span>
                </span>
              </div>

              <!-- Heading -->
              <h3>
                Autorisation d'exhumation
              </h3>

              <!-- Link -->
              <a href="#!" class="fw-bold text-decoration-none">
                Demandez <i class="fe fe-arrow-right ms-3"></i>
              </a>

            </div>

          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- SCALABLE -->
  <section class="py-8 py-md-11 border-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 order-md-2">

          <!-- Image -->
          <img src="assets/img/photos/maire.jpeg" alt="..." class="img-fluid mb-6 mb-md-0">

        </div>
        <div class="col-12 col-md-6 order-md-1">

          <!-- Badge -->
          <span class="badge rounded-pill bg-primary-soft mb-3">
            <span class="h6 text-uppercase">La mairie</span>
          </span>

          <!-- Heading -->
          <h2>
            Une équipe dévoué <br>
            <span class="text-primary">apte à satisfaire les besoins des habitants</span>.
          </h2>

          <!-- Text -->
          <p class="fs-lg text-gray-700 mb-6 mb-md-6">
            Bienvenue dans notre commune vibrante et pleine de ressources ! Explorez nos sites historiques, participez à nos 
            événements communautaires et profitez de nos paysages. Notre commune est le cœur battant de l'harmonie et de la diversité. 
            Ensemble, construisons un avenir prometteur, axé sur le progrès et la qualité de vie. 
          </p>

          <!-- List -->
          <div class="row">
            <div class="col-12 col-lg-6">

              <!-- Item -->
              <div class="d-flex">

                <!-- Check -->
                <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  Accessibilité
                </p>

              </div>

              <!-- Item -->
              <div class="d-flex">

                <!-- Check -->
                <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                  <i class="fe fe-check"></i>
                </div>

                <p class="mb-lg-0">
                  Rapidité
                </p>

              </div>

            </div>
            <div class="col-12 col-lg-6">

              <!-- Item -->
              <div class="d-flex">

                <!-- Check -->
                <span class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                  <i class="fe fe-check"></i>
                </span>

                <!-- Text -->
                <p>
                  Disponibilité
                </p>

              </div>

              <!-- Item -->
              <div class="d-flex">

                <!-- Check -->
                <div class="badge badge-rounded-circle bg-primary-soft me-1 me-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-0">
                Crédibilité
                </p>

              </div>

            </div>
          </div> <!-- / .row -->

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- LOCATION -->
  <section class="pt-8 pt-md-0 border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">

          <!-- Map (mobile) -->
          <div class="ratio ratio-1x1 d-md-none">
            <img src="assets/img/covers/loc.jpeg" alt="..." class="img-fluid">
          </div>

          <!-- Map -->
          <div class="position-relative h-100 vw-50 float-end d-none d-md-block">
            <img src="assets/img/covers/loc.jpeg" alt="..." class="img-fluid">
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-5 offset-lg-1 py-8 py-md-11 py-lg-12">

          <!-- Heading -->
          <h2>
            Plus de 127 249 habitants<br>
            <span class="text-success">avec 5 arrondissements</span>.
          </h2>

          <!-- Text -->
          <p class="fs-lg text-gray-700 mb-6 mb-md-6 text-justify">
            Akpro-Missérété est située sur une zone de marécages et de bas-fond où subsistent des îlots forestiers et
            palmeraies naturelles. Quatre rivières, totalisant 10 km, traversent la commune.


          </p>

          <!-- Stats -->
          <div class="d-flex">
            <div class="pe-5">
              <h3 class="text-success mb-0">
                79 km2
              </h3>
              <p class="text-gray-700 mb-0">
                Superficies
              </p>
            </div>
            <div class="border-start"></div>
            <div class="px-5">
              <h3 class="text-success mb-0">
                1,611 h/km2
              </h3>
              <p class="text-gray-700 mb-0">
                Densité
              </p>
            </div>
            <div class="border-start"></div>
            <div class="ps-5">
              <h3 class="text-success mb-0">
                127,249
              </h3>
              <p class="text-gray-700 mb-0">
                Habitants
              </p>
            </div>
          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- BLOG -->
  <section class="py-8 py-md-11 bg-gradient-light-white border-bottom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Badge -->
          <span class="badge rounded-pill bg-primary-soft mb-3">
            <span class="h6 text-uppercase">Notre blog</span>
          </span>

          <!-- Heading -->
          <h1>
            Restez informé de l'actualité.
          </h1>

          <!-- Text -->
          <p class="fs-lg text-muted mb-7 mb-md-9">
            Nous partageons avec vous les informations essentielles concernant la commune d'Akpro Missérété dès maintenant.
          </p>

        </div>
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 d-flex">

          <!-- Card -->
          <div class="card mb-6 mb-lg-0 pt-14 overlay overlay-black overlay-30 bg-cover shadow-light-lg lift lift-lg" style="background-image: url(assets/img/photos/cover12.jpg);">

            <!-- Body -->
            <a class="card-body mt-auto" href="#!">

              <!-- Heading -->
              <h3 class="text-white">
                Bienvenue dans la commune d'Akpro-Missérété
              </h3>

              <!-- Text -->
              <p class="mb-0 text-white">
                Découvrez la vaste diversité et multitude d'environnement alléchant et attrayant.
              </p>

            </a>

            <!-- Meta -->
            <a class="card-meta" href="#!">

              <!-- Divider -->
              <hr class="card-meta-divider text-white-20">

              <!-- Avatar -->
              <div class="avatar avatar-sm me-2">
                <img src="assets/img/photos/avatar1.jpeg" alt="..." class="avatar-img rounded-circle">
              </div>

              <!-- Author -->
              <h6 class="text-uppercase text-white-80 me-2 mb-0">
                La mairie
              </h6>

              <!-- Date -->
              <p class="h6 text-uppercase text-white-80 mb-0 ms-auto">
                <time datetime="2019-05-02">02 Juin 2023</time>
              </p>

            </a>

          </div>

        </div>
        <div class="col-12 col-md-6 col-lg-4 d-flex">

          <!-- Card -->
          <div class="card mb-6 mb-lg-0 shadow-light-lg lift lift-lg">

            <!-- Image -->
            <a class="card-img-top" href="#!">
              <img src="assets/img/photos/huile.jpeg" alt="..." class="img-fluid">
            </a>

            <!-- Shape -->
            <div class="position-relative">
              <div class="shape shape-fluid-x shape-bottom text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>                </div>
            </div>

            <!-- Body -->
            <a class="card-body" href="#!">

              <!-- Heading -->
              <h3>
                Processus de transformation des noix de palme
              </h3>

              <!-- Text -->
              <p class="mb-0 text-muted">
                Que peut-on extraire des noix de palme ? Quels sont les usages de cette ressource ?
              </p>

            </a>

            <!-- Meta -->
            <a class="card-meta" href="#!">

              <!-- Divider -->
              <hr class="card-meta-divider">

              <!-- Avatar -->
              <div class="avatar avatar-sm me-2">
                <img src="assets/img/photos/avatar1.jpeg" alt="..." class="avatar-img rounded-circle">
              </div>

              <!-- Author -->
              <h6 class="text-uppercase text-muted me-2 mb-0">
                La mairie
              </h6>

              <!-- Date -->
              <p class="h6 text-uppercase text-muted mb-0 ms-auto">
                <time datetime="2019-05-02">03 Mai 2023</time>
              </p>

            </a>

          </div>

        </div>
        <div class="col-12 col-lg-4 d-flex">

          <!-- Card -->
          <div class="card shadow-light-lg lift lift-lg">

            <!-- Body -->
            <a class="card-body my-auto" href="#!">

              <!-- Heading -->
              <h3 class="mt-auto">
                Destination Bénin : Akpro-Missérété , l’ode à une diversité vivifiante !
              </h3>

              <!-- Text -->
              <p class="mb-0 text-muted">
                Le nom de la Commune, à lui seul, fait tilt dans la tête. Surtout que dans les langues locales, à la seule lecture, on n’arrive pas à l’expliquer. 
              </p>

            </a>

            <!-- Meta -->
            <a class="card-meta" href="#!">

              <!-- Divider -->
              <hr class="card-meta-divider">

              <!-- Avatar -->
              <div class="avatar avatar-sm me-2">
                <img src="assets/img/photos/avatar1.jpeg" alt="..." class="avatar-img rounded-circle">
              </div>

              <!-- Author -->
              <h6 class="text-uppercase text-muted me-2 mb-0">
                La mairie
              </h6>

              <!-- Date -->
              <p class="h6 text-uppercase text-muted mb-0 ms-auto">
                <time datetime="2019-05-02">14 Mars 2023</time>
              </p>

            </a>

          </div>

        </div>
      </div> <!-- / .row -->
      <br>
      <center><a href="blog.php" class="col-3 btn btn-outline-primary btn-pill">Voir plus</a></center>
    </div> <!-- / .container -->
  </section>

<?php
include 'partials/_footer.php';
?>