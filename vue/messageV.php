<?php
// affiche
?>
<p> <?= $message ?></p>
<?php if(isset($exc) ) {
  ?>
<p> <?=$exc->getMessage() ?>
    <?php
}
?>
