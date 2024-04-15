<?php

include('../Controller/offreC.php');
require './config.php';
$dated = $_POST['dated'];
$datef = $_POST['datef'];
$categorie = $_POST['categorie'];
$titre = $_POST['titre'];
$description = $_POST['description'];
$prix = $_POST['prix'];

$db = config::getConnexion();
try {
    


    /**Préparer l'instruction */
    $requette = $db->prepare("INSERT INTO offre(titre,descriptions,categorie,dated,datef,prix) VALUES (:titre,:descrip,:categorie,:dated,:datef,:prix)");

    //**********************bind pour associer des valeurs spécifiques à chaque paramètre de la requête préparée*************
    $requette->bindParam(':titre', $titre);
    $requette->bindParam(':descrip', $description);
    $requette->bindParam(':categorie', $categorie);
    $requette->bindParam(':dated', $dated);
    $requette->bindParam(':datef', $datef);
    $requette->bindParam(':prix', $prix);

    
    $requette->execute();

    echo 'Added With Success';
} catch (PDOException $e) {
    echo 'echec de connexion:' . $e->getMessage();
}
?>