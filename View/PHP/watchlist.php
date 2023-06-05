<?php if (isset($_SESSION['id']) && isset($_SESSION['pseudo']) && $_SESSION['email']) { ?>

    <body class="watchlist_body">
        <div class="conteneur_div_watchlist">
            <div class="div_info_watchlist">
                <img class="image_profil_watchlist" src="<?= $_SESSION['lien_image'] ?>" alt="">
                <h3><?= $_SESSION['pseudo'] ?></h3>

                <div class="div_info_dinamique_watchlist">
                    <h3>Video: 0</h3>
                    <h3 class="h3_temp_watchlist">Temps: 00:00</h3>
                </div>

                <input type="submit" value="Lancer" class="inp_lancer_watchlist" name="" id="">
            </div>


            <div class="conteneur_video_watchlist">
                <?php foreach ($watchlist->recup_code() as $key => $value)  { ?>
                    <div class="div_anime_watchlist">
                        <div class="conteneur_element_gauche_watchlist">
                            <div class="div_image_anime_watchlist">
                                <img class="img_watchlist_anime" src="<?= $anime->affichage_watchlist($value['Code_anime'])['image_home'] ?>" alt="">
                            </div>
                            <div>
                                <h4 class="div_titre_anime_watchlist"><?= $anime->affichage_watchlist($value['Code_anime'])['Titre_anime'] ?></h4>
                            </div>
                        </div>

                        <div class="conteneur_element_droite_watchlist">
                            <div class="div_bouton_watchlist">
                                <a href="index.php?choix&code=<?= $value['Code_anime'] ?>&saison=1&langue=vostfr">
                                    <button class="boutonwatchlist">Regarder</button>
                                </a>
                                <form action="" method="post">
                                <input type="hidden" name="anime_id" value="<?= $value['Code_anime'] ?>">
                                    <input class="Bouton_Delete_Watchlist" type="submit" value="Supprimer" name="delete" id="">
                                </form>
                            </div>
                        </div>
                    </div>
                <?php  } ?>
            </div>


        </div>
    </body>

<?php } else { ?>
    <?php header("Location:index.php?login&watchlist=false") ?>
<?php } ?>
