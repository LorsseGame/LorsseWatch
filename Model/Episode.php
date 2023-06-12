<?php

class Episode extends Database
{

    private $code;
    private $durer;
    private $code_anime;
    private $description;
    private $episode;
    private $saison;
    private $image;
    private $titre;
    private $video;
    private $Langue;


    public function getVideo()
    {
        return $this->video;
    }
    public function setVideo($video)
    {
        $this->video = $video;
    }
    public function getLangue()
    {
        return $this->Langue;
    }
    public function setLangue($Langue)
    {
        $this->Langue = $Langue;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getDurer()
    {
        return $this->durer;
    }
    public function setDurer($durer)
    {
        $this->durer = $durer;
    }
    public function getCode_anime()
    {
        return $this->code_anime;
    }
    public function setCode_anime($code_anime)
    {
        $this->code_anime = $code_anime;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getEpisode()
    {
        return $this->episode;
    }
    public function setEpisode($episode)
    {
        $this->episode = $episode;
    }
    public function getSaison()
    {
        return $this->saison;
    }
    public function setSaison($saison)
    {
        $this->saison = $saison;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }

    // Méthode pour récupérer les informations sur un épisode
    public function information_episode()
    {
        $image = $this->PDO->prepare("SELECT image_episode, saison, titre_episode, episode FROM `episode` WHERE Code_anime = ? AND episode = ? AND saison = ?");
        $image->bindValue(1, $this->code_anime, PDO::PARAM_INT);
        $image->bindValue(2, $this->episode, PDO::PARAM_INT);
        $image->bindValue(3, $this->saison, PDO::PARAM_INT);
        $image->execute();
        return $image->fetch(PDO::FETCH_ASSOC);
    }

    // Méthode pour récupérer le numéro maximal d'épisode d'une saison d'un anime
    public function max_episode()
    {
        $image = $this->PDO->prepare("SELECT MAX(episode) AS episode FROM `episode` WHERE Code_anime = ? AND saison = ?");
        $image->bindValue(1, $this->code_anime, PDO::PARAM_INT);
        $image->bindValue(2, $this->saison, PDO::PARAM_INT);
        $image->execute();
        return $image->fetch(PDO::FETCH_ASSOC);
    }

    // Méthode pour récupérer la vidéo d'un épisode
    public function video()
    {
        $video = $this->PDO->prepare("SELECT video, image_episode FROM `episode` WHERE Code_anime = ? AND episode = ? AND saison = ? AND Langue = ?");
        $video->bindValue(1, $this->code_anime, PDO::PARAM_INT);
        $video->bindValue(2, $this->episode, PDO::PARAM_INT);
        $video->bindValue(3, $this->saison, PDO::PARAM_INT);
        $video->bindValue(4, $this->Langue, PDO::PARAM_STR);
        $video->execute();
        return $video->fetch(PDO::FETCH_ASSOC);
    }

    // Méthode pour vérifier l'existence d'un épisode dans la base de données
    public function verif_episode()
    {
        $episode = $this->PDO->prepare("SELECT episode, saison, Code_anime, video FROM `episode` WHERE episode = ? AND saison = ? AND Code_anime = ? AND video = ?");
        $episode->bindValue(1, $this->episode, PDO::PARAM_INT);
        $episode->bindValue(2, $this->saison, PDO::PARAM_INT);
        $episode->bindValue(3, $this->code_anime, PDO::PARAM_INT);
        $episode->bindValue(4, $this->video, PDO::PARAM_STR);
        $episode->execute();
        return $episode->fetch(PDO::FETCH_ASSOC);
    }

    // Méthode pour ajouter un épisode à la base de données
    public function ajouter_episode()
    {
        $episode = $this->PDO->prepare("INSERT INTO `episode`(`episode`, `saison`, `image_episode`, `video`, `Code_anime`, `Langue`) VALUES (?,?,?,?,?,?)");
        $episode->bindValue(1, $this->episode, PDO::PARAM_INT);
        $episode->bindValue(2, $this->saison, PDO::PARAM_INT);
        $episode->bindValue(3, $this->image, PDO::PARAM_STR);
        $episode->bindValue(4, $this->video, PDO::PARAM_STR);
        $episode->bindValue(5, $this->code_anime, PDO::PARAM_INT);
        $episode->bindValue(6, $this->Langue, PDO::PARAM_STR);
        $episode->execute();
    }
}
