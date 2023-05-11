<?php
session_start();

include("../Model/DataBase.php");
include("../Model/Const.php");
include('../Model/Watchlist.php');

$watchlist = new Watchlist;

// Effectuer la vérification ici selon vos besoins en ajoutant une validation de sécurité
if (isset($_POST['codeAnime']) && ctype_digit($_POST['codeAnime'])) {
    $codeAnime = $_POST['codeAnime'];
    $Id = $_SESSION['id'];

    $watchlist->setCode_anime($codeAnime);
    $watchlist->setCode_utilisateur($Id);


    // Effectuez ici vos autres vérifications selon vos besoins

    if ($codeAnime == $_GET['code']) {

        $watchlist->add_anime();
        $verificationValide = true; // Ajout de cette ligne pour initialiser la variable

    } else {
        $verificationValide = false;
    }
} else {
    $verificationValide = false;
}

// Préparer la réponse JSON
$response = array('valide' => $verificationValide);

// Envoyer la réponse JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
