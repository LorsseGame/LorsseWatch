<?php
$Watchlist = new Watchlist;

$choix_episode = new Anime;
$choix_episode->setCode($_GET['code']);

$episode = new Episode;
$episode->setCode_anime($_GET['code']);
$episode->setSaison($_GET['saison']);
$episode->setEpisode(1);


if ($_GET['code'] <= 0) {
?>
    <script>
        window.location.href = "index.php?home";
    </script>

<?php
} else if ($_GET['code'] >  $choix_episode->nombre_anime()['nombre_anime']) {
?>
    <script>
        window.location.href = "index.php?home";
    </script>

<?php
}
if ($_GET['saison'] <= 0) {
    header("Location:index.php?choix&code=" . $_GET['code'] . "&saison=1");
} else if ($_GET['saison'] > $choix_episode->nombre_saison()['nombre_saison']) {
    header("Location:index.php?choix&code=" . $_GET['code'] . "&saison=1");
}


if (empty($_GET['code'])) {
?>
    <script>
        window.location.href = "index.php?home";
    </script>

<?php
}
if (empty($_GET['saison'])) {
?>
    <script>
        window.location.href = "index.php?home";
    </script>

<?php
}

if (isset($_POST['add_anime_watchlist'])) {
    if (isset($_SESSION['id'])) {
        $Watchlist->setCode_anime($_GET['code']);
        $Watchlist->setCode_utilisateur($_SESSION['id']);
        $Watchlist->add_anime();
    }
}
?>