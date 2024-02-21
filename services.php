<?php
require_once "config/db.php";
require_once "config/function.php";

$sql = $db->query("SELECT * FROM categorie WHERE statut = 1 ORDER BY id DESC");
$all = $sql->fetchAll();

include 'partials/_header.php';
include 'partials/_menu.php';
?>
  <!-- WELCOME -->
  <section data-jarallax data-speed=".8" class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover jarallax" style="background-image: url(assets/img/photos/service.jpg);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Heading -->
          <h1 class="display-2 text-white">
            Avez-vous besoin de vos services ?
          </h1>

          <!-- Text -->
          <p class="lead text-white-75 mb-6">
            Nous sommes disponibles pour vous fournir des services de quapité à vos différentes prestations de services en ligne.
          </p>

          <!-- Button -->
          <a href="#services" class="btn btn-primary lift">
            Voir les services <i class="fe fe-arrow-right ms-3"></i>
          </a>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>
 
  <!-- SHAPE -->
  <div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x text-light">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
      </svg>
    </div>
  </div>

  <!-- VALUES -->
  <section class="pt-8 pt-md-11">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-12 col-md-6">

          <!-- Badge -->
          <span class="badge bg-primary-desat-soft rounded-pill mb-3">
            <span class="h6 text-uppercase">
              Values
            </span>
          </span>

          <!-- Heading -->
          <h2>
            Nous sommes disponibles, <br>
            <span class="text-primary-desat">pour vous bien servir.</span>.
          </h2>

          <!-- Text -->
          <p class="fs-lg text-muted mb-6 mb-md-0">
            Peu importe d'où vous venez, votre quartier, votre situation sociale ou même l'heure, votre demande sera traité avec une rapidité sans faille.
          </p>

        </div>
        <div class="col-12 col-md-6 col-xl-5">

          <div class="row gx-0">
            <div class="col-4">

              <!-- Image -->
              <div class="w-150 mt-9 p-1 bg-white shadow-lg">
                <img src="assets/img/photos/photo-13.jpg" class="img-fluid" alt="...">
              </div>

            </div>
            <div class="col-4">

              <!-- Image -->
              <div class="w-150 p-1 bg-white shadow-lg">
                <img src="assets/img/photos/photo-14.jpg" class="img-fluid" alt="...">
              </div>

            </div>
            <div class="col-4 position-relative">

              <!-- Image -->
              <div class="w-150 mt-11 float-end p-1 bg-white shadow-lg">
                <img src="assets/img/photos/photo-15.jpg" class="img-fluid" alt="...">
              </div>

            </div>
          </div> <!-- / .row -->

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- BENEFITS -->
  <section class="py-8 py-md-11">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-12 col-md-5 order-md-2">

          <!-- Badge -->
          <span class="badge bg-success-soft rounded-pill mb-3">
            <span class="h6 text-uppercase">
              Des avantages
            </span>
          </span>

          <!-- Heading -->
          <h2>Nous prenons plaisir<br>
            <span class="text-success">à examiner vos demandes avec soins.</span>
          </h2>

          <!-- Text -->
          <p class="fs-lg text-muted mb-6 mb-md-0">
            Nous sommes fiers d'offrir des services qui sont à votre disposition le plus tôt possible, quelque soit votre situation géographique ou  tout autre paramètre contraignant pour vous.
          </p>

        </div>
        <div class="col-12 col-md-6 order-md-1">

          <!-- Card -->
          <div class="card card-border border-success shadow-lg">
            <div class="card-body">

              <!-- List group -->
              <div class="list-group list-group-flush">
                <div class="list-group-item d-flex align-items-center">

                  <!-- Text -->
                  <div class="me-auto">

                    <!-- Heading -->
                    <p class="fw-bold mb-1">
                      Accessibilité
                    </p>

                    <!-- Text -->
                    <p class="fs-sm text-muted mb-0">
                      7j/7, 24h/24.
                    </p>

                  </div>

                  <!-- Check -->
                  <div class="badge badge-rounded-circle bg-success-soft ms-4">
                    <i class="fe fe-check"></i>
                  </div>

                </div>
                <div class="list-group-item d-flex align-items-center">

                  <!-- Text -->
                  <div class="me-auto">

                    <!-- Heading -->
                    <p class="fw-bold mb-1">
                      Paiement en ligne
                    </p>

                    <!-- Text -->
                    <p class="fs-sm text-muted mb-0">
                      Sécurité, rapidité, le tout en un clic.
                    </p>

                  </div>

                  <!-- Check -->
                  <div class="badge badge-rounded-circle bg-success-soft ms-4">
                    <i class="fe fe-check"></i>
                  </div>

                </div>
                <div class="list-group-item d-flex align-items-center">

                  <!-- Text -->
                  <div class="me-auto">

                    <!-- Heading -->
                    <p class="fw-bold mb-1">
                      Satisfaction
                    </p>

                    <!-- Text -->
                    <p class="fs-sm text-muted mb-0">
                      Un personnel qualifié mis à votre disposition.
                    </p>

                  </div>

                  <!-- Check -->
                  <div class="badge badge-rounded-circle bg-success-soft ms-4">
                    <i class="fe fe-check"></i>
                  </div>

                </div>
                <div class="list-group-item d-flex align-items-center">

                  <!-- Text -->
                  <div class="me-auto">

                    <!-- Heading -->
                    <p class="fw-bold mb-1">
                      Une assistance
                    </p>

                    <!-- Text -->
                    <p class="fs-sm text-muted mb-0">
                      Vous avez la possibilité de nous joindre <a href="contact.php">ici</a> en cas de problème.
                    </p>

                  </div>

                  <!-- Check -->
                  <div class="badge badge-rounded-circle bg-success-soft ms-4">
                    <i class="fe fe-check"></i>
                  </div>

                </div>
              </div>

            </div>
          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- IMAGE -->
  <section data-jarallax data-speed=".8" class="py-14 py-lg-16 jarallax" style="background-image: url(assets/img/covers/cover5.jpeg);">

    <!-- Shape -->
    <div class="shape shape-top shape-fluid-x text-light">
      <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0h2880v125h-720L720 250H0V0z" fill="currentColor" />
      </svg>
    </div>

    <!-- Shape -->
    <div class="shape shape-bottom shape-fluid-x text-light">
      <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M720 125L2160 0h720v250H0V125h720z" fill="currentColor" />
      </svg>
    </div>

  </section>

  <!-- APPLYING -->
  <section id="services" class="pt-6 pt-md-8">
    <div class="container pb-8 pb-md-11 border-bottom border-gray-300">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Badge -->
          <span class="badge rounded-pill bg-primary-desat-soft mb-3">
            <span class="h6 text-uppercase">Services</span>
          </span>

          <!-- Heading -->
          <h2>
            Accédez dès maintenant <span class="text-primary">à vos services</span>.
          </h2>

          <!-- Text -->
          <p class="fs-lg text-gray-700 mb-7 mb-md-9">
            Payez pour les services dont vous avez besoin sur le champ.
          </p>

        </div>
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-12">

          <!-- Form -->
          <form class="mb-7 mb-md-9">
            <div class="row">
              <div class="col-12 col-md-4">

                <div class="form-group mb-5 mb-md-0">

                  <!-- Label -->
                  <label class="form-label" for="applyRoles">Catégories</label>

                  <!-- Select -->
                  <select class="form-select" id="applyRoles">
                    <option selected>All roles</option>
                    <option>Design</option>
                    <option>Engineering</option>
                    <option>Product</option>
                    <option>Testing</option>
                    <option>Support</option>
                  </select>

                </div>

              </div>
            </div> <!-- / .row -->
          </form>

        </div>
      </div> <!-- / .row -->

      <?php foreach($all as $all){ 
        $id = $all['id'];
        $categorie = $all['nom'];

        $tt = service($id);

      ?>
        <div class="row align-items-center mb-5">
          <div class="col">

            <!-- Heading -->
            <h4 class="fw-bold mb-1">
              <?=$categorie?>
            </h4>

            <!-- Text -->
            <p class="fs-sm text-muted mb-0">
              User experience and design are top priorities at Landkit.
            </p>

          </div>
          <div class="col-auto">

            <!-- Badge -->
            <span class="badge rounded-pill bg-success-soft">
              <span class="h6 text-uppercase"><?=count_ser($id)?> services</span>
            </span>

          </div>
        </div> <!-- / .row -->

        <div class="row">
          <div class="col-12">

            <!-- Table -->
            <div class="table-responsive mb-7 mb-md-9">
              <table class="table table-align-middle">
                <thead>
                  <tr>
                    <th>
                      <span class="h6 text-uppercase fw-bold">
                        Nom du service
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase fw-bold">
                        Prix
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase fw-bold">
                        Pièce
                      </span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($tt as $tt){ ?>
                  <tr>
                    <td>
                      <p class="mb-1">
                        <?=$tt['nom']?>
                      </p>
                      <p class="fs-sm text-muted mb-0">
                      </p>
                    </td>
                    <td>
                      <p class="fs-sm mb-0">
                        <?=number_format($tt['cout'])?> FCFA
                      </p>
                    </td>
                    <td>
                      <p class="fs-sm mb-0">
                        <?php
                          if (empty($tt['piece'])) {
                            echo "Aucune pièce requise ! Passez au paiement";
                          }else {
                            echo $tt['piece'];
                          }
                        ?>
                      </p>
                    </td>
                    <td>
                      <a href="paiement.php?id=<?=$tt['id']?>" class="btn btn-primary">Payez</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>

          </div>
        </div> <!-- / .row -->
      <?php } ?>

    </div> <!-- / .container -->
  </section>

  <!-- TESTIMONIALS -->
  <section class="pt-8 pt-md-11">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Heading -->
          <h2>
            Remember, our employees are our biggest fans.
          </h2>

          <!-- Text -->
          <p class="fs-lg text-muted mb-7 mb-md-9">
            No matter your job title or department, if you're a member of our team you are our top priority. We can deeply about everyone who works with us.
          </p>

        </div>
      </div><!-- / .row -->
      <div class="card card-row shadow-light-lg">
        <div class="row gx-0">
          <a class="col-12 col-md-6 bg-cover card-img-start" style="background-image: url(assets/img/photos/photo-1.jpg);" href="#!">

            <!-- Image (placeholder) -->
            <img src="assets/img/photos/photo-1.jpg" alt="..." class="img-fluid d-md-none invisible">

            <!-- Shape -->
            <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
              <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor" />
              </svg>
            </div>

          </a>
          <div class="col-12 col-md-6 order-md-1">

            <!-- Body -->
            <div class="card-body">
              <blockquote class="blockquote mb-0 text-center">

                <!-- Text -->
                <p class="mb-5 mb-md-7">
                  “Working at Landkit has been a dream. The team is amazing, the office is perfect, and I feel like I'm part of a family. I'll be here for a great many years.”
                </p>

                <!-- Footer -->
                <footer class="blockquote-footer">
                  <span class="h6 text-uppercase">William Callan</span>
                </footer>

              </blockquote>
            </div>

          </div>

        </div>
      </div>
    </div> <!-- / .container -->
  </section>

<?php
include 'partials/_footer.php';
?>