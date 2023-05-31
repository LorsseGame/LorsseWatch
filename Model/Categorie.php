<?php

class Categorie extends Database
{
    private $code;
    private $name;

    // Getters et setters pour les propriétés

    public function getCode()
    {
        return $this->code;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    // Méthode pour récupérer le nombre total de catégories
    public function nombre_categorie()
    {
        $nombre = $this->PDO->query("SELECT COUNT(`categorie_ID`)code FROM `categorie`;");
        return $nombre->fetch();
    }

    // Méthode pour afficher toutes les catégories
    public function affichage()
    {
        $affichage =  $this->PDO->query("SELECT `categorie_Name` FROM `categorie`;");
        return $affichage->fetchAll();
    }

    // Méthode pour récupérer l'ID d'une catégorie en fonction de son nom
    public function recup()
    {
        $rec = $this->PDO->prepare("SELECT `categorie_ID` FROM `categorie` WHERE `categorie_Name` = ?");
        $rec->bindValue(1, $this->name, PDO::PARAM_STR);
        $rec->execute();
        return $rec->fetch();
    }
}
