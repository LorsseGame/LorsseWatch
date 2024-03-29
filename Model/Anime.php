<?php

class Anime extends Database
{
    private $code;
    private $titre;
    private $nombre;
    private $image;
    private $saison;
    private $image_home;
    private $code_categorie;

    // Getters et setters pour les propriétés

    public function getCode()
    {
        return $this->code;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getImage_home()
    {
        return $this->image_home;
    }
    public function setImage_home($image_home)
    {
        $this->image_home = $image_home;
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

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getCode_categorie()
    {
        return $this->code_categorie;
    }
    public function setCode_categorie($code_categorie)
    {
        $this->code_categorie = $code_categorie;
    }

    // Méthode pour récupérer les informations d'un anime
    public function information_anime()
    {
        $image = $this->PDO->prepare("SELECT image,Titre_anime,image_home FROM `anime` WHERE Code_anime = ? AND Desactiver = 0");
        $image->bindValue(1, $this->code, PDO::PARAM_INT);
        $image->execute();
        return $image->fetch();
    }

    // Méthode pour récupérer le nombre total d'animes
    public function nombre_anime()
    {
        $query = $this->PDO->prepare("SELECT count(Code_anime) AS nombre_anime FROM `anime`");
        $query->execute();
        return $query->fetch();
    }

    public function maxAnime()
    {
        $query = $this->PDO->prepare("SELECT MAX(Code_anime) AS maxNombreAnime FROM `anime`");
        $query->execute();
        return $query->fetch();
    }



    // Méthode pour récupérer le nombre d'épisodes d'un anime
    public function nombre_episode()
    {
        $nombre = $this->PDO->prepare("SELECT Nombre_episode FROM `anime` WHERE Code_anime = ?");
        $nombre->bindValue(1, $this->code, PDO::PARAM_INT);
        $nombre->execute();
        return $nombre->fetch();
    }

    // Méthode pour récupérer le nombre de saisons d'un anime
    public function nombre_saison()
    {
        $saison = $this->PDO->prepare("SELECT nombre_saison FROM `anime` WHERE Code_anime = ?");
        $saison->bindValue(1, $this->code, PDO::PARAM_INT);
        $saison->execute();
        return $saison->fetch();
    }

    // Méthode pour ajouter un anime
    public function add_anime()
    {
        $anime = $this->PDO->prepare("INSERT INTO `anime`(`Titre_anime`, `Nombre_episode`, `image`, `image_home`, `nombre_saison`,`Code_anime`) VALUES (?,?,?,?,?,?)");
        $anime->bindValue(1, $this->titre, PDO::PARAM_STR);
        $anime->bindValue(2, $this->nombre, PDO::PARAM_STR);
        $anime->bindValue(3, $this->image, PDO::PARAM_STR);
        $anime->bindValue(4, $this->image_home, PDO::PARAM_STR);
        $anime->bindValue(5, $this->saison, PDO::PARAM_STR);
        $anime->bindValue(6, $this->code, PDO::PARAM_INT);
        $anime->execute();
    }

    // Méthode pour calculer des informations sur les animes
    public function calcule_anime()
    {
        $query = $this->PDO->prepare("SELECT MAX(Code_anime - 5) AS Code_anime, COUNT(Code_anime) AS Code_animeMax FROM `anime`");
        $query->execute();
        return $query->fetch();
    }

    // Méthode pour effectuer une recherche d'anime
    public function recherche($recherche)
    {
        $query = $this->PDO->prepare("SELECT Code_anime, Titre_anime, image_home FROM anime WHERE Desactiver = 0 AND Titre_anime LIKE ?");
        $query->bindValue(1, $recherche . '%', PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }


    // Méthode pour afficher les informations d'un anime
    public function affichage($code)
    {
        $afficher = $this->PDO->query("SELECT `image_home`,`image_fond`,`image_titre` FROM `anime` WHERE Code_anime = " . $code);
        return $afficher->fetch();
    }

    // Méthode pour afficher les informations d'un anime dans la liste de suivi (watchlist)
    public function affichage_watchlist($code)
    {
        $afficher = $this->PDO->query("SELECT `image_home`,Titre_anime,Nombre_episode FROM `anime` WHERE Desactiver = 0 AND Code_anime = " . $code);
        return $afficher->fetch();
    }

    // Méthode pour afficher les animes d'une certaine catégorie
    public function affichage_anime_categorie()
    {
        $affichage = $this->PDO->prepare("SELECT Code_anime,`image_home`,Titre_anime,Nombre_episode FROM `anime` WHERE `Code_categorie` = ?");
        $affichage->bindValue(1, $this->code_categorie, PDO::PARAM_STR);
        $affichage->execute();
        return $affichage->fetchAll();
    }

    public function affichageCategorie()
    {
        $query = $this->PDO->prepare("SELECT Code_anime, `image_home` FROM anime WHERE Desactiver = 0");
        $query->execute();
        return $query->fetchAll();
    }


    public function affichageHistorique($code)
    {
        $query = $this->PDO->prepare("SELECT `Titre_anime`, `image_home` FROM `anime` WHERE `Code_anime` = ? AND Desactiver = 0");
        $query->bindValue(1, $code, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
    }


    public function affichageChoixAnime()
    {
        $query = $this->PDO->prepare("SELECT `image`, `Titre_anime`, `image_home` FROM `anime` WHERE Code_anime = ?");
        $query->bindValue(1, $this->code, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
    }


    public function verificationDesactiver()
    {
        $verif = $this->PDO->prepare("SELECT `Desactiver` FROM `anime` WHERE `Code_anime` = ?");
        $verif->bindValue(1, $this->code, PDO::PARAM_INT);
        $verif->execute();
        return $verif->fetch();
    }

    public function desactiverAnime()
    {
        $desactiver = $this->PDO->prepare("UPDATE `anime` SET `Desactiver`= 1 WHERE `Code_anime` = ?");
        $desactiver->bindValue(1, $this->code, PDO::PARAM_INT);
        $desactiver->execute();
    }

    public function deleteAnime()
    {
        $delete = $this->PDO->prepare("DELETE FROM `anime` WHERE `Code_anime` = ?");
        $delete->bindValue(1, $this->code, PDO::PARAM_INT);
        $delete->execute();
    }

    public function reactivationAnime()
    {
        $reactivation = $this->PDO->prepare("UPDATE `anime` SET `Desactiver` = 0 WHERE `Code_anime` = ?");
        $reactivation->bindValue(1, $this->code, PDO::PARAM_INT);
        $reactivation->execute();
    }
}
