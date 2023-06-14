<?php if (isset($_SESSION['id']) && isset($_SESSION['pseudo']) && isset($_SESSION['email'])) { ?>
<!-- Display the following HTML if session variables are set -->
<body>
    <div class="conteneurHistorique">
        <!-- Loop through the historical episodes and display them -->
        <?php foreach ($historique->affichage() as $key => $value) {
            if (!empty($anime->affichageHistorique($value['codeAnime'])['image_home'])) { ?>
                <div class="divHistorique">
                    <div>
                        <!-- Display the episode image as a link -->
                        <a href="index.php?video&episode=<?= $value['numeroEpisode'] ?>&anime=<?= $value['codeAnime'] ?>&saison=1&langue=vostfr">
                            <img class="imgHistorique" src="<?= htmlspecialchars($anime->affichageHistorique($value['codeAnime'])['image_home'], ENT_QUOTES, 'UTF-8') ?>" alt="">
                        </a>
                    </div>
                    <div class="conteneurInfoHistorique">
                        <div>
                            <!-- Display the anime title -->
                            <h3 class="titreAnimeHistorique"><?= htmlspecialchars($anime->affichageHistorique($value['codeAnime'])['Titre_anime'], ENT_QUOTES, 'UTF-8') ?></h3>
                        </div>
                        <div>
                            <!-- Display the episode number -->
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
<!-- Redirect the user to the login page if session variables are not set -->
<?php header("Location:index.php?login&watchlist=false") ?>
<?php } ?>
