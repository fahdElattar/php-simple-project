<?php

require_once('DAO.php');

class User {
    private $id;
    private $login;
    private $mdp;

    function __get($prop){
        switch ($prop) {
            case 'id': return $this->id; break;
            case 'login': return $this->login; break;
            case 'mdp': return $this->mdp; break;
        }
    }

    function __construct($id, $login, $mdp){
        $this->id = $id;
        $this->login = $login;
        $this->mdp = $mdp;
    }

    public static function authentification($login, $mdp){
        $dao = new DAO();
		return $dao->authentification($login, $mdp);
    }

    public static function getUser($id){
        $dao = new DAO();
        return $dao->getUser($id);
    }
}

?>