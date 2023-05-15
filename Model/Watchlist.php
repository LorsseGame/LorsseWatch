<?php

class Watchlist extends Database {
    private $code_anime;
    private $code_utilisateur;

    public function getCode_anime()
    {
        $this->code_anime;
    }
    public function setCode_anime($code_anime)
    {
        $this->code_anime = $code_anime;
    }

    public function getCode_utilisateur()
    {
        $this->code_utilisateur;
    }
    public function setCode_utilisateur($code_utilisateur)
    {
        $this->code_utilisateur = $code_utilisateur;
    }

    public function add_anime (){
        $add = $this->PDO->prepare("INSERT INTO `watchlist`(`Code_utilisateur`, `Code_anime`) VALUES (?,?)");
        $add->bindValue(1,$this->code_utilisateur,PDO::PARAM_INT);
        $add->bindValue(2,$this->code_anime,PDO::PARAM_INT);
        $add->execute();
    }

    public function recup_code (){
        $affichage = $this->PDO->prepare("SELECT `Code_anime`  FROM `watchlist` WHERE `Code_utilisateur` = ?");
        $affichage->bindValue(1,$this->code_utilisateur,PDO::PARAM_INT);
        $affichage->execute();
        return $affichage ->fetchAll();
    }

    public function affichage()
    {
        $afficher = $this->PDO->prepare("SELECT `image_home` FROM `anime` WHERE Code_anime = ? ");
        $afficher->bindValue(1,$this->code_anime,PDO::PARAM_INT);
        return $afficher->fetchAll();
    }
}