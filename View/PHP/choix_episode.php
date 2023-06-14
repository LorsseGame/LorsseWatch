<?php
if ($anime->verificationDesactiver()['Desactiver'] == 0 || $_SESSION['Role'] == 1) {
?>

    <body class="body_choix">

        <div class="div_fond_image_anime">
            <img src="<?php echo htmlspecialchars($choix_episode->affichageChoixAnime()['image'], ENT_QUOTES, 'UTF-8'); ?>" class="image_anime_choix" alt=""> <!-- affichage de l'image de l'anime -->
        </div>

        <div style="display: none;" id="notification" class="notification">
            <p class="texteNotif">L'anime a été désactivé</p>
        </div>

        <div style="display: none;" id="notificationReactiver" class="notification">
            <p class="texteNotif">L'anime a été Réactiver</p>
        </div>

        <div class="information_anime">
            <div class="conteneurInformationAnime">
                <form action="" method="post">
                    <!-- formulaire d'ajout d'anime à la watchlist -->
                    <button type="submit" class="add_anime_watchlist" name="add_anime_watchlist" id="addButton">Ajouter à la watchlist</button>
                </form>

                <select class="select_saison_choix" name="saison" onchange="location.href=''+this.options[this.selectedIndex].value;" id=""> <!-- select affichant le nombre de saisons -->
                    <option style="display:none" value="">Choix Saison</option>
                    <?php for ($e = 1; $e <= $choix_episode->nombre_saison()['nombre_saison']; $e++) { ?>
                        <option value="index.php?choix&code=<?= htmlspecialchars($_GET['code'], ENT_QUOTES, 'UTF-8') ?>&saison=<?= $e ?>&langue=<?= htmlspecialchars($_GET['langue'], ENT_QUOTES, 'UTF-8') ?>">Saison <?= $e ?></option>
                    <?php }  ?>
                </select>
                <h1 class="h1_choix_titre"><?= htmlspecialchars($choix_episode->affichageChoixAnime()['Titre_anime'], ENT_QUOTES, 'UTF-8'); ?></h1>
                <select onchange="location.href=''+this.options[this.selectedIndex].value;" class="select_langue_choix" name="choix_langue" id=""> <!-- select affichant les langues -->
                    <option style="display: none;" value="">Choix langue</option>
                    <option value="index.php?choix&code=<?= htmlspecialchars($_GET['code'], ENT_QUOTES, 'UTF-8') ?>&saison=<?= htmlspecialchars($_GET['saison'], ENT_QUOTES, 'UTF-8') ?>&langue=vostfr">VOSTFR</option>
                    <option value="index.php?choix&code=<?= htmlspecialchars($_GET['code'], ENT_QUOTES, 'UTF-8') ?>&saison=<?= htmlspecialchars($_GET['saison'], ENT_QUOTES, 'UTF-8') ?>&langue=vf">VF</option>
                </select>
            </div>
            <div class="conteneurBtnAdmin">
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

        </div>

        <div class="confirmationDelete" id="confirmationDelete" style="display: none;">
            <div>
                <p class="texteConfirmation">Êtes-vous sûr de vouloir supprimer cette anime ?</p>
            </div>

            <div class="conteneurBoutonConfirmeDelete">
                <button onclick="cancelConfirmDelete()">NON</button>
                <form action="" method="post">
                    <button type="submit" style="margin-left: 2rem;" name="deleteAnime">OUI</button>
                </form>
            </div>
        </div>

        <div class="div_fond_episode">
            <?php for ($i = 1; $i <= $episode->max_episode()['episode']; $i++) { //bouclage jusqu'à ce que le maximum d'épisodes soit atteint
                $episode->setEpisode($i); ?>
                <div class="conteneur_choix_episode">
                    <div class="div_image_choix_episode">
                        <a href="index.php?video&episode=<?= $i ?>&anime=<?= htmlspecialchars($_GET['code'], ENT_QUOTES, 'UTF-8') ?>&saison=<?= htmlspecialchars($_GET['saison'], ENT_QUOTES, 'UTF-8') ?>&langue=<?= htmlspecialchars($_GET['langue'], ENT_QUOTES, 'UTF-8') ?>">
                            <div class="div_choix_episode" style="background-image: url(<?php echo htmlspecialchars($episode->information_episode()['image_episode'], ENT_QUOTES, 'UTF-8'); ?>);background-color: pink;">
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
    header("Location: index.php?home");
    exit;
} ?>