<?php
  switch (basename($_SERVER['PHP_SELF'])) {
     case 'index.php':
        $head_title = 'Accueil';
        break;
     case 'apropos.php':
        $head_title = 'A propos';
        break;
     case 'services.php':
        $head_title = 'Services';
        break;
     case 'blog.php':
        $head_title = 'Blog';
        break;
     case 'contact.php':
        $head_title = 'Contact';
        break;
     default:
        $head_title = "Tableau de bord";
        break;
  }

?>

<!doctype html>
<html lang="en">

<!-- Mirrored from landkit.goodthemes.co/coworking.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 00:18:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon.png">


  <!-- Map CSS -->
  <link rel="stylesheet" href="../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />

  <!-- Libs CSS -->
  <link rel="stylesheet" href="assets/css/libs.bundle.css" />

  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme.bundle.css" />

  <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

  <!-- Title -->
  <title><?=$head_title?></title>
  

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script
  src="https://cdn.jsdelivr.net/gh/Chipdeals/mobile-money-api-Javascript@1.8.3/lib.min.js"
  apiKey="test_FOdigzgSopV8GZggZa89"></script>

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
