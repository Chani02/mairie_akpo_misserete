<?php
require_once "config/db.php";
require_once "config/function.php";
online();
$sql = $db->query("SELECT * FROM demander WHERE statut = 1 ORDER BY id DESC");
$all = $sql->fetchAll();

include 'partials/_header.php';
include 'partials/_menu.php';
include 'partials/_nav.php';
include 'partials/_menu_b.php';
?>
<style>
  body {font-family: Arial, Helvetica, sans-serif;}

  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Add Animation */
  @-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
  }

  @keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
  }

  /* The Close Button */
  .close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

</style>

        <div class="col-12 col-md-9">

          <!-- Card -->
          <div class="card card-bleed shadow-light-lg mb-6">
            <div class="card-header">

              <!-- Heading -->
              <h4 class="mb-0">
                Liste des articles
              </h4>
            </div>
            <div class="card-body">

            <?=message()?>

            <table id="example" class="table table-bordered table-responsive display">
                <thead>
                    <tr>
                    <th scope="col">Référence</th>
                    <th scope="col">Service</th>
                    <th scope="col">Statut</th> 
                    <th scope="col">Actions</th>   
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($all as $a => $all){ ?>
                        <tr>
                            <td><?=$all['reference']?></td>
                            <td><?=one_service($all['id_service'])['nom']?></td>
                            <td>
                                <?php
                                    if ($all['statut'] = 1) {
                                        echo "<span class='badge bg-warning-soft'>En attente</span>";
                                    }elseif ($all['statut'] = 2) {
                                      echo "<span class='badge bg-success-soft'>Traité</span>";
                                  }
                                ?> <br><br>
                                <?=$all['date_pa']?>
                            </td>
                            <td>


                              <!-- Trigger/Open The Modal -->
                              <a href="#" id="myBtn<?=$a+1?>">Infos clients <i class="fe fe-user"></i></a>
                              <br>
                              <div class="modal" id="myModal<?=$a+1?>" tabindex="-1">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Voir les informations du client</h5>
                                      <span class="close<?=$a+1?>">&times;</span>
                                    </div>
                                    <div class="modal-body">
                                    <?=one_service($all['id_service'])['nom']?>
                                      <ul class="list-group">
                                        <li class="list-group-item"><?=$all['nom']?></li>
                                        <li class="list-group-item"><?=$all['prenom']?></li>
                                        <li class="list-group-item"><a href="tel:+<?=$all['telephone']?>"><?=$all['telephone']?></a></li>
                                        <li class="list-group-item"><a href="mailto:<?=$all['email']?>"><?=$all['email']?></a></li>
                                        <li class="list-group-item">
                                          <?php
                                              if ($all['statut'] = 1) {
                                                  echo "<span class='badge bg-warning-soft'>En attente</span>";
                                              }elseif ($all['statut'] = 2) {
                                                echo "<span class='badge bg-success-soft'>Traité</span>";
                                            }
                                          ?>
                                        </li>
                                        <?php if(!empty($all['piece'])){?>
                                        <li class="list-group-item"><a href="<?=$all['piece']?>" target="_blank" rel="noopener noreferrer">Voir la pièce</a></li>
                                        <?php } ?>
                                        <li class="list-group-item"><?=$all['date_pa']?></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <script>
                                // Get the modal
                                var modal<?=$a+1?> = document.getElementById("myModal<?=$a+1?>");

                                // Get the button that opens the modal
                                var btn<?=$a+1?> = document.getElementById("myBtn<?=$a+1?>");

                                // Get the <span> element that closes the modal
                                var span<?=$a+1?> = document.getElementsByClassName("close<?=$a+1?>")[0];

                                // When the user clicks the button, open the modal 
                                btn<?=$a+1?>.onclick = function() {
                                  modal<?=$a+1?>.style.display = "block";
                                }

                                // When the user clicks on <span> (x), close the modal
                                span<?=$a+1?>.onclick = function() {
                                  modal<?=$a+1?>.style.display = "none";
                                }

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                  if (event.target == modal<?=$a+1?>) {
                                    modal<?=$a+1?>.style.display = "none";
                                  }
                                }
                              </script>

                                <a href="valid_paiement.php?id=<?=$all['id']?>" onclick="return confirm('Êtes vous sûr de vouloir valider la ligne <?=$a+1?> ?');">Validez<i class="fe fe-check"></i></a>
                            </td>
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