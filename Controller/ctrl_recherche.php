<?php
$Anime = new Anime;


if(isset($_POST['send_recherche'])){
 $recherche = $Anime->recherche($_POST['recherche']);
}

?>
