<?php

$erreurs= array();
if($_SERVER["REQUEST_METHOD"]=="GET"){
    //Afficher le formulairenvierge
    require_once "vue/nouveauProjetV.php";
}

else{
    //Triatement en POST
    //si pas ok, psitionner des messages
    //et on affiche le formulaire avec les valeurs+messges
    // si, ok appele le modèle
    $idsession=filter_input(INPUT_GET,"idsession",FILTER_VALIDATE_INT);
    $titre= filter_input(INPUT_POST,"titre");
    $dateLimite=filter_input(INPUT_POST,"dateLimite");
    $sujet=filter_input(INPUT_POST,"sujet");
    $dateDebut=filter_input(INPUT_POST,"dateDebut");
    // Mettre les erreurs possible dans un tableau
    $erreurs= array();
    if ($dateLimite==null || $dateLimite=== false){
        $erreurs["dateLimite"]="Veuillez saisir une date limite correct";
        require_once "vue/nouveauProjetV.php";
    } else{
        if ($dateDebut==null || $dateDebut=== false){
        $erreurs["dateDebut"]="Veuillez saisir une date de fin correct";
        require_once "vue/nouveauProjetV.php";
        }
        else{
            if ($idsession==null || $idsession=== false){
                $erreurs["idsession"]="idsession doit être présent et entier";
                require_once "vue/nouveauProjetV.php";
            }
        else{
        require_once "vue/nouveauProjetV.php";
        require_once "modele/ProjetDaoInsert.php";
        ProjetDaoInsert::insert($idsession,$titre,$dateLimite,$sujet,$dateDebut);
        // rediriger vers index.php
        header("Location: index.php");
        }
      
    }
    
  }
}

?>
