<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "modèle/SessionDAO.php";
$sessions = SessionDao:: getAll();
require_once "vue/sessionV.php";
?>
