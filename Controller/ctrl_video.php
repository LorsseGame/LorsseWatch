<?php
$video = new Episode;
$anime = new Anime;
$historique = new Historique;

$video->setCode_anime($_GET['anime']);
$video->setEpisode($_GET['episode']);
$video->setSaison($_GET['saison']);
$video->setLangue($_GET['langue']);

$anime->setCode($_GET['anime']);

$plus = $_GET['episode'];
$plus++;
$moins = $_GET['episode'];
$moins--;



if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['pseudo']) && isset($_SESSION['lien_image']) && isset($_SESSION['Role'])) {
    // Vérifie si les clés 'id', 'email', 'pseudo', 'lien_image' et 'Role' existent dans la session

    $historique->setCodeUtilisateur($_SESSION['id']);
    $historique->setCodeAnime($_GET['anime']);
    $historique->setEpisode($_GET['episode']);

    if (empty($historique->verificationExistant())) {
        // Vérifie si l'historique est vide en utilisant la méthode 'verificationExistant()'
        // Si l'historique est vide, ajoute un nouvel historique en utilisant la méthode 'addHistorique()'
        $historique->addHistorique();
    } else if (is_numeric($historique->verificationExistant()['codeHistorique'])) {
        // Vérifie si l'historique existant a un 'codeHistorique' numérique en utilisant la méthode 'verificationExistant()'
        // Si c'est le cas, compare le numéro de l'épisode de l'historique avec celui passé en paramètre ($_GET['episode'])
        if ($historique->recupEpisode()['numeroEpisode'] != $_GET['episode']) {
            // Si les numéros d'épisode ne correspondent pas, met à jour l'historique en utilisant la méthode 'updateHistorique()'
            $historique->updateHistorique();
        }
    }
}



if ($_GET['episode'] <= 0) {
?>
    <script>
        window.location.href = "index.php?video&episode=1&anime=" + <?= $_GET['anime'] ?> + "&saison=" + <?= $_GET['saison'] ?> + "langue=" + <?= $_GET['langue'] ?>;
    </script>

<?php

} else if ($_GET['episode'] >= $anime->nombre_episode()['Nombre_episode']) {
?>
    <script>
        window.location.href = "index.php?video&episode=1&anime=" + <?= $_GET['anime'] ?> + "&saison=" + <?= $_GET['saison'] ?> + "langue=" + <?= $_GET['langue'] ?>;
    </script>
<?php
}

if ($_GET['anime'] <= 0) {

?>
    <script>
        window.location.href = "index.php?home";
    </script>

<?php
    exit;
} else if ($_GET['anime'] >  $anime->nombre_anime()['nombre_anime']) {

?>
    <script>
        window.location.href = "index.php?home";
    </script>

<?php
    exit;
}

if ($_GET['saison'] <= 0) {

?>
    <script>
        window.location.href = "index.php?video&episode=<?= $_GET['episode'] ?>&anime=<?= $_GET['anime'] ?>&saison=1" + "langue=" + <?= $_GET['langue'] ?>;
    </script>

<?php
} else if ($_GET['saison'] > $anime->nombre_saison()['nombre_saison']) {
?>
    <script>
        window.location.href = "index.php?video&episode=<?= $_GET['episode'] ?>&anime=<?= $_GET['anime'] ?>&saison=1" + "langue=" + <?= $_GET['langue'] ?>;
    </script>
<?php
}


if (empty($_GET['episode'])) {

?>
    <script>
        window.location.href = "index.php?home";
    </script>

<?php
    exit;
}

if (empty($_GET['anime'])) {

?>
    <script>
        window.location.href = "index.php?home";
    </script>

<?php
    exit;
}

if (empty($_GET['saison'])) {

?>
    <script>
        window.location.href = "index.php?home";
    </script>

<?php
    exit;
}
