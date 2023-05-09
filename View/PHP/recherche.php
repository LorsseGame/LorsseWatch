<body class="body_recherche">
    <div class="conteneur_recherche">
        <form action="" method="post">

            <div class="div_recherche">
                <input type="text" placeholder="Rechercher un anime" name="recherche" id="search-input">
                <input type="submit" name="send_recherche" id="send_recherche">
            </div>

        </form>

        <!-- Affichage des résultats de la recherche -->
        <div id="search-results"></div>
        <div class="div_filtre">

        </div>

        <div class="div_recherche_anime">
            <?php
            if (empty($_POST['recherche'])) {

                for ($i = 1; $i <= $Anime->nombre_anime()['nombre_anime']; $i++) {
                    $Anime->setCode($i)  ?>

                    <a class="a_recherche" href="index.php?choix&code=<?= $i ?>&saison=1&langue=vostfr">
                        <img class="image_anime_recherche<?= $i ?>" src="<?php echo $Anime->information_anime()['image_home'] ?>" alt="">
                    </a>

                <?php }
            }
            if (isset($_POST['recherche'])) {

                foreach ($recherche as $key => $value) {  ?>

                    <a class="a_recherche" href="index.php?choix&code=<?= $value['Code_anime'] ?>&saison=1&langue=vostfr">
                        <img class="image_anime_recherche" src="<?= $value['image_home'] ?>" alt="">
                    </a>

            <?php }
            }?>
        </div>

       <?php if (isset($_POST['send_recherche'])) {
            if (empty($recherche)) {?>
                <h3 class="h3_erreur_recherche">Aucun résultat</h3>
          <?php } }?>
    </div>
</body>