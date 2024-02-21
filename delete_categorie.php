<?php 
require_once 'config/db.php';
require_once 'config/function.php';
online();
// Est-ce que l'id existe et n'est pas vide dans l'URL
if(isset($_GET['id']) && !empty($_GET['id'])){

    // On nettoie l'id envoyé
    $id = htmlspecialchars(trim($_GET['id']));


    $sql = $db->prepare("SELECT * FROM categorie WHERE id = ?");
    $sql->execute([$id]);
    $produit = $sql->fetch();

    if(!$produit){
        $_SESSION['erreur'] = "Cet id n'existe pas";
        header('Location: list_categorie.php');
        die();
    }

    $statut = 0 ;
    $update = $db->prepare("UPDATE categorie SET statut= ? WHERE id=?");
    $update->execute([$statut,$id]);
    $_SESSION['message'] = "Ligne supprimé";
    header('Location: list_categorie.php');


}else{
    $_SESSION['erreur'] = "URL Invalide";
    header('Location: list_categorie.php');
}