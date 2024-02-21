<?php
require_once "config/db.php";

$sql = $db->query("SELECT * FROM blog WHERE statut = 1 ORDER BY id DESC LIMIT 12");
$all = $sql->fetchAll();

include 'partials/_header.php';
include 'partials/_menu.php';

?>

  <!-- BREADCRUMB -->
  <nav class="bg-gray-200">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <!-- Breadcrumb -->
          <ol class="breadcrumb breadcrumb-scroll">
            <li class="breadcrumb-item">
              <a href="blog.html" class="text-gray-700">
                Blog
              </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Tous les articles
            </li>
          </ol>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </nav>

  <!-- SEARCH -->
  <section class="py-6">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <!-- Form -->
          <form method="POST" class="rounded shadow">
            <div class="input-group input-group-lg">

              <!-- Text -->
              <span class="input-group-text border-0 pe-1">
                <i class="fe fe-search"></i>
              </span>

              <!-- Input -->
              <input type="search" name="search" class="form-control border-0 px-1" aria-label="Trouvez un article"
                placeholder="Trouvez un article">

              <!-- Text -->
              <span class="input-group-text border-0 py-0 ps-1 pe-3">

                <!-- Text -->
                <span class="h6 text-uppercase text-muted d-none d-md-block mb-0 me-5">
                  123 résultats
                </span>

                <!-- Button -->
                <button type="submit" class="btn btn-sm btn-primary">
                  Recherchez
                </button>

              </span>

            </div>
          </form>

        </div>
      </div> <!-- / .row -->
    </div>
  </section>

  <!-- ARTICLES -->
  <section>
    <div class="container">
      <div class="row">
        <?php foreach($all as $all){ ?>
          <div class="col-12 col-md-6 col-lg-4 d-flex">

            <!-- Card -->
            <div class="card mb-6 shadow-light-lg lift lift-lg">

              <!-- Image -->
              <a class="card-img-top" href="article.php?id=<?=$all['id']?>">

                <!-- Image -->
                <img src="<?=$all['photo']?>" alt="..." class="card-img-top">

                <!-- Shape -->
                <div class="position-relative">
                  <div class="shape shape-bottom shape-fluid-x text-white">
                    <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor" />
                    </svg>
                  </div>
                </div>

              </a>

              <!-- Body -->
              <a class="card-body" href="article.php?id=<?=$all['id']?>">

                <!-- Heading -->
                <h3>
                  <?=$all['titre']?>
                </h3>

                <!-- Text -->
                <p class="mb-0 text-muted">
                  <?=$all['description']?>
                </p>

              </a>

              <!-- Meta -->
              <a class="card-meta mt-auto" href="article.php?id=<?=$all['id']?>">

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
                  <time datetime="2019-05-02"><?=$all['date_en']?></time>
                </p>

              </a>

            </div>

          </div>
        <?php } ?>

      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- MORE -->
  <section class="py-7 py-md-10">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-8 col-xl-7">

          <!-- Button -->
          <a href="#!" class="btn w-100 btn-outline-gray-300 d-flex align-items-center">
            <span class="mx-auto">Chargez plus</span> <i class="fe fe-arrow-right"></i>
          </a>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- SHAPE -->
  <div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x text-gray-200">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
      </svg>
    </div>
  </div>

<?php
include 'partials/_footer.php';
?>

