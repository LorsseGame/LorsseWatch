<?php
$utilisateur = new Utilisateur;

if (isset($_POST['delete'])) {
    if ($_SESSION['Role'] == 1) {
        $utilisateur->setId($_POST['delete']);
        $utilisateur->deleteUtilisateur();
    }
}
