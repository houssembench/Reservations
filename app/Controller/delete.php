<?php






require '../config/config.php';
$ido = $_POST['ido'];
$idres = $_POST['idres'];

$db = config::getConnexion();
try {
    if(!empty($ido))
    {

        $query = $db->prepare("DELETE FROM offre where ido=:ido");

        $query->execute([
             'ido' => $ido
         ]);
         echo $query->rowCount() . 'records deleted successfully';
    }
    if(!empty($idres))
    {


        $query = $db->prepare("DELETE FROM reservation where idres=:idres");

        $query->execute([
            'idres' => $idres
        ]);
        echo $query->rowCount() . 'records deleted successfully';

    }
   
    
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>