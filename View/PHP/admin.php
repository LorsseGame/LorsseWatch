<?php
// Vérification si l'utilisateur a le rôle admin
if ($role->verif_role()["Code_role"] == 1) {
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>


        <h1 class="h1_ajouter_anime">Ajouter Anime</h1>

        <a href="index.php?gererUtilisateur"><button>gérer utilisateur</button></a>

        <!-- formulaire d'ajout d'anime dans la base de données -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="conteneur_inp_ajoue_anime">
                <input type="text" placeholder="Titre" name="titre" required>
                <?php if (isset($erreur['titre'])) {
                    echo $erreur['titre'];
                } ?>
                <input type="text" placeholder="Nombre d'épisodes" name="nombre_episode" required>
                <?php if (isset($erreur['nombre_episode'])) {
                    echo $erreur['nombre_episode'];
                } ?>
                <label for="">Image</label>
                <input type="file" placeholder="Image de l'anime" name="image_anime" required>
                <?php if (isset($erreur['image_anime'])) {
                    echo $erreur['image_anime'];
                } ?>
                <input type="text" placeholder="Nombre de saisons" name="nombre_saison" required>
                <?php if (isset($erreur['nombre_saison'])) {
                    echo $erreur['nombre_saison'];
                } ?>
                <input type="submit" name="send_anime">
            </div>
        </form>
        <div class="div_admin_ligne"></div><!-- ajout d'une ligne de séparation  -->

        <h1 class="h1_ajouter_episode">Ajouter Episode</h1>
        <!-- formulaire d'ajout d'épisode dans la base de données -->
        <form action="" method="post">
            <div class="conteneur_inp_ajoue_episode">

                <input type="number" name="episode" placeholder="Numéro de l'épisode" required>
                <?php if (isset($erreur['episode'])) {
                    echo $erreur['episode'];
                } ?>
                <input type="number" name="saison" placeholder="Numéro de la saison" required>
                <?php if (isset($erreur['image_episode'])) {
                    echo $erreur['image_episode'];
                } ?>

                <select name="code_anime" required><!-- select affichant tous les anime de la base de données -->
                    <option value="">Choix anime</option>
                    <?php for ($i = 1; $i <= $anime->nombre_anime()['nombre_anime']; $i++) {
                        $anime->setCode($i) ?>
                        <option value="<?= $i ?>"><?= $anime->information_anime()['Titre_anime']  ?></option>
                    <?php }  ?>

                </select>

                <select name="choix" required><!-- select choix de la langue des épisodes ajoutés -->
                    <option value="vostfr">Vostfr</option>
                    <option value="vf">VF</option>
                </select>

                <?php if (isset($erreur['durer'])) {
                    echo $mess;
                } ?>

                <input type="submit" name="send_episode">

                <?php if (isset($ajoue)) {
                    echo $ajoue;
                } ?>

            </div>
        </form>

        <div class="div_admin_ligne"></div><!-- ajout d'une ligne de séparation  -->

        <h2 class="h2_changer_slider">Changer le slider de la page d'accueil</h2>
        <!-- formulaire pour changer le slider sur la page d'accueil -->
        <form action="" method="post">
            <div class="conteneur_changer_slider">
                <div class="div_changer_slider">
                    <div class="div_slider1">
                        <h3>Slider 1</h3>
                        <select name="change_slider1" required><!-- select affichant tous les anime de la base de données -->
                            <option value="">Choix anime</option>
                            <?php for ($i = 1; $i <= $anime->nombre_anime()['nombre_anime']; $i++) {
                                $anime->setCode($i) ?>
                                <option value="<?= $i ?>"><?= $anime->information_anime()['Titre_anime']  ?></option>
                            <?php }  ?>

                        </select>
                    </div>

                    <div class="div_slider2">
                        <h3>Slider 2</h3>
                        <select name="change_slider2" required><!-- select affichant tous les anime de la base de données -->
                            <option value="">Choix anime</option>
                            <?php for ($i = 1; $i <= $anime->nombre_anime()['nombre_anime']; $i++) {
                                $anime->setCode($i) ?>
                                <option value="<?= $i ?>"><?= $anime->information_anime()['Titre_anime']  ?></option>
                            <?php }  ?>

                        </select>
                    </div>
                    <div class="div_slider3">
                        <h3>Slider 3</h3>
                        <select name="change_slider3" required><!-- select affichant tous les anime de la base de données -->
                            <option value="">Choix anime</option>
                            <?php for ($i = 1; $i <= $anime->nombre_anime()['nombre_anime']; $i++) {
                                $anime->setCode($i) ?>
                                <option value="<?= $i ?>"><?= $anime->information_anime()['Titre_anime']  ?></option>
                            <?php }  ?>

                        </select>
                    </div>
                </div>
                <input class="inp_send_slider_admin" type="submit" name="send_slider_admin">
            </div>
        </form>

        <div class="div_admin_ligne"></div>

        <div class="conteneur_change_populaire">
            <h3>Populaire</h3>
            <!-- formulaire pour changer l'anime populaire sur la page d'accueil -->
            <form action="" method="post">
                <select name="populaire" required><!-- select affichant tous les anime de la base de données -->
                    <option value="">Choix anime</option>
                    <?php for ($i = 1; $i <= $anime->nombre_anime()['nombre_anime']; $i++) {
                        $anime->setCode($i) ?>
                        <option value="<?= $i ?>"><?= $anime->information_anime()['Titre_anime']  ?></option>
                    <?php }  ?>
                </select>
                <input type="submit" name="send_populaire_admin">
            </form>
        </div>


    </body>

    </html>


<?php
} else {
    header("Location: index.php?home");  // Redirection de l'utilisateur s'il n'a pas les droits admin
    exit;
}
?>
