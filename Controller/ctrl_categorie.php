<?php
$Anime = new Anime;
$categorie = new Categorie;

if (isset($_GET['type'])) {
    $categorie->setName($_GET['type']);
    $Anime->setCode_categorie($categorie->recup()['categorie_ID']);
}
?>
