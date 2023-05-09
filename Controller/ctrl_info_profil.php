<?php

if(isset($_POST['send_pseudo'])){
$erreur = [];

    if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
        $pseudo = (string) $_POST['pseudo'];
    } else {
        $erreur['pseudo'] = "Erreur pseudo vide";
    }

if(empty($erreur)){
    $utilisateur= new Utilisateur;
    $utilisateur->pseudo = $pseudo;
    $utilisateur->setId($_SESSION['id']);
    $utilisateur->update_pseudo();
    $_SESSION['pseudo'] = $pseudo;
}
}


if(isset($_POST['send_email'])){
$erreur = [];

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = (string) $_POST['email'];
    } else {
        $erreur['email'] = "Erreur email vide";
    }

if(empty($erreur)){
    $utilisateur= new Utilisateur;
    $utilisateur->setEmail($email);
    $utilisateur->setId($_SESSION['id']);
    $utilisateur->update_email();
    $_SESSION['email'] = $email;
}
}


if(isset($_POST['send_password'])){
$erreur = [];

if (isset($_POST["password"]) && !empty($_POST["password"])) {
    if (mb_strlen($_POST["password"]) >= 8) {
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    } else {
        $erreur["password"] = "Le champ mot de passe doit avoir au moins 8 caractères";
    }
} else {
    $erreur["password"] = "Le champ mot de passe est vide";
}

if(empty($erreur)){
    $utilisateur= new Utilisateur;
    $utilisateur->setMotdePasse($password);
    $utilisateur->setId($_SESSION['id']);
    $utilisateur->update_password();
    
}
}



?>