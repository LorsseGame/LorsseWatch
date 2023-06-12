<?php
$utilisateur = new Utilisateur;

if (isset($_POST['delete'])) {
    if ($_SESSION['Role'] == 1) {
        $utilisateur->setId($_POST['delete']);
        $utilisateur->deleteUtilisateur();
    }
}
if (isset($_POST['desactiverUtilisateur'])) {
    if ($_SESSION['Role'] == 1) {
        $utilisateur->setId($_POST['desactiverUtilisateur']);
        $utilisateur->desactiverUtilisateur();
    }
}
if (isset($_POST['reactiver'])) {
    if ($_SESSION['Role'] == 1) {
        $utilisateur->setId($_POST['reactiver']);
        $utilisateur->reactiverUtilisateur();
    }
}
