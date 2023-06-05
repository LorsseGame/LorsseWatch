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
        $verif = $this->PDO->prepare("SELECT `codeHistorique` FROM `historique` WHERE codeUtilisateur = ? AND codeAnime = ? ");
        $verif->bindValue(1,$this->codeUtilisateur,PDO::PARAM_INT);
        $verif->bindValue(2,$this->codeAnime,PDO::PARAM_INT);
        $verif->execute();
        return $verif->fetch();
    }

    public function recupEpisode(){
        $rec = $this->PDO->prepare("SELECT `numeroEpisode` FROM `historique` WHERE codeUtilisateur = ? AND codeAnime = ?");
        $rec->bindValue(1,$this->codeUtilisateur,PDO::PARAM_INT);
        $rec->bindValue(2,$this->codeAnime,PDO::PARAM_INT);
        $rec->execute();
        return $rec->fetch();
    }

    public function addHistorique(){
        $add = $this->PDO->prepare("INSERT INTO `historique`( `codeAnime`, `numeroEpisode`, `codeUtilisateur`) VALUES (?,?,?);");
        $add->bindValue(1,$this->codeAnime,PDO::PARAM_INT);
        $add->bindValue(2,$this->episode,PDO::PARAM_INT);
        $add->bindValue(3,$this->codeUtilisateur,PDO::PARAM_INT);
        $add->execute();
    }
    public function updateHistorique(){
        $add = $this->PDO->prepare("UPDATE `historique` SET `numeroEpisode`= ? WHERE `codeUtilisateur` = ? AND `codeAnime` = ?");
        $add->bindValue(1,$this->episode,PDO::PARAM_INT);
        $add->bindValue(2,$this->codeUtilisateur,PDO::PARAM_INT);
        $add->bindValue(3,$this->codeAnime,PDO::PARAM_INT);
        $add->execute();
    }

    public function affichage(){
        $aff = $this->PDO->prepare("SELECT `codeAnime`,`numeroEpisode` FROM `historique` WHERE codeUtilisateur = ?");
        $aff->bindValue(1,$this->codeUtilisateur,PDO::PARAM_INT);
        $aff->execute();
        return $aff->fetchAll();
    }


}
