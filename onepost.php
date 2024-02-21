<?php
require_once "config/db.php";
require_once "config/function.php";
online();
if (!empty($_GET['id'])) {

    $id = htmlspecialchars(trim($_GET['id']));
    $sql = $db->prepare("SELECT * FROM blog WHERE id = ?");
    $sql->execute([$id]);
    $all = $sql->fetch();
}

include 'partials/_header.php';
include 'partials/_menu.php';
include 'partials/_nav.php';
include 'partials/_menu_b.php';
?>

        <div class="col-12 col-md-9">

          <!-- Card -->
          <div class="card card-bleed shadow-light-lg mb-6">
            <div class="card-header">

              <!-- Heading -->
              <h4 class="mb-0">
                Voir les informations d'un article
              </h4>

            </div>
            <div class="card-body">

            <?=message()?>

            <div class="card">
                <img src="<?=$all['photo']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$all['titre']?></h5>
                    <p class="card-text"><?=$all['description']?></p>
                </div><br>
                <ul class="list-group list-group-flush">
                    <p><?=$all['contenu']?></p>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link"><?=$all['date_en']?></a>
                </div>
            </div>
          </div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </main>
<?php
include 'partials/_footer_b.php';
?>