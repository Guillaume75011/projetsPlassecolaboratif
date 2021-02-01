<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Projet <?= $projet["titre"] ?> (n° <?= $projet["id_projet"] ?>)</title>
    </head>
    <body>
        <h1>Projet <?= $projet["titre"] ?> (n° <?= $projet["id_projet"] ?>)</h1>
        <p>Début : <?= $projet["date_debut"] ?></p>
        <p> Fin : <?= $projet["date_limite"] ?></p>

        <h2>Equipes</h2>
        <ul>
            <?php
            foreach ($equipes as $equipe) {
                ?>
                <li><?= $equipe["id_equipe"] ?> (créée le <?= $equipe["date_creation"]?>)
                <br/>
                Membres : 
                <?php
                foreach ($equipe["membres"] as $membre) {
                    echo "$membre[prenom] $membre[nom]";
                }
                ?>
                </li>
                <?php
            }
            ?>
        </ul>

    </body>
</html>
