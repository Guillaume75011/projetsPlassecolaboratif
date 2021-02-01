<?php
require_once 'headerV.php';
?>
<!-- url à laqulelle envoyés les données.
sI PAS PRECISé, renvoit l'url d'ou vient la page
-->
<h1> Enregistrer votre projet </h1>
<form action="" method="POST">
    
    Titre: <input type="text" name="titre" id="titre" size="20"/> 
    <br>
    Date limite : <input type="date" name="dateLimite" id="dateLimite" size="20"/>
    <!--<?= erreur("dateLimite") ?>--><br>
    Sujet: <input type="text" name="sujet" id="sujet" size="60"/> 
    <br>
    Date début : <input type="date" name="dateDebut" id="dateDebut" size="20"/> 
   <!-- <?= erreur("dateDebut") ?>-->
   <br/>
   <button type="submit" id="boutonValider"> Valider </button>
   
</form>



