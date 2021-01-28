<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Premier pas</title>
    </head>
    <body>
        <h1> Guillaume Vechambre </h1>

        <?php
        if ($erreur==null) {
            
        ?>
        <p> Session vaut <?= $session["nom"] ?> </p>
        <?php
        } else {
            ?>
        <div class="erreur"> <?=$erreur ?></div>
        <?php
        }
        ?>

    </body>
</html>
