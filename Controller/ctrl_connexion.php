<?php
$utilisateur = new Utilisateur;

?>

<?php
if (isset($_POST['Valider'])) {
    $erreur = [];
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { //verification si le format de l'email est bon
            $email = (string) $_POST['email'];
            $utilisateur->setEmail($email);
        } else {
            $erreur["email"] = "Il faut renseigner un e-mail valide";
        }
    } else {
        $erreur['email'] = "Le champ email et vide";
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        if (mb_strlen($_POST["password"]) >= 8) { //verification si l'utilisateur a rentrée plus de 8 caractère dans le champs 
            $password = $_POST['password'];
        } else {
            $erreur["password"] = "Veiller renseigner un mot de passe a plus de 8 caractère ";
        }
    } else {
        $erreur['password'] = "Champs mot de passe vide";
    }
}

if (isset($_POST['Valider'])) {

    if (empty($erreur)) {
        if ($utilisateur->verif2() === false) { // verification de l'existance du compte 
            $profilInexistant = "Le profil n'existe pas";
        } else {
            if (password_verify($password, $utilisateur->verif2()['MotdePasse_utilisateur'])) { //verification du mot passe entrer
                if ($utilisateur->verifDesactiver()['desactiver'] == 1) {
                    $erreur['desactiver'] = "Votre compte est désactiver pour le réactiver clicker sur le bouton 'Activer' ";
                    $_SESSION["email"] = $email;
                } else {
                    //connection de l'utilisateur
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