<?php if (isset($_SESSION['id']) && isset($_SESSION['pseudo']) && $_SESSION['email']) { ?>


    <body>
        <div class="conteneurHistorique">
            <?php foreach ($historique->affichage() as $key => $value) { ?>
                <div class="divHistorique">
                    <div><a href="index.php?video&episode=<?= $value['numeroEpisode'] ?>&anime=<?= $value['codeAnime'] ?>&saison=1&langue=vostfr"><img class="imgHistorique" src="<?= $anime->affichageHistorique($value['codeAnime'])['image_home'] ?>" alt=""></a></div>
                    <div class="conteneurInfoHistorique">
                        <div>
                            <h3 class="titreAnimeHistorique"><?= $anime->affichageHistorique($value['codeAnime'])['Titre_anime'] ?></h3>
                        </div>
                        <div>
                            <h4 class="episodeAnimeHistorique">Episode <?= $value['numeroEpisode'] ?></h4>
                        </div>
                    </div>

                </div>
            <?php } ?>
        </div>
    </body>



<?php } else { ?>
    <?php header("Location:index.php?login&watchlist=false") ?>
<?php } ?>