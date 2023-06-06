<?php
session_start();
include("./Model/DataBase.php");
include("./Model/Const.php");
include("./Model/Utilisateur.php");
include("./Model/Anime.php");
include("./Model/Episode.php");
include("./Model/Watchlist.php");
include("./Model/Categorie.php");
include("./Model/Slider.php");
include("./Model/Populaire.php");
include("./Model/Historique.php");
include("./Controller/ctrl.index.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="View/CSS/style.css">
    <title>LorsseWatch</title>
    <link rel="icon" href="image/LorsseWatch.jpeg" type="image/x-icon">
</head>

<header>
    <nav class="navbare">
        <!-- barre de navigation -->
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>

            <ul class="menu__box">
                <li><a class="menu__item" href="index.php?Categorie">Catégorie</a></li>
                <li><a class="menu__item" href="index.php?WatchList">WatchList</a></li>
                <li><a class="menu__item" href="index.php?Historique">Historique</a></li>
            </ul>
        </div>


        <a class="Nom-Site" href="./index.php?home">
            LorsseWatch
        </a>

        <a class="a_recherche_navbar" href="index.php?recherche">
            <img src="./image/recherche.png" alt="">
        </a>

        <?php
        if (isset($_SESSION['email']) && $_SESSION['id']) { ?>

<nav class="nav_slide">
    <ul id="menu">
        <li>
        <img id="profil-image" class="image_navbar_profil" src="<?= $_SESSION['lien_image'] ?>?t=<?= time() ?>"  alt="">
            <ul id="slider">
                <li><a href="index.php?info_profil">Mes Info</a></li>
                <?php if ($utilisateur->verif_role()["Code_role"] == 1) { ?>
                    <li><a href="index.php?admin">Admin</a></li>
                <?php } ?>
                <form method="post" action="">
                    <li><input type="submit" value="Déconnexion" name="deconnexion" id=""></li>
                </form>
            </ul>
        </li>
    </ul>
</nav>

<script>
    var profilImage = document.getElementById("profil-image");
    var slider = document.getElementById("slider");

    profilImage.addEventListener("click", function() {
        var isSliderVisible = slider.style.height !== "0px";

        if (isSliderVisible) {
            slider.style.height = "0px";
        } else {
            slider.style.height = "120px";
        }
    });

    document.addEventListener("click", function(event) {
        if (!slider.contains(event.target) && event.target !== profilImage) {
            slider.style.height = "0px";
        }
    });
</script>



        <?php } else { ?>

            <!-- bouton de connexion -->
            <div class="balise-login">
                <a href="index.php?register"> <button class="register">Register</button></a>

                <a href="index.php?login"> <button id="login" class="login">Login</button></a>
            </div>
        <?php } ?>
    </nav>
</header>

<?php
if (isset($_GET['home'])) {
    include("./Controller/ctrl_home.php");
    include("./View/PHP/Home.php");
} elseif (isset($_GET['register'])) {
    include("./Controller/ctrl_inscription.php");
    include("./View/PHP/inscriptions.php");
} elseif (isset($_GET['login'])) {
    include("./Controller/ctrl_connexion.php");
    include("./View/PHP/connexion.php");
} elseif (isset($_GET['info_profil'])) {
    include("./Controller/ctrl_info_profil.php");
    include("./View/PHP/info_profil.php");
} elseif (isset($_GET['WatchList'])) {
    include("./Controller/ctrl_watchlist.php");
    include("./View/PHP/watchlist.php");
} elseif (isset($_GET['video'])) {
    include("./Controller/ctrl_video.php");
    include("./View/PHP/video.php");
} elseif (isset($_GET['choix'])) {
    include("./Controller/ctrl_choix_episode.php");
    include("./View/PHP/choix_episode.php");
} elseif (isset($_GET['admin'])) {
    include("./Controller/ctrl_admin.php");
    include("./View/PHP/admin.php");
} elseif (isset($_GET['recherche'])) {
    include("./Controller/ctrl_recherche.php");
    include("./View/PHP/recherche.php");
} elseif (isset($_GET['Categorie'])) {
    include("./Controller/ctrl_categorie.php");
    include("./View/PHP/categorie.php");
} elseif (isset($_GET['Historique'])) {
    include("./Controller/ctrl_historique.php");
    include("./View/PHP/historique.php");
} else {
?>
    <script>
        window.location.href = "index.php?home";
    </script>

<?php
}
?>

<footer class="footer_index">

    <div class="div_reseaux">
        <a target="_blank" href="https://www.instagram.com/lorssegame/">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram " viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg>
        </a>
        <a target="_blank" href="https://discord.gg/4G7TX7wfPR">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z" />
            </svg>
        </a>
        <a target="_blank" href="https://twitter.com/LorsseGame">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
            </svg>
        </a>

        <a target="_blank" href="https://github.com/LorsseGame"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
            </svg></a>
    </div>

    <div class="div-footer">
        <a href="mailto:lorssegame@gmail.com" class="contact">Contact</a>
        <a class="mention_legal" href="">Mentions Légales</a>
        <a class="politique_confidentialité" href="">Politique de confidentialité</a>
    </div>
</footer>


<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="View/JavaScript/script.js"></script>

</html>