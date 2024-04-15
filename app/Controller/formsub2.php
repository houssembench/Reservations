<?php

include('../Controller/reservationC.php');




require '../config/config.php';
$dated = $_POST['dated'];
$datef = $_POST['datef'];
$ido = $_POST['ido'];
$cid = $_POST['cid'];
$stat="pending";



$db = config::getConnexion();
$today = date("Y-m-d");

if ($dated < $today || $datef <= $dated) {
    echo "Date Invalid";
}
else
{
    try {
    


        
        $requette = $db->prepare("INSERT INTO reservation(ido,cid,dated,datef,stat) VALUES (:ido,:cid,:dated,:datef,:stat)");
    
        
        $requette->bindParam(':cid', $cid);
        $requette->bindParam(':stat', $stat);
        $requette->bindParam(':ido', $ido);
        $requette->bindParam(':dated', $dated);
        $requette->bindParam(':datef', $datef);
        
    
        
        $requette->execute();
    
        echo 'Added With Success';
    } catch (PDOException $e) {
        echo 'echec de connexion:' . $e->getMessage();
    }
}


?>