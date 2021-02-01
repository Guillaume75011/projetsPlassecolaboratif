<?php

class ProjetDaoInsert {

    public static function insert($idsession, $titre, $dateLimite, $sujet, $dateDebut) {
        require_once 'DB.php';
        $db = DB::getConnection();
        // Préparer une requête SQL
        $sql = "INSERT INTO projet(id_formateur,id_session_formation,titre,date_limite,sujet,date_debut) 
                VALUES(1,:id_session_formation,:titre,:date_limite,:sujet,:date_debut)";

        $stmt = $db->prepare($sql);
        //$stmt->bindParam(":id_formateur", $id_formateur);
        $stmt->bindParam(":id_session_formation", $idsession);
        $stmt->bindParam(":titre", $titre);
        $stmt->bindParam(":date_limite", $dateLimite);
        $stmt->bindParam(":sujet", $sujet);
        $stmt->bindParam(":date_debut", $dateDebut);
        $stmt->execute();
    }

}

?>
