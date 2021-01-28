<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste de sessions </title>
    </head>
    <body>
        <h1> Liste de sessions : </h1>
        
        <?php
        if (count($sessions) != 0) {
            ?>
            <h2> Il y a <?= count($sessions) ?>  projets :</h2>
            <ol>
                <?php
                foreach ($sessions as $session) {
                    ?>
                    <li> <a href="projets.php?idSession=<?= $session["id_session_formation"]?>"><?=
                    $session["nom"] ?> </a>
                        (# <?= $session["id_session_formation"] ?>)</li>
                    <?php
                }
                ?>
            </ol>
            <?php
        } else {
            ?>
        <p> Aucune session trouvée </p>
        <?php
        }
        ?>
    </body>
</html>
