<?php
session_start();

include("./Model/DataBase.php");
include("./Model/Const.php");
include('./Model/Watchlist.php');

$watchlist = new Watchlist;

echo $_POST['codeAnime'];

if (!empty($_POST['codeAnime']) && ctype_digit($_POST['codeAnime'])) {
    $codeAnime = $_POST['codeAnime'];
    $Id = $_SESSION['id'];

    $watchlist->setCode_anime($codeAnime);
    $watchlist->setCode_utilisateur($Id);

    // Effectuez ici vos autres vérifications selon vos besoins
    // Si une vérification échoue, vous devez définir $response['valide'] comme false
    // et ajouter un message d'erreur approprié dans $response['message']

    // Exemple de vérification : Vérifier si l'utilisateur est connecté
    if (!isset($_SESSION['id'])) {
        $response = array(
            'valide' => false,
            'message' => 'Vous devez être connecté pour effectuer cette action.'
        );
    } else {
        $watchlist->add_anime();
        $response = array('valide' => true);
    }
} else {
    $response = array(
        'valide' => false,
        'message' => 'Le code Anime n\'est pas valide.'
    );
}

// Envoyer la réponse JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
