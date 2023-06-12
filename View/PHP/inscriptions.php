<body class="body_register">
    <main class="main_register">
        <form class="form_modif" method="post" enctype="multipart/form-data">

            <div class="conteneur_form">
                <div class="div_direction">
                    <h2>Register</h2>
                    <div class="conteneur_prenom">
                        <div class="div_prenom">
                            <input type="text" class="prenom" placeholder="Prenom" name="prenom" id="">
                            <?php if (isset($erreur["prenom"])) { ?>
                                <p class="erreur_prenom"><?= htmlspecialchars($erreur["prenom"], ENT_QUOTES, 'UTF-8') ?></p>
                            <?php } ?>
                        </div>
                        <div class="div_nom">
                            <input type="text" class="nom" placeholder="Nom" name="nom" id="">
                            <?php if (isset($erreur["nom"])) { ?>
                                <p class="erreur_nom"><?= htmlspecialchars($erreur["nom"], ENT_QUOTES, 'UTF-8') ?></p>
                            <?php } ?>
                        </div>
                    </div>

                    <input type="text" placeholder="pseudo" name="pseudo" id="pseudo"><br>

                    <?php if (isset($erreur["pseudo"])) { ?>
                        <p class="erreur_pseudo"><?= htmlspecialchars($erreur["pseudo"], ENT_QUOTES, 'UTF-8') ?></p>
                    <?php } ?>
                    <?php if (isset($pseudoExiste)) { ?>
                        <p class="pseudo_existant"><?= htmlspecialchars($pseudoExiste, ENT_QUOTES, 'UTF-8') ?></p>
                    <?php } ?>

                    <input type="email" placeholder="Adresse Email" name="email" id="email"><br>

                    <?php if (isset($erreur["email"])) { ?>
                        <p class="erreur_email"><?= htmlspecialchars($erreur["email"], ENT_QUOTES, 'UTF-8') ?></p>
                    <?php } ?>
                    <?php if (isset($mailExiste)) { ?>
                        <p class="mail_existant"><?= htmlspecialchars($mailExiste, ENT_QUOTES, 'UTF-8') ?></p>
                    <?php } ?>

                    <input type="password" placeholder="Mot de passe" name="password" id="password"><br>

                    <?php if (isset($erreur["password"])) { ?>
                        <p class="erreur_password"><?= htmlspecialchars($erreur["password"], ENT_QUOTES, 'UTF-8') ?></p>
                    <?php } ?>


                    <input type="file" name="fichier" id=""><br><br>

                    <?php if (isset($erreur["fichier"])) { ?>
                        <p class="erreur_fichier"><?= htmlspecialchars($erreur["fichier"], ENT_QUOTES, 'UTF-8') ?></p>
                    <?php } ?>

                    <input type="submit" name="send" id="send"><br>

                    <?php if (isset($message)) { ?>
                        <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>
                    <?php } ?>
                </div>
            </div>
        </form>
    </main>
</body>
