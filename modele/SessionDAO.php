<?php

class SessionDAO {

    /**
     * 
     */
    public static function getById($idSession) {
        $result = null;
        if ($idSession == 1) {
            $result = array(
                "id_session" => 1,
                "nom" => "CDA 1"
            );
        }
        return $result;
    }
    public static function getAll() {
       /* $result=array(
            array(
                "id_session_formation" => 1,
                "nom" => "CDA 1"),
            array(
                "id_session_formation" => 2,
                "nom" => "CDA 2")
            ,array(
                "id_session_formation" => 3,
                "nom" => "CDA 3")
        );
        return $result;*/
        require_once 'DB.php';
        $db=DB::getConnection();
        // Préparer une requête SQL
        $sql="SELECT * FROM session_formation ";
        $stmt = $db->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   
    }
}
