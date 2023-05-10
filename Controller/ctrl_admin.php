<?php
$role = new Utilisateur;
$role->setId($_SESSION['id']);
$role->setEmail($_SESSION['email']);

$anime = new Anime;
$epi = new Episode;
$role->setId($_SESSION['id']);
$role->setEmail($_SESSION['email']);

$anime->setCode(0);

if (isset($_POST['send_anime'])) {
    $erreur = [];
    if (isset($_POST['titre']) && !empty($_POST['titre'])) {
        $titre = (string) $_POST['titre'];
    } else {
        $erreur['titre'] = "Erreur titre vide";
    }
    if (isset($_POST['nombre_episode']) && !empty($_POST['nombre_episode'])) {
        $nombre_episode = (string) $_POST['nombre_episode'];
    } else {
        $erreur['nombre_episode'] = "Erreur nombre_episode vide";
    }
    if (isset($_POST['nombre_saison']) && !empty($_POST['nombre_saison'])) {
        $nombre_saison = (string) $_POST['nombre_saison'];
    } else {
        $erreur['nombre_saison'] = "Erreur nombre_saison vide";
    }

    if (empty($erreur)) {
        if (isset($_FILES['image_anime']) && $_FILES['image_anime']['error'] == 0) {

            $fichier = $titre;
            $fichier = str_replace(' ', '_', $fichier);

            $url_image = "./image_anime/" . $fichier . "/" . $_FILES['image_anime']['name'];;
            $img = strrchr($url_image, '.');
            $extension = strtolower(substr($img, 1));
            $tabextension = ['jpg', 'jpeg', 'gif', 'png'];
        } else {
            $erreur['image_anime'] = "Aucun fichier selectionner";
        }

        if (empty($erreur['image_anime'])) {


            $anime->setTitre($titre);
            $anime->setNombre($nombre_episode);
            $anime->setImage($url_image);
            $anime->setImage_home($url_image);
            $anime->setSaison($nombre_saison);

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

                $fichier = $anime->information_anime()['Titre_anime'];
                $fichier = str_replace(' ', '_', $fichier);

                $url_image = "image_episode/" . $fichier . "_s" . $_POST['saison'] . "/episode" . $i . ".PNG";

                $url_video = "Video/" . $fichier . "/saison" . $_POST['saison'] . "/" . $_POST['choix'] . "/episode" . $i . ".mp4";

                $epi->setEpisode($i);
                $epi->setSaison($saison);
                $epi->setImage($url_image);
                $epi->setCode_anime($_POST['code_anime']);
                $epi->setVideo($url_video);
                $epi->setLangue($_POST['choix']);

                $epi->ajoue_episode();
            }

            $ajoue = "Les episode on bien été ajouter";
        } else {
            if ($epi->verif_episode()["episode"] === $episode) {
                $episodeExiste = "l'episode existe déjà";
            }
            if ($epi->verif_episode()["saison"] === $saison) {
                $saisonExiste = "la saison existe déjà";
            }
            if ($epi->verif_episode()["video"] === $video) {
                $videoExiste = "la video existe déjà";
            }
        }
    }
}
