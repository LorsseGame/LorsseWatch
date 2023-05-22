<?php 
$anime = new Anime;
$watchlist = new Watchlist;

$watchlist->setCode_utilisateur($_SESSION['id']);

if(isset($_POST['delete'])){
    $anime_id = $_POST['anime_id'];

    $watchlist->setCode_utilisateur($_SESSION['id']);
    $watchlist->setCode_anime($anime_id);
    $watchlist->delete_anime();
}

