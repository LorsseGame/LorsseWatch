<?php
$Watchlist = new Watchlist;
$Watchlist->setCode_anime($_GET['code']);

$choix_episode = new Anime;
$choix_episode->setCode($_GET['code']);

$episode = new Episode;
$episode->setCode_anime($_GET['code']);
$episode->setSaison($_GET['saison']);
$episode->setEpisode(1);

$anime = new Anime;
$anime->setCode($_GET['code']);

$utilisateur = new Utilisateur;
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    $Watchlist->setCode_utilisateur($_SESSION['id']);


    $utilisateur->setId($_SESSION['id']);
    $utilisateur->setEmail($_SESSION['email']);
}

if ($_GET['code'] <= 0) {
?>
    <script>
        window.location.href = "index.php?home";
    </script>

<?php
    exit;
} else if ($_GET['code'] >  $choix_episode->nombre_anime()['nombre_anime']) {
?>
    <script>
        window.location.href = "index.php?home";
    </script>

<?php
    exit;
}
if ($_GET['saison'] <= 0) {
    header("Location:index.php?choix&code=" . $_GET['code'] . "&saison=1&langue=" . $_GET['langue']);
} else if ($_GET['saison'] > $choix_episode->nombre_saison()['nombre_saison']) {
    header("Location:index.php?choix&code=" . $_GET['code'] . "&saison=1&langue=" . $_GET['langue']);
}


if (empty($_GET['code'])) {
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
if (isset($_SESSION['id'])) {
    if (isset($_POST['add_anime_watchlist'])) {
        if (empty($Watchlist->verifDoublon())) {
                $Watchlist->add_anime();     
        }
    }
}


if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    if (isset($_POST['desactiverAnime'])) {
        echo "puss";
        $anime->desactiverAnime();
    }
}

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    if (isset($_POST['deleteAnime'])) {
        $anime->deleteAnime();
        header("Location:index.php?home");
        exit();
    }
}

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    if (isset($_POST['reactiverAnime'])) {
        $anime->reactivationAnime();
    }
}



?>