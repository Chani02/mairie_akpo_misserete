<?php
require_once "config/db.php";
require_once "config/function.php";

if ($_POST) {
  extract($_POST);
  if (isset($submit)) {
    if (!empty($categorie) && !empty($nom) && !empty($cout)) {
      $categorie = htmlspecialchars(trim($categorie));
      $nom = htmlspecialchars(trim($nom));
      $cout = htmlspecialchars(trim($cout));
      $piece = htmlspecialchars(trim($piece));

      $ins = $db->prepare("INSERT INTO service(categorie,nom,cout,PIECE,statut) VALUES(?,?,?,?,?)");
      $ins->execute([$categorie,$nom,$cout,$piece,1]);

      $_SESSION['message'] = "Votre servvice a été enrégistré avec succès";
    }
  }
}

$sql = $db->query("SELECT * FROM categorie WHERE statut = 1 ORDER BY id DESC");
$all = $sql->fetchAll();

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
                Ajoutez un service
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
                      <label class="form-label" for="name">Catégorie</label>
                      <select name="categorie" class="form-select" aria-label="Default select example">
                        <?php foreach($all as $a => $all){ ?>
                            <option value="<?=$all['id']?>"><?=$all['nom']?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <!-- Name -->
                    <div class="form-group">
                      <label class="form-label" for="name">Nom</label>
                      <input class="form-control" name="nom" id="name" type="text" placeholder="Nom du service">
                    </div>
                    <!-- Name -->
                    <div class="form-group">
                      <label class="form-label" for="cout">Coût</label>
                      <input class="form-control" name="cout" id="cout" type="text" placeholder="Cout du service">
                    </div>
                    <!-- Name -->
                    <div class="form-group">
                      <label class="form-label" for="piece">Ce service a t-il besoin de pièce ? <br> 
                      Si oui, remplissez les pièces nécessaires. <br> 
                      Sinon, laissez ce champ vide !</label>
                      <input class="form-control" name="piece" id="name" type="text" placeholder="Pièce du service">
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