<?php
require_once "config/db.php";
require_once "config/function.php";

if ($_POST) {
  extract($_POST);
  if (isset($submit)) {
    if (!empty($nom)) {
      $nom = htmlspecialchars(trim($nom));

      $ins = $db->prepare("INSERT INTO categorie(nom,statut) VALUES(?,?)");
      $ins->execute([$nom,1]);

      $_SESSION['message'] = "Votre catégorie a été enrégistré avec succès";
    }
  }
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
                Ajoutez une catégorie
              </h4>

            </div>
            <div class="card-body">
        
            <?=message()?>

              <!-- Form -->
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <!-- Name -->
                    <div class="form-group">
                      <label class="form-label" for="name">Nom</label>
                      <input class="form-control" name="nom" id="name" type="text" placeholder="Nom de la catégorie">
                    </div>

                  </div>
                  <div class="col-12 col-md-auto">

                    <!-- Button -->
                    <button name="submit" class="col-12 btn w-100 btn-primary" type="submit">
                      Créez
                    </button>

                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </main>
 
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
<?php
include 'partials/_footer_b.php';
?>