<?php
$idProjet = filter_input(INPUT_GET, "idProjet", FILTER_VALIDATE_INT);
if ($idProjet == null || $idProjet == false) {
    $message = "idSession doit être présent et entier";
    require_once 'vue/messageV.php';
} else {
    
    require_once "modele/ProjetDAO.php";
    $projet = ProjetDAO::getProjet($idProjet);
    $equipes = ProjetDAO::getEquipes($idProjet);
 require_once "vue/projetV.php";
}

?>
    
    
    
    