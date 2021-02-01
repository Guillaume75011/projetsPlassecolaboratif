<?php

class ProjetDAO {

    public static function getProjet($idProjet) {
       /* $result = null;

        $result = array(
            "id_projet" => $idProjet,
            "titre" => "projetCollaboratif",
            "date-debut" => "15/01/2021",
            "date-limite" => "30/01/2021");
        */
       require_once 'DB.php';
       $db = DB :: getConnection();
       
       $sql = "SELECT * FROM projet Where id_projet = :idProjet";
       $stmt = $db->prepare($sql);
       $stmt->bindParam(":idProjet", $idProjet);
       $stmt->execute();
     
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

    public static function getEquipes($idProjet) {
        $result = null;

        $result = array(
            array(
                "id_equipe" => 1,
                "date_creation" => "2021-02-01",
                "membres" => array(
                    array(
                        "id_membre" => 1,
                        "nom" => "Issouf",
                        "prenom" => "Sacko"
                    )
                )
            )
        );
        return $result;
    }

}
?>

