<?php
class Watchlist extends Database {
    private $code_anime;
    private $code_utilisateur;

    public function getCode_anime()
    {
        return $this->code_anime;
    }
    public function setCode_anime($code_anime)
    {
        $this->code_anime = $code_anime;
    }

    public function getCode_utilisateur()
    {
        return $this->code_utilisateur;
    }
    public function setCode_utilisateur($code_utilisateur)
    {
        $this->code_utilisateur = $code_utilisateur;
    }

    // Méthode pour ajouter un anime à la watchlist
    public function add_anime()
    {
        $add = $this->PDO->prepare("INSERT INTO `watchlist`(`Code_utilisateur`, `Code_anime`) VALUES (?,?)");
        $add->bindValue(1, $this->code_utilisateur, PDO::PARAM_INT);
        $add->bindValue(2, $this->code_anime, PDO::PARAM_INT);
        $add->execute();
    }

    // Méthode pour récupérer les codes anime de la watchlist d'un utilisateur
    public function recup_code()
    {
        $affichage = $this->PDO->prepare("SELECT `Code_anime`  FROM `watchlist` WHERE `Code_utilisateur` = ?");
        $affichage->bindValue(1, $this->code_utilisateur, PDO::PARAM_INT);
        $affichage->execute();
        return $affichage->fetchAll();
    }

    // Méthode pour supprimer un anime de la watchlist
    public function delete_anime()
    {
        $delete = $this->PDO->prepare("DELETE FROM `watchlist` WHERE `Code_utilisateur` = ? AND `Code_anime` = ?");
        $delete->bindValue(1, $this->code_utilisateur, PDO::PARAM_INT);
        $delete->bindValue(2, $this->code_anime, PDO::PARAM_INT);
        $delete->execute();
    }

    public function verifDoublon()
    {
        $verif = $this->PDO->prepare("SELECT * FROM `watchlist` WHERE `Code_utilisateur` = ? AND Code_anime = ?");
        $verif->bindValue(1, $this->code_utilisateur, PDO::PARAM_INT);
        $verif->bindValue(2, $this->code_anime, PDO::PARAM_INT);
        $verif->execute();
        return $verif->fetch();
    }

    public function countAnime()
    {
        $count = $this->PDO->prepare("SELECT COUNT(Code_anime)codeAnime FROM `watchlist` WHERE `Code_utilisateur` = ?;");
        $count->bindValue(1, $this->code_utilisateur, PDO::PARAM_INT);
        $count->execute();
        return $count->fetch();
    }
}

