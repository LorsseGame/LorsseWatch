<?php if ($_SESSION['Role'] == 1) {
    foreach ($utilisateur->affichageUtilisateur() as $key => $value) {
?>
        <div class="divGererInformation">
            <h3>Code : <?= htmlspecialchars($value['Code_utilisateur'], ENT_QUOTES, 'UTF-8') ?></h3>
            <h3>Pseudo : <?= htmlspecialchars($value['Pseudo_utilisateur'], ENT_QUOTES, 'UTF-8') ?></h3>
            <h3>Désactiver : <?= htmlspecialchars($value['desactiver'], ENT_QUOTES, 'UTF-8') ?></h3>
            <form action="" method="post">
                <button type="submit" value="<?= $value['Code_utilisateur'] ?>" name="delete">Supprimer</button>
                <button type="submit" value="<?= $value['Code_utilisateur'] ?>" name="desactiverUtilisateur">Désactiver</button>
                <?php if ($value['desactiver'] == 1) { ?>
                    <button type="submit" value="<?= $value['Code_utilisateur'] ?>" name="reactiver">Réactiver</button>
                <?php } ?>
            </form>
        </div>
<?php
    }
} else { ?>
    <script>
        window.location.href = "index.php?home"; //redirection de l'utilisateur s'il n'a pas les droits admin
    </script>
<?php
} ?>
