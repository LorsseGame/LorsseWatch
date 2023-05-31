<body class="body_anime">

    <nav class="nav_slide_anime">
        <ul id="menu_anime">
            <li id="filtre"><h4 class="h4_filtre_anime">Filtre</h4>
                <ul>
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

    <div class="conteneur_div_anime">
        <div class="div_anime">
            <?php
            if (empty($_POST['recherche'])) {

                for ($i = 1; $i <= $Anime->nombre_anime()['nombre_anime']; $i++) {
                    $Anime->setCode($i)  ?>

                    <a class="a_anime" href="index.php?choix&code=<?= $i ?>&saison=1&langue=vostfr">
                        <img class="image_anime_recherche<?= $i ?>" src="<?= $Anime->information_anime()['image_home'] ?>" alt="">
                    </a>

                <?php }
            }
            if (isset($_POST['recherche'])) {

                foreach ($recherche as $key => $value) {  ?>

                    <a class="a_recherche" href="index.php?choix&code=<?= $value['Code_anime'] ?>&saison=1&langue=vostfr">
                        <img class="image_anime_recherche" src="<?= $value['image_home'] ?>" alt="">
                    </a>

            <?php }
            } ?>
        </div>
    </div>
</body>