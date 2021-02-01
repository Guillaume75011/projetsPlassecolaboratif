<?php

class projetDAO{
    
    public static function getAll() {
        $list = null;

        $listProjet = [
            "projet" =>array(1,projetCollaboratif,"15/01/2021","30/01/2021",1),
            "id_equipe" => 1,
            
            "membre" =>array(
                "id_membre" => 1,
                "nom" => "Issouf",
                "Prenom" => "Sacko"),
           
        ];

        return $listProjet;

        // return $result[0][1];
    }
}
    
 ?>

