<?php

class Historique extends Database
{
    private $code;
    private $codeAnime;
    private $episode;
    private $codeUtilisateur;

    public function getCodeUtilisateur()
    {
        return $this->codeUtilisateur;
    }
    public function setCodeUtilisateur($codeUtilisateur)
    {
        $this->codeUtilisateur = $codeUtilisateur;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCodeAnime()
    {
        return $this->codeAnime;
    }
    public function setCodeAnime($codeAnime)
    {
        $this->codeAnime = $codeAnime;
    }

    public function getEpisode()
    {
        return $this->episode;
    }
    public function setEpisode($episode)
    {
        $this->episode = $episode;
    }

    public function verificationExistant(){
        $verif = $this->PDO->prepare("SELECT * FROM `historique` WHERE codeUtilisateur = ? AND codeAnime = ? AND `numeroEpisode` = ?");
        $verif->bindValue(1,$this->codeUtilisateur,PDO::PARAM_INT);
        $verif->bindValue(2,$this->codeAnime,PDO::PARAM_INT);
        $verif->bindValue(3,$this->episode,PDO::PARAM_INT);
        $verif->execute();
        return $verif->fetchAll();

    }
}
