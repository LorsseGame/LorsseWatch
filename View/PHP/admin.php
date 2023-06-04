<?php
//verification si l'utilisateur a bien le role admin
if ($role->verif_role()["Code_role"] == 1) { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>


        <h1 class="h1_ajouter_anime">Ajouter Anime</h1>

        <!-- formulaire d'ajoue d'anime dans base de donnée -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="conteneur_inp_ajoue_anime">
                <input type="text" placeholder="Titre" name="titre" id="">
                <?php if (isset($erreur['titre'])) {
                    echo $erreur['titre'];
                } ?>
                <input type="text" placeholder="Nombre episode" name="nombre_episode" id="">
                <?php if (isset($erreur['nombre_episode'])) {
                    echo $erreur['nombre_episode'];
                } ?>
                <label for="">image</label>
                <input type="file" placeholder="image anime" name="image_anime" id="">
                <?php if (isset($erreur['image_anime'])) {
                    echo $erreur['image_anime'];
                } ?>
                <input type="text" placeholder="nombre saison" name="nombre_saison" id="">
                <?php if (isset($erreur['nombre_saison'])) {
                    echo $erreur['nombre_saison'];
                } ?>
                <input type="submit" name="send_anime" id="">
            </div>
        </form>
        <div class="div_admin_ligne"></div><!-- ajoue d'une ligne de separation  -->

        <h1 class="h1_ajouter_episode">Ajouter Episode</h1>
        <!-- formulaire d'ajoue d'episode dans base de donnée -->
        <form action="" method="post">
            <div class="conteneur_inp_ajoue_episode">

                <input type="number" name="episode" placeholder="nombre episode" id="">
                <?php if (isset($erreur['episode'])) {
                    echo $erreur['episode'];
                } ?>
                <input type="number" name="saison" placeholder="saison" id="">
                <?php if (isset($erreur['image_episode'])) {
                    echo $erreur['image_episode'];
                } ?>

                <select name="code_anime" id=""> <!-- select affichant tous les anime de la base de donnée -->
                    <option value="">Choix anime</option>
                    <?php for ($i = 1; $i <= $anime->nombre_anime()['nombre_anime']; $i++) {
                        $anime->setCode($i) ?>
                        <option value="<?= $i ?>"><?= $anime->information_anime()['Titre_anime']  ?></option>
                    <?php }  ?>

                </select>

                <select name="choix" id=""> <!-- select choix de la langue des episode ajouter  -->
                    <option value="vostfr">Vostfr</option>
                    <option value="vf">VF</option>
                </select>

                <?php if (isset($erreur['durer'])) {
                    echo $mess;
                } ?>

                <input type="submit" name="send_episode" id="">

                <?php if (isset($ajoue)) {
                    echo $ajoue;
                } ?>

            </div>
        </form>

        <div class="div_admin_ligne"></div><!-- ajoue d'une ligne de separation  -->

        <h2 class="h2_changer_slider">changer slider page home</h2>
        <!-- formulaire pour changer slider sur la page home -->
        <form action="" method="post">
            <div class="conteneur_changer_slider">
                <div class="div_changer_slider">
                    <div class="div_slider1">
                        <h3>Slider 1</h3>
                        <select name="change_slider1" id=""><!-- select affichant tous les anime de la base de donnée -->
                            <option value="">Choix anime</option>
                            <?php for ($i = 1; $i <= $anime->nombre_anime()['nombre_anime']; $i++) {
                                $anime->setCode($i) ?>
                                <option value="<?= $i ?>"><?= $anime->information_anime()['Titre_anime']  ?></option>
                            <?php }  ?>

                        </select>
                    </div>

                    <div class="div_slider2">
                        <h3>Slider 2</h3>
                        <select name="change_slider2" id=""><!-- select affichant tous les anime de la base de donnée -->
                            <option value="">Choix anime</option>
                            <?php for ($i = 1; $i <= $anime->nombre_anime()['nombre_anime']; $i++) {
                                $anime->setCode($i) ?>
                                <option value="<?= $i ?>"><?= $anime->information_anime()['Titre_anime']  ?></option>
                            <?php }  ?>

                        </select>
                    </div>
                    <div class="div_slider3">
                        <h3>Slider 3</h3>
                        <select name="change_slider3" id=""><!-- select affichant tous les anime de la base de donnée -->
                            <option value="">Choix anime</option>
                            <?php for ($i = 1; $i <= $anime->nombre_anime()['nombre_anime']; $i++) {
                                $anime->setCode($i) ?>
                                <option value="<?= $i ?>"><?= $anime->information_anime()['Titre_anime']  ?></option>
                            <?php }  ?>

                        </select>
                    </div>
                </div>
                <input class="inp_send_slider_admin" type="submit" name="send_slider_admin" id="">
            </div>
        </form>

        <div class="div_admin_ligne"></div>

        <div class="conteneur_change_populaire">
            <h3>Populaire</h3>
            <!-- formulaire pour changer l'anime populaire sur la page home -->
            <form action="" method="post">
                <select name="populaire" id=""><!-- select affichant tous les anime de la base de donnée -->
                    <option value="">Choix anime</option>
                    <?php for ($i = 1; $i <= $anime->nombre_anime()['nombre_anime']; $i++) {
                        $anime->setCode($i) ?>
                        <option value="<?= $i ?>"><?= $anime->information_anime()['Titre_anime']  ?></option>
                    <?php }  ?>
                </select>
                <input type="submit" name="send_populaire_admin" id="">
            </form>
        </div>


    </body>

    </html>


<?php } else {
?>
    <script>
        window.location.href = "index.php?home";  //redirection de l'utilisateur si il n'a pas les droits admin
    </script>

<?php
} ?>