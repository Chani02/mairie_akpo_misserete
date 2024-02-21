
  <!-- MAIN -->
  <main class="pb-8 pb-md-11 mt-md-n6">
    <div class="container-md">
      <div class="row">
        <div class="col-12 col-md-3">

          <!-- Card -->
          <div class="card card-bleed border-bottom border-bottom-md-0 shadow-light-lg">

            <!-- Collapse -->
            <div class="collapse d-md-block" id="sidenavCollapse">
              <div class="card-body">

                <!-- Heading -->
                <h6 class="fw-bold text-uppercase mb-3">
                  Gestion
                </h6>

                <!-- List -->
                <ul class="card-list list text-gray-700 mb-6">
                  <li class="list-item <?php echo basename($_SERVER['PHP_SELF']) == 'list_post.php' ? 'active' : ''; ?>
                  <?php echo basename($_SERVER['PHP_SELF']) == 'onepost.php' ? 'active' : ''; ?>
                  <?php echo basename($_SERVER['PHP_SELF']) == 'post.php' ? 'active' : ''; ?>">
                    <a class="list-link text-reset" href="list_post.php">
                      Blog
                    </a>
                  </li>
                  <li class="list-item <?php echo basename($_SERVER['PHP_SELF']) == 'list_paiement.php' ? 'active' : ''; ?>">
                    <a class="list-link text-reset" href="list_paiement.php">
                      Paiements
                    </a>
                  </li>
                  <li class="list-item <?php echo basename($_SERVER['PHP_SELF']) == 'list_service.php' ? 'active' : ''; ?>
                  <?php echo basename($_SERVER['PHP_SELF']) == 'add_service.php' ? 'active' : ''; ?>">
                    <a class="list-link text-reset" href="list_service.php">
                      Services
                    </a>
                  </li>
                  <li class="list-item <?php echo basename($_SERVER['PHP_SELF']) == 'list_categorie.php' ? 'active' : ''; ?>
                  <?php echo basename($_SERVER['PHP_SELF']) == 'add_categorie.php' ? 'active' : ''; ?>">
                    <a class="list-link text-reset" href="list_categorie.php">
                      Catégorie
                    </a>
                  </li>
                </ul>

              </div>
            </div>

          </div>

        </div>