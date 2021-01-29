<?php

require_once "modele/SessionDAO.php";
// c'ets le controleur qui gère les exceptions
try{
$sessions = SessionDAO::getAll();
require_once "vue/sessionsV.php";
}
catch(PDOException $exc){
    $message="Problème technique. Veuillez essayer ultérieurement";
   // $exc=null;
    require_once "Vue/messageV.php";
    
}
?>
    