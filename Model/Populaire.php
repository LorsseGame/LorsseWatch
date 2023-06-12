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

    public function changePopulaire($codeAnime, $codePopulaire) {
        $changer = $this->PDO->prepare("UPDATE `populaire` SET `codeAnime` = ? WHERE `codePopulaire` = ?");
        $changer->bindValue(1, $codeAnime, PDO::PARAM_INT);
        $changer->bindValue(2, $codePopulaire, PDO::PARAM_INT);
        $changer->execute();
    }
   

    public function affichagePopulaire($codePopulaire){
        $affichage = $this->PDO->prepare("SELECT `codeAnime` FROM `populaire` WHERE `codePopulaire` = ?");
        $affichage->bindValue(1, $codePopulaire, PDO::PARAM_INT);
        $affichage->execute();
        return $affichage->fetch(PDO::FETCH_ASSOC);
    }
}
