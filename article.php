<?php
require_once "config/db.php";

if (!empty($_GET['id'])) {

  $id = htmlspecialchars(trim($_GET['id']));
  $sql = $db->prepare("SELECT * FROM blog WHERE id = ?");
  $sql->execute([$id]);
  $all = $sql->fetch();
}

include 'partials/_header.php';
include 'partials/_menu.php';

?>
  <!-- IMAGE -->
  <section data-jarallax data-speed=".8" class="py-12 py-md-15 bg-cover jarallax" style="background-image: url(<?=$all['photo']?>);"></section>

  <!-- HEADER -->
  <section class="pt-8 pt-md-11">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-9 col-xl-8">

          <!-- Heading -->
          <h1 class="display-4 text-center">
            <?=$all['titre']?>
          </h1>

          <!-- Text -->
          <p class="lead mb-7 text-center text-muted">
            <?=$all['description']?>
          </p>

          <!-- Meta -->
          <div class="row align-items-center py-5 border-top border-bottom">
            <div class="col-auto">

              <!-- Avatar -->
              <div class="avatar avatar-lg">
                <img src="assets/img/photos/avatar1.jpeg" alt="..." class="avatar-img rounded-circle">
              </div>

            </div>
            <div class="col ms-n5">

              <!-- Name -->
              <h6 class="text-uppercase mb-0">
                La mairie
              </h6>

              <!-- Date -->
              <time class="fs-sm text-muted" datetime="<?=$all['date_en']?>">
                <?=$all['date_en']?>
              </time>

            </div>
          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- SECTION -->
  <section class="pt-6 pt-md-8">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-9 col-xl-8">

          <?=$all['contenu']?>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

<?php
include 'partials/_footer.php';
?>

