<?php

require '../config/config.php';

$idres = $_POST['idres'];
$stat = $_POST['stat'];




$db = config::getConnexion();
try {
    
    $query = $db->prepare("UPDATE reservation SET stat=:stat where idres=:idres");

    $query->execute([
        'stat' => $stat,
        'idres' => $idres
    ]);
    echo $query->rowCount() . 'records updated successfully';
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>