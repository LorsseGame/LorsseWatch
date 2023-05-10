<?php
$utilisateur = new Utilisateur;
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    $utilisateur->setId($_SESSION['id']);
    $utilisateur->setEmail($_SESSION['email']);
}

if (isset($_POST['deconnexion'])) {
    unset($_SESSION['id']);
    unset($_SESSION['email']);
    unset($_SESSION['pseudo']);
    unset($_SESSION['lien_image']);
    unset($_SESSION['Desactiver']);
    unset($_SESSION['Role']);
    header('Location:index.php?home');
}
