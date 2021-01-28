<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des sessionns</title>
    </head>
    <body>
        <h1>Liste des Sessions</h1>
        <h1>Il y a <?= count($sessions)?> sessions</h1>
        <?php
        if(count($sessions) != 0){
            ?>
         <p>Il y a <?= count($sessions)?> </p>
         <ol>
            <?php
             foreach ($sessions as $session){
            ?>
             <li><a href="projets.php?idsession=<?= $session["id_session_formation"]?>"><?= $session["nom"]?></a>
                 (n° <?= $session["id_session_formation"] ?></li>
             
            <?php
                }
            ?>
         </ol>
         <?php
        }
        else {
            ?>
         <p>Aucune session trouvée</p>
         <?php
        }
        ?>
    </body>
</html>
