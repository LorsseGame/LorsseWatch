<body class="body_anime">

    <nav class="nav_slide_anime">
        <ul id="menu_anime">
            <li id="filtre">
                <h4 class="h4_filtre_anime">Catégorie</h4>
                <ul>
                    <?php
                    foreach ($categorie->affichage() as $key => $value) {

                    ?>
                        <li><a href="index.php?Anime&categorie=<?= $value['categorie_Name'] ?>"><?= $value['categorie_Name'] ?></a></li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </nav>


    <div class="conteneur_div_anime">
        <div class="div_anime">
            <?php
            if (empty($_GET['categorie'])) {

                for ($i = 1; $i <= $Anime->nombre_anime()['nombre_anime']; $i++) {
                    $Anime->setCode($i)  ?>

                    <a class="a_anime" href="index.php?choix&code=<?= $i ?>&saison=1&langue=vostfr">
                        <img class="image_anime_recherche<?= $i ?>" src="<?= $Anime->information_anime()['image_home'] ?>" alt="">
                    </a>

                <?php }  }
                if(isset($_GET['categorie'])){
                    foreach($Anime->affichage_anime_categorie() as $key => $value){?>
                        <a class="a_anime" href="index.php?choix&code=<?= $value['Code_anime'] ?>&saison=1&langue=vostfr">
                        <img class="image_anime_recherche<?= $value['Code_anime'] ?>" src="<?= $value['image_home'] ?>" alt="">
                    </a>
                 <?php   }
                }
                ?>
        </div>
    </div>
</body>