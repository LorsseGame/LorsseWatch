<?php if ($_SESSION['Role'] == 1) {
    foreach ($utilisateur->affichageUtilisateur() as $key => $value) {
?>
        <div class="divGererInformation">
            <h3>Code : <p><?= $value['Code_utilisateur'] ?></p>
            </h3>
            <h3>Pseudo : <p><?= $value['Pseudo_utilisateur'] ?></p>
            </h3>
            <h3>Désactiver : <p><?= $value['desactiver'] ?></p>
            </h3>
            <form action="" method="post">
                <button type="submit" value="<?= $value['Code_utilisateur'] ?>" name="delete">Supprimer</button>
            </form>
        </div>
    <?php }
} else {   ?>

    <script>
        window.location.href = "index.php?home"; //redirection de l'utilisateur si il n'a pas les droits admin
    </script>

<?php
} ?>