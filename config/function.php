<?php
function message(){
    if (!empty($_SESSION['erreur'])) {
       echo '<span class="badge bg-danger-soft"><h1>'.$_SESSION['erreur'].'</h1></span>';
        $_SESSION['erreur'] = "";
    }
    if (!empty($_SESSION['message'])) {
        echo '<span class="badge bg-success-soft"><h1>'.$_SESSION['message'].'</h1></span>';
         $_SESSION['message'] = "";
     }
}

//Fonction pour vérifier si la session de l'utilisateur est démarée et le rediriger à la page de connexion sinon
function online(){

    if(!isset($_SESSION['id']) && !isset($_SESSION['nom']) && empty($_SESSION['id']) && empty($_SESSION['nom'])){
        //Message d'erreur
        $_SESSION['erreur'] = "Veuillez vous reconnecter"; 
        //Redirection
        header("location: connexion.php");
        exit;
    }

    $uniq = $_SESSION['id'];
    
}



//Fonction pour nettoyer les données

function clean($post){
    global $db;
    $a = htmlspecialchars(trim($post));
    return $a;
}

//Fonction pour selectionner de la base de données

function all($nom){
    global $db;

    $sql = $db->query("SELECT * FROM $nom WHERE statut != 0 ORDER BY id DESC");
    $all = $sql->fetchAll();
    return $all;
}

//Fonction pour générer des caractères uniques 
function strand($length = 50) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


// Traiter les Fichiers file images
function photo($nom){
    if (isset($_FILES[$nom])) {
        if (isset($_FILES[$nom]) AND $_FILES[$nom]['error'] == 0){
            // Testons si le fichier n'est pas trop gros
            if ($_FILES[$nom]['size'] <= 10000000000000){
                    // Testons si l'extension est autorisée
                    $infosfichier = pathinfo($_FILES[$nom]['name']);
                    $extension_upload = $infosfichier['extension'];
                    $extensions_autorisees = array('png','jpg','jpeg','pdf');
                    $name = $infosfichier['filename'];
                    $file = '' .strand(). '.' .$extension_upload;
    
                    if (in_array($extension_upload, $extensions_autorisees)){
                            // On peut valider le fichier et le stocker définitivement
                            move_uploaded_file($_FILES[$nom]['tmp_name'], 'images/'. $file);
                            return $piece = 'images/'.$file;
                            
                    }else{
                        
                        $_SESSION['erreur'] = "L'extension du fichier n'est pas autorisée.";
                        
                        }
            }else{ 
                $_SESSION['erreur'] = "Le fichier est trop volumineux.";
            }
        }else {
            $_SESSION['erreur'] = "Erreur !";
        }
    }else {
        $_SESSION['erreur'] = "Le formulaire est incomplet !";
    } 
}

function one_service($id){
	global $db;

	$sql = $db->query("SELECT * FROM service WHERE id = ".$id." AND statut = 1");
	$all = $sql->fetch();
	return $all;
}

function one_demande($id){
	global $db;

	$sql = $db->prepare("SELECT * FROM demander WHERE reference = ?");
	$sql->execute([$id]);
	$all = $sql->fetch();
	return $all;
}


//Retourne le contenu de la ligne avec email en paramètre
function cat($id){
	global $db;
	$sql = $db->prepare("SELECT * FROM categorie WHERE id = ?");
	$sql->execute([$id]);
	$all = $sql->fetch();
	return $all;
}

function service($id){
	global $db;
	$sql = $db->prepare("SELECT * FROM service WHERE categorie = ? AND statut = ?");
	$sql->execute([$id,1]);
	$all = $sql->fetchAll();
	return $all;
}


function comment($id,$nom,$email,$commentaire){
	global $db;

	$dat = date("Y-m-d H:i:s");
	$statut = 1;

	$ins = $db->prepare("INSERT INTO coment(id_art, nom, email, commentaire, dat,statut) VALUES (?,?,?,?,?,?)");

	if ($ins->execute([$id,$nom,$email,$commentaire,$dat,$statut])) {
		return true;
	}else{
		return false;
	}
	
}


function user_exist($email){
        global $db;  
        $sql = $db->prepare("SELECT * FROM users WHERE email = ? AND statut != 0");
        $sql->execute([$email]);
        $res = $sql->fetch();
        return $res;
}


function count_ser($id){
	global $db;

	$sl = $db->prepare("SELECT COUNT(*) FROM service WHERE categorie = ? AND statut = 1");
	$sl->execute([$id]);
	$al = $sl->fetch();
    return $al[0];
}


 //Fonction pour envoyer des courriels 
function envoi_mail($to,$subject,$from,$text){

	// Pour envoyer du courrier HTML, l'en-tête Content-type doit être défini.
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  
	// Créer les en-têtes de courriel
    $headers .= 'From: Mémoire de Brice <'.$from.">\r\n".'Reply-To: '.$from."\r\n" .'X-Mailer: PHP/' .phpversion();
  
	// Composer un simple message électronique HTML
	$message = '<html><body>';
	$message .= '<p>'.$text.'</p>';
	$message .= '</body></html>';
  
  	// Envoi d'email
	if (mail($to, $subject, $message, $headers)){
	  return true;
	}else{
	  return false;
	} 

}


//Fonction pour rediriger si l'utilisateur est inactive
function login(){
    if (empty($_SESSION['uniq'])) {
        $_SESSION['erreur'] = "Veuillez vous reconnecter !";
       header("location:connexion.php");
    }
}