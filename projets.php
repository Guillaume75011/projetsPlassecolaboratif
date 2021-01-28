
  <?php
  $idSession=filter_input(INPUT_GET,"idSession",FILTER_VALIDATE_INT);
        
   $erreur= null;
   $session=null;
    if($idSession==null || $idSession==false)   {
        $erreur="idSession doit être préent et entier";
    } 
    else {
        require_once "modele/SessionDAO.php";
        $session= SessionDAO::getById($idSession);
        if ($session==null){
            $erreur="Session $idSession introuvable";
        }
    }
    
    require_once "vue/indexV.php";
  ?>
    
