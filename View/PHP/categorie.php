<body class="body_anime">
    <?php if (!isset($_GET['all'])) { ?>
        <?php if (empty($_GET['type'])) { ?>
            <!-- Section pour afficher les catégories -->
            <div class="conteneurCategorieEmpty">
                <div class="divCategorie">
                    <a href="index.php?Categorie&all">
                        <button class="btnCategorie">Tous voir</button>
                    </a>
                </div>
                <?php foreach ($categorie->affichage() as $value) { ?>
                    <div class="divCategorie">
                        <a href="index.php?Categorie&type=<?= urlencode($value) ?>">
                            <button class="btnCategorie"><?= htmlspecialchars($value) ?></button>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (isset($_GET['type']) || isset($_GET['all'])) { ?>
        <!-- Section pour afficher les animes de la catégorie sélectionnée -->
        <div class="conteneurCategorie">
            <?php foreach ($Anime->affichage_anime_categorie($categorie->getCode()) as $value) { ?>
                <a class="a_anime" href="index.php?choix&code=<?= htmlspecialchars($value['Code_anime']) ?>&saison=1&langue=vostfr">
                    <img class="image_anime_recherche<?= htmlspecialchars($value['Code_anime']) ?>" src="<?= htmlspecialchars($value['image_home']) ?>" alt="">
                </a>
            <?php } ?>
        </div>
    <?php } ?>

    <?php if (isset($_GET['all'])) { ?>
        <!-- Section pour afficher tous les animes -->
        <?php foreach ($Anime->affichageCategorie() as $value) {
            if (!empty($value['image_home'])) { ?>
                <a class="a_anime" href="index.php?choix&code=<?= htmlspecialchars($value['Code_anime']) ?>&saison=1&langue=vostfr">
                    <img class="image_anime_recherche<?= htmlspecialchars($value['Code_anime']) ?>" src="<?= htmlspecialchars($value['image_home']) ?>" alt="">
                </a>
            <?php }
        } ?>
    <?php } ?>
</body>

