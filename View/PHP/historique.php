<?php if (isset($_SESSION['id']) && isset($_SESSION['pseudo']) && isset($_SESSION['email'])) { ?>

<body>
    <div class="conteneurHistorique">
        <?php foreach ($historique->affichage() as $key => $value) {
            if (!empty($anime->affichageHistorique($value['codeAnime'])['image_home'])) {
        ?>
                <div class="divHistorique">
                    <div>
                        <a href="index.php?video&episode=<?= $value['numeroEpisode'] ?>&anime=<?= $value['codeAnime'] ?>&saison=1&langue=vostfr"><img class="imgHistorique" src="<?= htmlspecialchars($anime->affichageHistorique($value['codeAnime'])['image_home'], ENT_QUOTES, 'UTF-8') ?>" alt=""></a>
                    </div>
                    <div class="conteneurInfoHistorique">
                        <div>
                            <h3 class="titreAnimeHistorique"><?= htmlspecialchars($anime->affichageHistorique($value['codeAnime'])['Titre_anime'], ENT_QUOTES, 'UTF-8') ?></h3>
                        </div>
                        <div>
                            <h4 class="episodeAnimeHistorique">Episode <?= htmlspecialchars($value['numeroEpisode'], ENT_QUOTES, 'UTF-8') ?></h4>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</body>

<?php } else { ?>
<?php header("Location:index.php?login&watchlist=false") ?>
<?php } ?>
