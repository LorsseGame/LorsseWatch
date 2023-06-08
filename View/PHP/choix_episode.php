<?php if ($anime->verificationDesactiver()['Desactiver'] == 0 || $_SESSION['Role'] == 1) { ?>

    <body class="body_choix">

        <div class="div_fond_image_anime">
            <img src="<?php echo $choix_episode->affichageChoixAnime()['image']; ?>" class="image_anime_choix" alt=""> <!-- affichage de l'image de l'anime -->
        </div>

        <div style="display: none;" id="notification" class="notification">
            <p class="texteNotif">L'anime a été désactivé</p>
        </div>

        <div style="display: none;" id="notificationReactiver" class="notification">
            <p class="texteNotif">L'anime a été Réactiver</p>
        </div>

        <div class="information_anime">


            <form action="" method="post"> <!-- formulaire d'ajoue d'anime a la watchlist -->
                <button type="submit" class="add_anime_watchlist" name="add_anime_watchlist" id=""> Ajouter à la watchlist</button>
            </form>

            <select class="select_saison_choix" name="saison" onchange="location.href=''+this.options[this.selectedIndex].value;" id=""> <!-- select affichant le nombre de saison -->
                <option style="display:none" value="">Choix Saison</option>
                <?php for ($e = 1; $e <= $choix_episode->nombre_saison()['nombre_saison']; $e++) { ?>
                    <option value="index.php?choix&code=<?= $_GET['code'] ?>&saison=<?= $e ?>&langue=<?= $_GET['langue'] ?>">Saison <?= $e ?></option>
                <?php }  ?>
            </select>
            <h1 class="h1_choix_titre"><?= $choix_episode->affichageChoixAnime()['Titre_anime']; ?></h1>
            <select onchange="location.href=''+this.options[this.selectedIndex].value;" class="select_langue_choix" name="choix_langue" id=""> <!-- select affichant les langue -->
                <option style="display: none;" value="">Choix langue</option>
                <option value="index.php?choix&code=<?= $_GET['code'] ?>&saison=<?= $_GET['saison'] ?>&langue=vostfr">VOSTFR</option>
                <option value="index.php?choix&code=<?= $_GET['code'] ?>&saison=<?= $_GET['saison'] ?>&langue=vf">VF</option>
            </select>
            <?php
            if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
                if ($utilisateur->verif_role()['Code_role'] == 1) {
            ?>
                    <form action="" method="post" id="formDesactiverAnime">
                        <button type="submit" name="desactiverAnime" id="btnDesativerAnime" class="btnDesativerAnime">Désactiver</button>
                    </form>
            <?php
                }
            }
            ?>
            <?php
            if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
                if ($utilisateur->verif_role()['Code_role'] == 1) {
            ?>
                    <form action="" method="post" id="formReactiverAnime">
                        <button type="submit" name="reactiverAnime" id="btnReactiverAnime" class="btnReactiverAnime">Réactiver</button>
                    </form>
            <?php
                }
            }
            ?>

            <?php
            if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
                if ($utilisateur->verif_role()['Code_role'] == 1) {
            ?>
                    <button type="submit" id="btnSupprimerAnime" class="btnSupprimerAnime" onclick="supprimerAnime()">Supprimer</button>
            <?php
                }
            }
            ?>

        </div>

        <div class="confirmationDelete" id="confirmationDelete" style="display: none;">
            <div>
                <p class="texteConfirmation">Êtes-vous sur de vouloirs supprimés cette anime ?</p>
            </div>

            <div class="conteneurBoutonConfirmeDelete">
                <button onclick="cancelConfirmDelete()">NON</button>
                <form action="" method="post">
                    <button type="submit" style="margin-left: 2rem;" name="deleteAnime">OUI</button>
                </form>
            </div>
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

<?php } else {
    header("Location:index.php?home");
} ?>