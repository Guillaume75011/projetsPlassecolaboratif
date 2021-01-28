<?php

/**
 * Session  de id $idSession (tableau 
 * 
 * @param type = $idSession
 */
class SessionDAO {

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
        $list = null;

        $listSessions = [
            array("id_session_formation" => 1,
                "nom" => "CDA 1",
                 "date" => "16/11/2021"),
            array("id_session_formation" => 2,
                "nom" => "WWA",
                "date" => "14/10/2020"),
             array("id_session_formation" => 3,
                "nom" => "ImportExport",
                "date" => "14/10/2020"),
            
        ];

        return $listSessions;

        // return $result[0][1];
    }

}
