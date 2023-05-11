<body class="body_choix">

    <div class="div_fond_image_anime">
        <img src="<?php echo $choix_episode->information_anime()['image']; ?>" class="image_anime_choix" alt="">
    </div>

    <div class="information_anime">

        <!-- <div class="conteneur_bouton_ajoue_watchlist">
            <div class="div_ajoue_watchlist">
                <img class="bouton_ajoue_watchlist" src="./image/watchlist.png" alt="">
                <span class="span_ajoue_watchlist">Ajouter a la watchlist</span>
            </div>
        </div> -->





        <form id="myForm" action="./Controller/verifier.php" method="post">
            <div class="conteneur_bouton_ajoue_watchlist" onclick="verifierEtEnvoyer()">
                <div class="div_ajoue_watchlist">
                    <img class="bouton_ajoue_watchlist" src="./image/watchlist.png" alt="">
                    <span class="span_ajoue_watchlist">Ajouter a la watchlist</span>
                </div>
                <input type="hidden" name="codeAnime" id="codeAnimeInput">
            </div>
        </form>

        <script>
            function verifierEtEnvoyer() {
                var codeAnime = getCodeAnimeFromURL();
                document.getElementById('codeAnimeInput').value = codeAnime;
                console.log('Code Anime:', codeAnime);

                // Effectuer la vérification côté serveur en utilisant une requête AJAX
                fetch('./Controller/verifier.php', {
                        method: 'POST',
                        body: JSON.stringify({
                            codeAnime: codeAnime
                        })
                    })
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(data) {
                        if (data.valide) {
                            document.getElementById('myForm').submit();
                        } else {
                            alert('La vérification a échoué. Le formulaire ne peut pas être envoyé.');
                        }
                    })
                    .catch(function(error) {
                        console.error('Erreur lors de la vérification :',error);
                    });
            }
            function getCodeAnimeFromURL() {
                var searchParams = new URLSearchParams(window.location.search);
                return searchParams.get('code');
            }
        </script>

        <select class="select_saison_choix" name="saison" onchange="location.href=''+this.options[this.selectedIndex].value;" id="">
            <option style="display:none" value="">Choix Saison</option>
            <?php for ($e = 1; $e <= $choix_episode->nombre_saison()['nombre_saison']; $e++) { ?>
                <option value="index.php?choix&code=<?= $_GET['code'] ?>&saison=<?= $e ?>&langue=<?= $_GET['langue'] ?>">Saison <?= $e ?></option>
            <?php }  ?>
        </select>
        <h1 class="h1_choix_titre"><?= $choix_episode->information_anime()['Titre_anime']; ?></h1>
        <select onchange="location.href=''+this.options[this.selectedIndex].value;" class="select_langue_choix" name="choix_langue" id="">
            <option value="index.php?choix&code=<?= $_GET['code'] ?>&saison=<?= $_GET['saison'] ?>&langue=vostfr">VOSTFR</option>
            <option value="index.php?choix&code=<?= $_GET['code'] ?>&saison=<?= $_GET['saison'] ?>&langue=vf">VF</option>
        </select>

    </div>

    <div class="div_fond_episode">
        <?php for ($i = 1; $i <= $episode->max_episode()['episode']; $i++) {
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