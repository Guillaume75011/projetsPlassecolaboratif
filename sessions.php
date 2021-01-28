<?php

require_once "modele/SessionDAO.php";
$sessions = SessionDAO::getAll();
require_once "vue/sessionsV.php";
?>
    