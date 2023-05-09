<?php
$utilisateur = new Utilisateur;

?>

<?php
if (isset($_POST['Valider'])) {
    $erreur = [];
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = (string) $_POST['email'];
            $utilisateur->setEmail($email);
        } else {
            $erreur["email"] = "Il faut renseigner un e-mail valide";
        }
    } else {
        $erreur['email'] = "Le champ email et vide";
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        if (mb_strlen($_POST["password"]) >= 8) {
            $password = $_POST['password'];
        } else {
            $erreur["password"] = "Mauvais mot de passe ";
        }
    } else {
        $erreur['password'] = "Champs mot de passe vide";
    }
}
?>



<?php
if (isset($_POST['activer'])) {
    $utilisateur->setEmail($_SESSION['email']);
    $utilisateur->activer();
    session_destroy();
}


if (isset($_POST['Valider'])) {

    if (empty($erreur)) {
        if ($utilisateur->verif2() === false) {
            $profilInexistant = "Le profil n'existe pas";
        } else {
            if (password_verify($password, $utilisateur->verif2()['MotdePasse_utilisateur'])) {
                if ($utilisateur->verif_desactiver()['desactiver'] == 1) {
                    $erreur['desactiver'] = "Votre compte est désactiver pour le réactiver clicker sur le bouton 'Activer' ";
                    $_SESSION["email"] = $email;
                } else {
                    $_SESSION["id"] = $utilisateur->verif2()["Code_utilisateur"];
                    $_SESSION["email"] = $utilisateur->verif2()["AdresseEmail_utilisateur"];
                    $_SESSION["pseudo"] = $utilisateur->verif2()["Pseudo_utilisateur"];
                    $_SESSION["lien_image"] = $utilisateur->verif2()["lien_image"];
                    $_SESSION["Desactiver"] = $utilisateur->verif2()["desactiver"];
                    $_SESSION["Role"] = $utilisateur->verif2()["Code_role"];


                    if (isset($_GET['watchlist'])) {
                        header("Location:index.php?WatchList");
                    } else {

?>
<script>
    window.location.href = "index.php?home";
</script>

<?php
                    }

                    
                }
            } else {
                $mauvaisMdp = "Le mot de passe n'est pas bon";
            }
        }
    }
}
?>

