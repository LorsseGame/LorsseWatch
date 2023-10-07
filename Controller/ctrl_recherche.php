<?php
$Anime = new Anime;

if (isset($_POST['send_recherche'])) {
    $recherche = $_POST['recherche'];
    $result = $Anime->recherche($recherche);
}
?>

