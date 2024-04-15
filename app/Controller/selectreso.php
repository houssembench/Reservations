<?php
            
            require '../config/config.php';

            
            $db = config::getConnexion();
            try{
                
               $query="SELECT reservation.idres, reservation.dated, reservation.datef,reservation.dateres ,reservation.stat,offre.titre,offre.prix,offre.categorie 
               FROM reservation
               INNER JOIN offre ON reservation.ido = offre.ido";
        
               
               $result= $db->query($query);
            } 
            catch(PDOException $e){
                echo 'echec de connexion:' .$e->getMessage();
            }
            foreach($result as $row){
                if(
                    $row["stat"] == "confirmed"
                )
                echo "<tr><td>" . $row["idres"]. "</td><td>" . $row["dated"]. "</td><td>" . $row["datef"]. "</td><td>" . $row["dateres"]. "</td><td><span class='status completed'>" . $row["stat"]. "</span></td><td>" . $row["titre"]. "</td><td>" . $row["prix"]. "</td><td>" . $row["categorie"];
                if(
                    $row["stat"] == "pending"
                )
                echo "<tr><td>" . $row["idres"]. "</td><td>" . $row["dated"]. "</td><td>" . $row["datef"]. "</td><td>" . $row["dateres"]. "</td><td><span class='status pending'>" . $row["stat"]. "</span></td><td>" . $row["titre"]. "</td><td>" . $row["prix"]. "</td><td>" . $row["categorie"];
                if(
                    $row["stat"] == "cancelled"
                )
                echo "<tr><td>" . $row["idres"]. "</td><td>" . $row["dated"]. "</td><td>" . $row["datef"]. "</td><td>" . $row["dateres"]. "</td><td><span class='status process'>" . $row["stat"]. "</span></td><td>" . $row["titre"]. "</td><td>" . $row["prix"]. "</td><td>" . $row["categorie"];
            }
            

           
            
            ?>