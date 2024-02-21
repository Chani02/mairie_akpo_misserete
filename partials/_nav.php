
  <!-- BREADCRUMB -->
  <nav class="bg-dark d-md-none">
    <div class="container-md">
      <div class="row align-items-center">
        <div class="col">

          <!-- Breadcrumb -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <span class="text-white">
                Account
              </span>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              <span class="text-white">
                General
              </span>
            </li>
          </ol>

        </div>
        <div class="col-auto">

          <!-- Toggler -->
          <div class="navbar-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidenavCollapse" aria-controls="sidenavCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </nav>

  <!-- HEADER -->
  <header class="bg-dark pt-9 pb-11 d-none d-md-block">
    <div class="container-md">
      <div class="row align-items-center">
        <div class="col">

          <!-- Heading -->
          <h1 class="fw-bold text-white mb-2">
            <?=$_SESSION['prenom']?> <?=$_SESSION['nom']?>
          </h1>

        </div>
        <div class="col-auto">
          <!-- Button -->
          <a href="decon.php" class="btn btn-sm btn-gray-300-20">
            Déconnexion
          </a>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </header>
