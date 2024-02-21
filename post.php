<?php
require_once "config/db.php";
require_once "config/function.php";

if ($_POST) {
  extract($_POST);
  if (isset($submit)) {
    if (!empty($titre) && !empty($description) && !empty($contenu)) {
      $titre = htmlspecialchars(trim($titre));
      $description = htmlspecialchars(trim($description));
      $photo = photo("photo");
      $contenu = $contenu;
      $date_en = date("d/m/Y");

      $ins = $db->prepare("INSERT INTO blog(titre,photo,description,contenu,date_en) VALUES(?,?,?,?,?)");
      $ins->execute([$titre,$photo,$description,$contenu,$date_en]);

      $_SESSION['message'] = "Votre article a été publié avec succès";
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
                Postez un article
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
                      <label class="form-label" for="name">Titre</label>
                      <input class="form-control" name="titre" id="name" type="text" placeholder="Titre de l'article">
                    </div>

                  </div>
                  <div class="col-12 col-md-12">

                    <!-- Name -->
                    <div class="form-group">
                      <label class="form-label" for="name">Photo de l'article</label>
                      <input class="form-control" name="photo" type="file" placeholder="Photo de l'article">
                    </div>

                  </div>
                  <div class="col-12 col-md-12">

                    <!-- Name -->
                    <div class="form-group">
                      <label class="form-label" for="name">Description de l'article</label>
                      <input class="form-control" name="description" id="name" type="text" placeholder="Description de l'article">
                    </div>

                  </div>
                  <div class="col-12">

                    <!-- Bio -->
                    <div class="form-group">
                      <label class="form-label">Contenu de l'article</label>
                      <textarea name="contenu" id="editor">
                      </textarea>
                    </div>

                  </div>
                  <div class="col-12 col-md-auto">

                    <!-- Button -->
                    <button name="submit" class="btn w-100 btn-primary" type="submit">
                      Publiez
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