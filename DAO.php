<?php
require_once('User.php');

class DAO {
    function get_pdo(){
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=simple_project", "root", "");
            return $pdo;
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }

    public function authentification($login, $mdp){
        $pdo = $this->get_pdo();
        $res = $pdo->prepare("SELECT * from user where login = ? and mdp = ?;");
        $res->execute([$login, $mdp]);

        if($ligne = $res->fetch()){
            return new User($ligne["id"],$ligne["login"],$ligne["mdp"]);
        }
        return null;
    }

    public function getUser($id){
        $pdo = $this->get_pdo();
        $res = $pdo->prepare("SELECT * FROM user WHERE id = ?;");
        $res->execute([$id]);
        if($ligne = $res->fetch()){
            return new User($ligne["id"],$ligne["login"],$ligne["mdp"]);
        }
        return null;
    }
}

?>