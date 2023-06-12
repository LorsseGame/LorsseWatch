<?php
$role = new Utilisateur; //initialisation de la l'objet Utilisateur
$role->setId($_SESSION['id']);
$role->setEmail($_SESSION['email']);

$anime = new Anime; //initialisation de la l'objet Anime
$epi = new Episode; //initialisation de la l'objet Episode
$slider = new Slider;
$Populaire = new Populaire;
$anime->setCode(0);

if (isset($_POST['send_anime'])) { //verification si l'input avec le name send_anime et cliquer
    $erreur = []; //initialisation d'un tableaux $erreur
    if (isset($_POST['titre']) && !empty($_POST['titre'])) {
        $titre = (string) $_POST['titre'];
    } else {
        $erreur['titre'] = "Erreur titre vide"; // Ajout d'une erreur si le titre est vide
    }
    if (isset($_POST['nombre_episode']) && !empty($_POST['nombre_episode'])) {
        $nombre_episode = (string) $_POST['nombre_episode'];
    } else {
        $erreur['nombre_episode'] = "Erreur nombre_episode vide"; // Ajout d'une erreur si nombre_episode  est vide
    }
    if (isset($_POST['nombre_saison']) && !empty($_POST['nombre_saison'])) {
        $nombre_saison = (string) $_POST['nombre_saison'];
    } else {
        $erreur['nombre_saison'] = "Erreur nombre_saison vide"; // Ajout d'une erreur si nombre_saison  est vide
    }

    if (empty($erreur)) {
        if (isset($_FILES['image_anime']) && $_FILES['image_anime']['error'] == 0) { //verification si une image a bien été ajouter et si il n'y a pas d'erreur 

            $fichier = $titre;
            $fichier = str_replace(' ', '_', $fichier); //fontion permétant de remplacer les espace de $fichier en _

            $url_image = "./image_anime/" . $fichier . "/" . $_FILES['image_anime']['name']; //stockage du chemain de destination de l'image de l'anime
            $img = strrchr($url_image, '.'); //on recupère l'extension de l'image dans la variable 
            $extension = strtolower(substr($img, 1)); // Extrait l'extension de fichier à partir du nom du fichier image et la convertit en minuscules
            $tabextension = ['jpg', 'jpeg', 'gif', 'png']; //ajoue des extension autoriser dans un tableaux
        } else {
            $erreur['image_anime'] = "Aucun fichier selectionner"; // Ajout d'une erreur si aucun fichier n'a été ajouter
        }

        if (empty($erreur['image_anime'])) {
$code = $anime->maxAnime()['maxNombreAnime'];
$code ++ ;

            $anime->setTitre($titre);
            $anime->setNombre($nombre_episode);
            $anime->setImage($url_image);
            $anime->setImage_home($url_image);
            $anime->setSaison($nombre_saison);
            $anime->setCode($code);

            $anime->add_anime();

            echo "Anime ajouter";
        }
    }
}



if (isset($_POST['send_episode'])) {
    $erreur = [];

    if (isset($_POST['episode']) && !empty($_POST['episode'])) {
        $episode = (string) $_POST['episode'];
    } else {
        $erreur['episode'] = "Erreur episode vide";
    }
    if (isset($_POST['saison']) && !empty($_POST['saison'])) {
        $saison = (string) $_POST['saison'];
    } else {
        $erreur['saison'] = "Erreur saison vide";
    }



    if (empty($erreur)) {

        $epi->setEpisode($_POST['episode']);
        $epi->setSaison($_POST['saison']);
        $epi->setCode_anime($_POST['code_anime']);



        if ($epi->verif_episode() === false) {

            for ($i = 1; $i <= $episode; $i++) {

                $anime->setCode($_POST['code_anime']);

                $fichier = $anime->information_anime()['Titre_anime']; //stockage du titre de l'anime
                $fichier = str_replace(' ', '_', $fichier); //changement des espace dans la variable $fichier en _

                $url_image = "image_episode/" . $fichier . "_s" . $_POST['saison'] . "/episode" . $i . ".PNG"; //stockage du chemain de destination de l'image de l'episode selon $i

                $url_video = "Video/" . $fichier . "/saison" . $_POST['saison'] . "/" . $_POST['choix'] . "/episode" . $i . ".mp4"; //stockage du chemain de destination de la video selon $i

                $epi->setEpisode($i);
                $epi->setSaison($saison);
                $epi->setImage($url_image);
                $epi->setCode_anime($_POST['code_anime']);
                $epi->setVideo($url_video);
                $epi->setLangue($_POST['choix']);

                $epi->ajouter_episode();
            }

            $ajoue = "Les episode on bien été ajouter";
        } else {
            if ($epi->verif_episode()["episode"] === $episode) { //verification si les episode existe déjà
                $episodeExiste = "l'episode existe déjà";
            }
            if ($epi->verif_episode()["saison"] === $saison) { //verification si la saison existe déjà
                $saisonExiste = "la saison existe déjà";
            }
            if ($epi->verif_episode()["video"] === $video) { //verification si les video existe déjà
                $videoExiste = "la video existe déjà";
            }
        }
    }
}

if (isset($_POST['send_slider_admin'])) {
    $erreur = [];
    if (isset($_POST['change_slider1']) && !empty($_POST['change_slider1'])) {
        $change_slider1 = (string) $_POST['change_slider1'];
    } else {
        $erreur['change_slider1'] = "Erreur change_slider1 vide";
    }

    if (isset($_POST['change_slider2']) && !empty($_POST['change_slider2'])) {
        $change_slider2 = (string) $_POST['change_slider2'];
    } else {
        $erreur['change_slider2'] = "Erreur change_slider2 vide";
    }

    if (isset($_POST['change_slider3']) && !empty($_POST['change_slider3'])) {
        $change_slider3 = (string) $_POST['change_slider3'];
    } else {
        $erreur['change_slider3'] = "Erreur change_slider3 vide";
    }

    if (empty($erreur)) {
        $slider->changeSlider($change_slider1,1);
        $slider->changeSlider($change_slider2,2);
        $slider->changeSlider($change_slider3,3);
    }
}
if (isset($_POST['send_populaire_admin'])) {
    $erreur = [];
    if (isset($_POST['populaire']) && !empty($_POST['populaire'])) {
        $populaire = (string) $_POST['populaire'];
    } else {
        $erreur['populaire'] = "Erreur populaire vide";
    }

    if (empty($erreur)) {
        $Populaire->changePopulaire($populaire,1);

    }
}
?>