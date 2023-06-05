<body class="body_choix">

    <div class="div_fond_image_anime">
        <img src="<?php echo $choix_episode->information_anime()['image']; ?>" class="image_anime_choix" alt=""> <!-- affichage de l'image de l'anime -->
    </div>

    <div class="information_anime">


        <form action="" method="post"> <!-- formulaire d'ajoue d'anime a la watchlist -->
            <input type="submit" class="add_anime_watchlist" value="Ajouter à la watchlist" name="add_anime_watchlist" id="">
        </form>

        <select class="select_saison_choix" name="saison" onchange="location.href=''+this.options[this.selectedIndex].value;" id=""> <!-- select affichant le nombre de saison -->
            <option style="display:none" value="">Choix Saison</option>
            <?php for ($e = 1; $e <= $choix_episode->nombre_saison()['nombre_saison']; $e++) { ?>
                <option value="index.php?choix&code=<?= $_GET['code'] ?>&saison=<?= $e ?>&langue=<?= $_GET['langue'] ?>">Saison <?= $e ?></option>
            <?php }  ?>
        </select>
        <h1 class="h1_choix_titre"><?= $choix_episode->information_anime()['Titre_anime']; ?></h1>
        <select onchange="location.href=''+this.options[this.selectedIndex].value;" class="select_langue_choix" name="choix_langue" id=""> <!-- select affichant les langue -->
        <option style="display: none;" value="">Choix langue</option>
            <option value="index.php?choix&code=<?= $_GET['code'] ?>&saison=<?= $_GET['saison'] ?>&langue=vostfr">VOSTFR</option>
            <option value="index.php?choix&code=<?= $_GET['code'] ?>&saison=<?= $_GET['saison'] ?>&langue=vf">VF</option>
        </select>

    </div>

    <div class="div_fond_episode">
        <?php for ($i = 1; $i <= $episode->max_episode()['episode']; $i++) { //bouclage jusqu'a que le maximum d'episode soit atteint
            $episode->setEpisode($i); ?>
            <div class="conteneur_choix_episode">
                <div class="div_image_choix_episode">
                    <a href="index.php?video&episode=<?= $i ?>&anime=<?= $_GET['code'] ?>&saison=<?= $_GET['saison'] ?>&langue=<?= $_GET['langue'] ?>">
                        <div class="div_choix_episode" style="background-image: url(<?php echo $episode->information_episode()['image_episode']; ?>);background-color: pink;">
                            <div>
                                <img class="image_choix_play" src="image/play.svg" alt="">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="div_episode_choix_episode">
                    <h3 class="h3_numero_episode_choix">Épisode <?= $i ?></h3>
                </div>
            </div>
        <?php } ?>
    </div>

</body>