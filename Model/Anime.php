<?php


class Anime extends Database
{
    private $code;
    private $titre;
    private $nombre;
    private $image;
    private $saison;
    private $image_home;


    public function getCode()
    {
        $this->code;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getImage_home()
    {
        $this->image_home;
    }
    public function setImage_home($image_home)
    {
        $this->image_home = $image_home;
    }
    public function getSaison()
    {
        $this->saison;
    }
    public function setSaison($saison)
    {
        $this->saison = $saison;
    }

    public function getTitre()
    {
        $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }


    public function getNombre()
    {
        $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getImage()
    {
        $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }


    public function information_anime()
    {
        $image =  $this->PDO->prepare("SELECT image,Titre_anime,image_home FROM `anime` WHERE Code_anime = ?");
        $image->bindValue(1, $this->code, PDO::PARAM_INT);
        $image->execute();
        return $image->fetch();
    }

    public function nombre_anime()
    {
        $image =  $this->PDO->query("SELECT MAX(Code_anime)nombre_anime FROM `anime`;");
        return $image->fetch();
    }

    public function nombre_episode()
    {
        $nombre = $this->PDO->prepare("SELECT Nombre_episode FROM `anime` WHERE Code_anime = ?");
        $nombre->bindValue(1, $this->code, PDO::PARAM_INT);
        $nombre->execute();
        return $nombre->fetch();
    }

    public function nombre_saison()
    {
        $saison = $this->PDO->prepare("SELECT nombre_saison FROM `anime` WHERE Code_anime = ?");
        $saison->bindValue(1, $this->code, PDO::PARAM_INT);
        $saison->execute();
        return $saison->fetch();
    }

    public function add_anime()
    {
        $anime = $this->PDO->prepare("INSERT INTO `anime`(`Titre_anime`, `Nombre_episode`, `image`, `image_home`, `nombre_saison`) VALUES (?,?,?,?,?)");
        $anime->bindValue(1, $this->titre, PDO::PARAM_STR);
        $anime->bindValue(2, $this->nombre, PDO::PARAM_STR);
        $anime->bindValue(3, $this->image, PDO::PARAM_STR);
        $anime->bindValue(4, $this->image_home, PDO::PARAM_STR);
        $anime->bindValue(5, $this->saison, PDO::PARAM_STR);
        $anime->execute();
    }

    public function calcule_anime()
    {
        $calcule = $this->PDO->query("SELECT MAX(Code_anime - 5) Code_anime , MAX(Code_anime) Code_animeMax FROM `anime`");
        return $calcule->fetch();
    }

    public function recherche($recherche)
    {
        $recherche = $this->PDO->query("SELECT Code_anime,Titre_anime,image_home FROM anime WHERE Titre_anime LIKE '" . $recherche . "%'");
        return $recherche->fetchAll(PDO::FETCH_ASSOC);
    }

    public function affichage($code)
    {
        $afficher = $this->PDO->query("SELECT `image_home`,`image_fond`,`image_titre` FROM `anime` WHERE Code_anime = ".$code);
        return $afficher->fetch();
    }
}
