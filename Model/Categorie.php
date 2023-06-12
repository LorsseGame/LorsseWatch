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
        $query = $this->PDO->prepare("SELECT COUNT(categorie_ID) AS total FROM categorie");
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }

    // Méthode pour afficher toutes les catégories
    public function affichage()
    {
        $query = $this->PDO->prepare("SELECT categorie_Name FROM categorie");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_COLUMN);
    }

    // Méthode pour récupérer l'ID d'une catégorie en fonction de son nom
    public function recup()
    {
        $query = $this->PDO->prepare("SELECT categorie_ID FROM categorie WHERE categorie_Name = :name");
        $query->bindParam(':name', $this->name, PDO::PARAM_STR);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
