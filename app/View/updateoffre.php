<?php

require './config.php';

$ido = $_POST['ido'];
$photo = $_POST['photo'];




$db = config::getConnexion();
try {
    
    $query = $db->prepare("UPDATE offre SET photo=:photo where ido=:ido");

    $query->execute([
        'photo' => $photo,
        'ido' => $ido
    ]);
    echo $query->rowCount() . 'records updated successfully';
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>