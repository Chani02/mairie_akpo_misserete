<?php
require_once "config/db.php";
require_once "config/function.php";

online();
$sql = $db->query("SELECT * FROM blog WHERE statut = 1 ORDER BY id DESC");
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
                Liste des articles
              </h4>

              <a href="post.php" class="btn btn-primary-soft">Postez un article</a>

            </div>
            <div class="card-body">

            <?=message()?>

            <table id="example" class="table table-bordered table-responsive display" style="width:100%">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>   
                    <th scope="col">Actions</th>   
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($all as $a => $all){ ?>
                        <tr>
                            <th scope="row"><?=$a+1?></th>
                            <td><?=substr($all['titre'],0, 10)?>...</td>
                            <td>
                              <a href="onepost.php?id=<?=$all['id']?>">Voir plus<i class="fe fe-eye"></i> </a>
                            </td>
                            <td><?=$all['date_en']?></td>
                            <td><a href="deletepost.php?id=<?=$all['id']?>" onclick="return confirm('Êtes vous sûr de vouloir supprimer la ligne <?=$a+1?> ?');">Supprimez<i class="fe fe-trash"></a></td>
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