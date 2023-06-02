<?php
$utilisateur = new Utilisateur;
$mess = "";

if (isset($_POST['send'])) {

    $erreur = [];
    //verification si des champ ne sont pas vide 
    if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
        $pseudo = (string) $_POST['pseudo'];
    } else {
        $erreur['pseudo'] = "Erreur pseudo vide";
    }

    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["email"];
        } else {
            $erreur["email"] = "Il faut renseigner un e-mail valide";
        }
    } else {
        $erreur["email"] = "Le champ email est vide";
    }

    if (isset($_POST["password"]) && !empty($_POST["password"])) {
        if (mb_strlen($_POST["password"]) >= 8) {
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        } else {
            $erreur["password"] = "Le champ mot de passe doit avoir au moins 8 caractères";
        }
    } else {
        $erreur["password"] = "Le champ mot de passe est vide";
    }

    if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
    } else {
        $erreur['prenom'] = "Le champ prenom est vide !";
    }

    if (isset($_POST['nom']) && !empty($_POST['nom'])) {
        $nom = $_POST['nom'];
    } else {
        $erreur['nom'] = "Le champ nom est vide !";
    }

    if (empty($erreur)) {
        $utilisateur->setEmail($email);
        $utilisateur->pseudo = $pseudo;

        // verif si l'email et le pseudo n'est pas identique a un utilisateur 
        if ($utilisateur->verif() === false) {
            // verification si un fichier a été donner et si il a bien la bonne extention a la fin du nom du fichier
            if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0) {
                if (empty($mailExiste) && empty($pseudoExiste)) {
                    $url_image = "./uploads/" . $_FILES['fichier']['name'];
                    $img = strrchr($url_image, '.');
                    $extension = strtolower(substr($img, 1));
                    $tabextension = ['jpg', 'jpeg', 'gif', 'png'];

                    if (in_array($extension, $tabextension)) {

                        if (move_uploaded_file($_FILES['fichier']['tmp_name'], "./uploads/" . $_FILES['fichier']['name'])) {
                            chmod("./uploads/" . $_FILES['fichier']['name'], 0600);
                        } else {
                            $mess .= "<li> Erreur de chargement</li>";
                        }
                    } else {
                        $erreur['fichier'] = "L'image doit êtres au format 'jpg','jpeg','gif','png' .";
                    }
                }
            } else {
                $erreur['fichier'] = "Aucun fichier selectionner";
            }
            if (empty($erreur['fichier'])) {
                $utilisateur->setEmail($email);
                $utilisateur->pseudo = $pseudo;
                $utilisateur->setMotdePasse($password);
                $utilisateur->setLienImage($url_image);
                $utilisateur->setPrenom($prenom);
                $utilisateur->setNom($nom);

                $utilisateur->inscription();

                $message = "Le profil a bien été crée";
            }
        } else {
            if ($utilisateur->verif()["AdresseEmail_utilisateur"] === $email) {
                $mailExiste = "Le mail n'est pas disponible";
            }
            if ($utilisateur->verif()["Pseudo_utilisateur"] === $pseudo) {
                $pseudoExiste = "Le pseudo n'est pas disponible";
            }
        }
    }
}
