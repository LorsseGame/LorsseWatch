<?php

class Categorie extends Database
{
    private $code;
    private $name;

    public function getCode()
    {
        $this->code;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getName()
    {
        $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function nombre_categorie()
    {
        $nombre = $this->PDO->query("SELECT COUNT(`categorie_ID`)code FROM `categorie`;");
        return $nombre->fetch();
    }


    public function affichage()
    {
        $affichage =  $this->PDO->query("SELECT `categorie_Name` FROM `categorie`;");
        return $affichage->fetchAll();
    }
    public function recup()
    {
        $rec= $this->PDO->prepare("SELECT `categorie_ID` FROM `categorie` WHERE `categorie_Name` = ?");
        $rec->bindValue(1,$this->name,PDO::PARAM_STR);
        $rec->execute();
        return $rec->fetch();
    }
}
