<?php
$utilisateur = new Utilisateur;

if (isset($_POST['send_pseudo'])) {
    $erreur = [];

    if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
        $pseudo = (string) $_POST['pseudo'];
    } else {
        $erreur['pseudo'] = "Erreur pseudo vide";
    }

    if (empty($erreur)) {
        $utilisateur->setPseudo($pseudo);
        $utilisateur->setId($_SESSION['id']);
        $utilisateur->update_pseudo();
        $_SESSION['pseudo'] = $pseudo;
    }
}


if (isset($_POST['send_email'])) {
    $erreur = [];

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = (string) $_POST['email'];
    } else {
        $erreur['email'] = "Erreur email vide";
    }

    if (empty($erreur)) {
        $utilisateur->setEmail($email);
        $utilisateur->setId($_SESSION['id']);
        $utilisateur->update_email();
        $_SESSION['email'] = $email;
    }
}


if (isset($_POST['send_password'])) {
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

    if (empty($erreur)) {
        $utilisateur->setMotDePasse($password);
        $utilisateur->setId($_SESSION['id']);
        $utilisateur->update_password();
    }
}

if (isset($_POST['sendImage'])) {
    $utilisateur = new Utilisateur;
    $fichier = $_SESSION['lien_image'];
    if (file_exists($fichier)) {
        // Supprimez le fichier 
        

        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {

            $url_image = "./uploads/" . $_FILES['file']['name'];
            $img = strrchr($url_image, '.');
            $extension = strtolower(substr($img, 1));
            $tabextension = ['jpg', 'jpeg', 'gif', 'png'];

            if (in_array($extension, $tabextension)) {

                if (move_uploaded_file($_FILES['file']['tmp_name'], "./uploads/" . $_FILES['file']['name'])) {
                    chmod("./uploads/" . $_FILES['file']['name'], 0600);
                } else {
                    $mess = "<li> Erreur de chargement</li>";
                }
            } else {
                $erreur['fichier'] = "L'image doit êtres au format 'jpg','jpeg','gif','png' .";
            }
        } else {
            $erreur['fichier'] = "Aucun fichier selectionner";
        }

        if (empty($erreur['fichier'])) {
            $utilisateur->setLienImage($url_image);
            $utilisateur->setId($_SESSION['id']);
            $utilisateur->updateImage();
            $_SESSION['lien_image'] = $url_image;
            $timestamp = time();
            $url = "index.php?info_profil&timestamp=$timestamp";
            unlink($fichier);
            header("Location: $url");
        }
    }
}
