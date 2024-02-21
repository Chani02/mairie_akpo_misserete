<?php
require_once "config/db.php";
require_once "config/function.php";
online();
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
              <h4 class="mb-0" style="float:right;">
                Liste des catégorie
              </h4>

              <a href="add_categorie.php" class="btn btn-primary-soft">Ajoutez une catégorie</a>

            </div>
            <div class="card-body">

            <?=message()?>

            <table id="example" class="table table-bordered table-responsive display" style="width:100%">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom de la catégorie</th>
                    <th scope="col">Actions</th>   
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($all as $a => $all){ ?>
                        <tr>
                            <th scope="row"><?=$a+1?></th>
                            <td><?=$all['nom']?></td>
                            <td><a href="delete_categorie.php?id=<?=$all['id']?>" onclick="return confirm('Êtes vous sûr de vouloir supprimer la ligne <?=$a+1?> ?');">Supprimez<i class="fe fe-trash"></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
                </table>


            </div>
          </div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </main>
  <script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
  </script>
<?php
include 'partials/_footer_b.php';
?>