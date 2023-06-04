<?php
class Populaire extends Database {
    private $code;
    private $nomPopulaire;
    private $codeAnime;

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getNomPopulaire()
    {
        return $this->nomPopulaire;
    }

    public function setNomPopulaire($nomPopulaire)
    {
        $this->nomPopulaire = $nomPopulaire;
    }
    public function getCodeAnime()
    {
        return $this->codeAnime;
    }

    public function setCodeAnime($codeAnime)
    {
        $this->codeAnime = $codeAnime;
    }

    public function changePopulaire($codeAnime,$codePopulaire) {
        $changer = $this->PDO->query("UPDATE `populaire` SET `codeAnime`= $codeAnime WHERE `codePopulaire` = $codePopulaire ");
    }
   

    public function affichagePopulaire($codePopulaire){
        $affichage = $this->PDO->query("SELECT `codeAnime` FROM `populaire` WHERE `codePopulaire` =  $codePopulaire ;");
        return $affichage->fetch();
    }
}