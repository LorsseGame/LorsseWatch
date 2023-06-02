<body class="body_anime">
    <?php if (!isset($_GET['all'])) { ?>
        <?php if (empty($_GET['type'])) { ?>
            <div class="conteneurCategorieEmpty">
                <div class="divCategorie"> <a href="index.php?Categorie&all"><button class="btnCategorie">Tous voir</button></a> </div>
                <?php foreach ($categorie->affichage() as $key => $value) { ?>
                    <div class="divCategorie">
                        <a href="index.php?Categorie&type=<?= $value['categorie_Name'] ?>"><button class="btnCategorie"><?= $value['categorie_Name'] ?></button></a>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (isset($_GET['type']) || isset($_GET['all'])) { ?>
        <div class="conteneurCategorie">
            <?php foreach ($Anime->affichage_anime_categorie() as $key => $value) { ?>
                <a class="a_anime" href="index.php?choix&code=<?= $value['Code_anime'] ?>&saison=1&langue=vostfr">
                    <img class="image_anime_recherche<?= $value['Code_anime'] ?>" src="<?= $value['image_home'] ?>" alt="">
                </a>
            <?php } ?>
        </div>
    <?php } ?>

    <?php if (isset($_GET['all'])) { ?>
        <?php foreach($Anime->affichageCategorie() as $key => $value) { ?>
            <a class="a_anime" href="index.php?choix&code=<?= $value['Code_anime'] ?>&saison=1&langue=vostfr">
                <img class="image_anime_recherche<?= $value['Code_anime'] ?>" src="<?= $value['image_home'] ?>" alt="">
            </a>
        <?php } ?>
    <?php } ?>
</body>
