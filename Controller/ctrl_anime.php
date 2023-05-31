<?php
$Anime = new Anime;
$categorie = new Categorie;

if(isset($_GET['categorie'])){
    $categorie->setName($_GET['categorie']);
    $Anime->setCode_categorie($categorie->recup()['categorie_ID']);
}
