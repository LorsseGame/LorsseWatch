<?php
if (isset($_SESSION['id']) && isset($_SESSION['pseudo']) && $_SESSION['email']) { ?>

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
                <div class="div_video1_watchlist">
                    <img class="img_watchlist_anime" src="" alt="">
                </div>
            </div>

        </div>
    </body>

<?php } else { ?>
    <?php header("Location:index.php?login&watchlist=false") ?>
<?php } ?>
?>