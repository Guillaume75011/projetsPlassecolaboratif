<?php

function erreur($cle) {
    global $erreurs;
    if (array_key_exists($cle, $erreurs)) {
        ?>
        <span class="erreur"><?= $erreurs[$cle] ?> </span>
        <?php
    }
}
?>
<header>
    <a href="index.php" id="menuIndex"> Accueil </a>
    <a href="nouveauMembre.php" id="menuNouveauMembre"> Nouveau membre</a>
    <hr/>
</header>