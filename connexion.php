<?php
require_once 'config/db.php';
require_once 'config/function.php';

if ($_POST) {
  extract($_POST);
  if (isset($login)) {
    if (!empty($email) && !empty($password)) {

      $email = htmlspecialchars(trim($email));
      $password = sha1(htmlspecialchars(trim($password)));

      $sql = $db->prepare("SELECT * FROM admin WHERE email = ? AND password = ?");
      $sql->execute([$email, $password]);
      $res = $sql->fetch();
      if (!empty($res)) {
        $_SESSION['id'] = $res['id'];
        $_SESSION['nom'] = $res['nom'];
        $_SESSION['prenom'] = $res['prenom'];
        $_SESSION['email'] = $res['email'];
        header("location:list_paiement.php");
      } else {
        $_SESSION['erreur'] = "Identifiants incorrects !";
      }
    } else {
      $_SESSION['erreur'] = "Tous les champs ne sont pas remplies !";
    }
  }
}
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from landkit.goodthemes.co/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 00:20:47 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon" />

  <!-- Map CSS -->
  <link rel="stylesheet" href="../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />

  <!-- Libs CSS -->
  <link rel="stylesheet" href="assets/css/libs.bundle.css" />

  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme.bundle.css" />

  <!-- Title -->
  <title>Landkit</title>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "UA-156446909-2");
  </script>
</head>

<body>

  <!-- CONTENT -->
  <section class="section-border border-primary">
    <div class="container d-flex flex-column">
      <div class="row align-items-center justify-content-center gx-0 min-vh-100">
        <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">

          <!-- Heading -->
          <h1 class="mb-0 fw-bold text-center">
            Se connecter
          </h1>

          <!-- Text -->
          <p class="mb-6 text-center text-muted">
            Accédez à l'interface d'administration.
          </p>
          <?=message()?>
          <!-- Form -->
          <form method="POST" class="mb-6">

            <!-- Email -->
            <div class="form-group">
              <label class="form-label" for="email">
                Adresse email
              </label>
              <input type="email" name="email" class="form-control" id="email" placeholder="nom@gmail.com">
            </div>

            <!-- Password -->
            <div class="form-group mb-5">
              <label class="form-label" for="password">
                Mot de passe
              </label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
            </div>

            <!-- Submit -->
            <button name="login" class="btn w-100 btn-primary" type="submit">
              Connexion
            </button>

          </form>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- JAVASCRIPT -->
  <!-- Map JS -->
  <script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

  <!-- Vendor JS -->
  <script src="assets/js/vendor.bundle.js"></script>

  <!-- Theme JS -->
  <script src="assets/js/theme.bundle.js"></script>

</body>

<!-- Mirrored from landkit.goodthemes.co/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 00:20:47 GMT -->

</html>