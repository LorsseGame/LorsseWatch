<?php if (isset($_SESSION['id']) && isset($_SESSION['pseudo']) && $_SESSION['email']) { ?>
    <body class="watchlist_body">
        <div class="conteneur_div_watchlist">
            <div class="div_info_watchlist">
                <img class="image_profil_watchlist" src="<?= htmlspecialchars($_SESSION['lien_image'], ENT_QUOTES, 'UTF-8') ?>?t=<?= time() ?>" alt="">
                <h3><?= htmlspecialchars($_SESSION['pseudo'], ENT_QUOTES, 'UTF-8') ?></h3>
                <div class="div_info_dinamique_watchlist">
                    <h3>Anime: <?= htmlspecialchars($watchlist->countAnime()["codeAnime"], ENT_QUOTES, 'UTF-8') ?></h3>
                </div>
            </div>

            <div class="conteneur_video_watchlist">
                <?php foreach ($watchlist->recup_code() as $key => $value) {
                    if (!empty($anime->affichage_watchlist($value['Code_anime'])['image_home'])) { ?>
                        <div class="div_anime_watchlist">
                            <div class="conteneur_element_gauche_watchlist">
                                <div class="div_image_anime_watchlist">
                                    <img class="img_watchlist_anime" src="<?= htmlspecialchars($anime->affichage_watchlist($value['Code_anime'])['image_home'], ENT_QUOTES, 'UTF-8') ?>" alt="">
                                </div>
                                <div>
                                    <h4 class="div_titre_anime_watchlist"><?= htmlspecialchars($anime->affichage_watchlist($value['Code_anime'])['Titre_anime'], ENT_QUOTES, 'UTF-8') ?></h4>
                                </div>
                            </div>
                            <div class="conteneur_element_droite_watchlist">
                                <div class="div_bouton_watchlist">
                                    <a href="index.php?choix&code=<?= htmlspecialchars($value['Code_anime'], ENT_QUOTES, 'UTF-8') ?>&saison=1&langue=vostfr">
                                        <button class="boutonwatchlist">Regarder</button>
                                    </a>
                                    <form action="" method="post">
                                        <input type="hidden" name="anime_id" value="<?= htmlspecialchars($value['Code_anime'], ENT_QUOTES, 'UTF-8') ?>">
                                        <input class="Bouton_Delete_Watchlist" type="submit" value="Supprimer" name="delete" id="">
                                    </form>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </body>
<?php } else { ?>
    <?php header("Location:index.php?login&watchlist=false") ?>
<?php } ?>
