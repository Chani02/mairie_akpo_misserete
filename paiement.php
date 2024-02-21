<?php
require_once "config/db.php";
require_once "config/function.php";

if ($_GET) {
    if (!empty($_GET['id'])) {
      $id = clean($_GET['id']);
      $service = one_service($id);
      $id_service = $service['id'];
      $piece = $service['piece'];
      $nom = $service['nom'];
      $cout = $service['cout'];
    
  
        if ($_POST) {
            extract($_POST);
        
            if (isset($submit)) {
                if (isset($submit)) {
                    if (!empty($email)) {
                        $email = clean($email);
                        $reference = clean($reference);
                        $date_en = date("d/m/Y H:i:s");

                        require_once("config/chipdeals.php");
                        $momo = new Momo();
                        $momo->setApiKey("test_FOdigzgSopV8GZggZa89");
                        $transaction = $momo->getStatus($reference);

                        $nom = $transaction->getFirstName();
                        $prenom = $transaction->getLastName();
                        $telephone = $transaction->getPhoneNumber();
                        
                        if (empty($piece)) {
                            $ins = $db->prepare("INSERT INTO demander(reference,id_service, nom, prenom, telephone, email, statut, date_pa) VALUES(?,?,?,?,?,?,?,?)");
                            $ins->execute([$reference,$id_service,$nom,$prenom,$telephone,$email,1,$date_en]);
                    
                            header("location:facture.php?id=$reference");
                        }else{
                            $fichier = photo("fichier");
                            $ins = $db->prepare("INSERT INTO demander(reference,id_service, nom, prenom, telephone, email, piece, statut, date_pa) VALUES(?,?,?,?,?,?,?,?,?)");
                            $ins->execute([$reference,$id_service,$nom,$prenom,$telephone,$email,$fichier,1,$date_en]);
                    
                            header("location:facture.php?id=$reference");
                        }
                    }else{
                        $_SESSION['erreur'] = "Le formualaire est incomplet !";
                    }
                    
                }
            }
        }
    }
} else {
    # code...
}


include 'partials/_header.php';
include 'partials/_menu.php';
?>

  <!-- APPLYING -->
  <section id="services" class="pt-6 pt-md-8">
    <div class="container pb-8 pb-md-11 border-bottom border-gray-300">
      <div class="row">
          <div class="col-12">
            <!-- Payment -->
            <div class="modal-body">
                        <!-- Heading -->
                        <h2 class="fw-bold text-center mb-1">
                        Finalisez mon paiement (<?=$nom?>)
                        </h2>
                        <?=message()?>
                        <!-- Text -->
                        <p class="fs-lg text-center text-muted mb-6 mb-md-8">
                        Remplissez ces informations pour finaliser votre paiement.
                        </p>

                        
                        <form method="POST" id="paymentForm" enctype="multipart/form-data">
                            
                            <input type="text" style="display: none" value="" id="transactionReference" name="reference">
                            
                            <!-- Name -->
                            <div class="form-group">
                                <label class="form-label" for="modalPaymentName">Votre email</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="Remplissez votre adresse email" required>
                            </div>

                            <?php if(!empty($piece)){?>
                                <!-- Name -->
                                <div class="form-group">
                                    <label class="form-label" for="modalPaymentNumbber">Votre pièce</label>
                                    <input class="form-control" name="fichier" type="file" placeholder="Téléversez la pièce jointe adéquate" required>
                                </div>
                            <?php } ?>

                            <!-- Submit -->
                            <input type="submit" style="display: none" value="Payez" name="submit" id="submit">
                            
                        </form>
                        
                        <button class="chipdeals-button btn w-100 btn btn-outline-success mt-3 lift" amount="3000">Finalisez mon paiement de <?=$cout?> FCFA</button>

                    </div>
          </div>
        </div> <!-- / .row -->


    </div> <!-- / .container -->
  </section>
  
  <script>

    document.addEventListener("chipdealsPaymentSucceeded", (event) => {
        console.log(event.detail.description);
        console.log(event.detail);
        const formSubmitter = document.getElementById("submit")
        const referenceTag = document.getElementById("transactionReference")
        referenceTag.value=event.detail.fullTransaction.reference

        formSubmitter.click()
    });
    
</script>

<?php
include 'partials/_footer.php';
?>