<?php
require_once "config/db.php";
require_once "config/function.php";

if ($_POST) {
  extract($_POST);

  if (!empty($nom) && !empty($email) && !empty($contenu)) {
    $nom = clean($nom);
    $email = clean($email);
    $contenu = clean($contenu);

    envoi_mail("brurine2016@gmail.com","Mail - Page de contact",$email,$contenu);
  }
}

include 'partials/_header.php';
include 'partials/_menu.php';
?>
    <!-- WELCOME -->
    <section class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover" style="background-image: url(assets/img/covers/loc.jpeg);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">

            <!-- Heading -->
            <h1 class="display-2 fw-bold text-white">
              Nous sommes à votre écoute.
            </h1>

            <!-- Text -->
            <p class="lead text-white-75 mb-0">
            Nous voulons toujours avoir de vos nouvelles ! Faites-nous savoir comment nous pouvons vous aider au mieux et nous ferons de notre mieux.
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>      </div>
    </div>

    <!-- INFO -->
    <section class="py-7 py-md-9 border-bottom border-gray-300" id="info">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">

            <!-- Button -->
            <a href="#info" class="btn btn-white btn-rounded-circle shadow mt-n11 mt-md-n13" data-scroll>
              <i class="fe fe-arrow-down"></i>
            </a>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-4 text-center border-end border-gray-300">

            <!-- Heading -->
            <h6 class="text-uppercase text-gray-700 mb-1">
              Ecrivez-nous
            </h6>

            <!-- Link -->
            <div class="mb-5 mb-md-0">
              <a href="sms:+22961000000" class="h4 text-primary">
                Un message !
              </a>
            </div>

          </div>
          <div class="col-12 col-md-4 text-center border-end border-gray-300">

            <!-- Heading -->
            <h6 class="text-uppercase text-gray-700 mb-1">
              Appelez-nous !
            </h6>

            <!-- Link -->
            <div class="mb-5 mb-md-0">
              <a href="tel:+22961000000" class="h4">
                (+229) 61-00-00-00
              </a>
            </div>

          </div>
          <div class="col-12 col-md-4 text-center">

            <!-- Heading -->
            <h6 class="text-uppercase text-gray-700 mb-1">
              Un mail !
            </h6>

            <!-- Link -->
            <a href="mailto:contact@gmail.com" class="h4">
              contact@gmail.com
            </a>

          </div>
        </div> <!-- / .row -->
      </div>
    </section>

    <!-- FORM -->
    <section class="pt-8 pt-md-11 pb-8 pb-md-14">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">

            <!-- Heading -->
            <h2 class="fw-bold">
              Laissez-nous directement un message !
            </h2>

            <!-- Text -->
            <p class="fs-lg text-muted mb-7 mb-md-9">
              Nous attendos vos remarques, critiques, suggestions er autres ! Nous serons ravis de nous améliorer et de vous aider à être satisfait de nos services. N'hésitez pas à nous tenir au courant !
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row justify-content-center">
          <div class="col-12 col-md-12 col-lg-10">

            <!-- Form -->
            <form method="POST">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group mb-5">

                    <!-- Label -->
                    <label class="form-label" for="contactName">
                      Nom complet
                    </label>

                    <!-- Input -->
                    <input name="nom" class="form-control" id="contactName" type="text" placeholder="Votre nom complet">

                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group mb-5">

                    <!-- Label -->
                    <label class="form-label" for="contactEmail">
                      Email
                    </label>

                    <!-- Input -->
                    <input name="email" class="form-control" id="contactEmail" type="email" placeholder="hello@domain.com">

                  </div>
                </div>
              </div> <!-- / .row -->
              <div class="row">
                <div class="col-12">
                  <div class="form-group mb-7 mb-md-9">

                    <!-- Label -->
                    <label class="form-label" for="contactMessage">
                      En quoi pouvons-nous vous aider ?
                    </label>

                    <!-- Input -->
                    <textarea name="contenu" class="form-control" id="contactMessage" rows="5" placeholder="Dites-nous ce que nous pouvons pour vous!"></textarea>

                  </div>
                </div>
              </div> <!-- / .row -->
              <div class="row justify-content-center">
                <div class="col-auto">

                  <!-- Submit -->
                  <button type="submit" class="btn btn-primary lift">
                    Envoyez
                  </button>

                </div>
              </div> <!-- / .row -->
            </form>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>


<?php
include 'partials/_footer.php';
?>