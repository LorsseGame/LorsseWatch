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
                                <p class="erreur_prenom"><?= $erreur["prenom"] ?></p>
                            <?php } ?>
                        </div>
                        <div class="div_nom">
                            <input type="text" class="nom" placeholder="Nom" name="nom" id="">
                            <?php if (isset($erreur["nom"])) { ?>
                                <p class="erreur_nom"><?= $erreur["nom"] ?></p>
                            <?php } ?>
                        </div>
                    </div>

                    <input type="text" placeholder="pseudo" name="pseudo" id="pseudo"><br>

                    <?php if (isset($erreur["pseudo"])) { ?>
                        <p class="erreur_pseudo"><?= $erreur["pseudo"] ?></p>
                    <?php } ?>
                    <?php if (isset($pseudoExiste)) { ?>
                        <p class="pseudo_existant"><?= $pseudoExiste ?></p>
                    <?php } ?>

                    <input type="email" placeholder="Adresse Email" name="email" id="email"><br>

                    <?php if (isset($erreur["email"])) { ?>
                        <p class="erreur_email"><?= $erreur["email"] ?></p>
                    <?php } ?>
                    <?php if (isset($mailExiste)) { ?>
                        <p class="mail_existant"><?= $mailExiste ?></p>
                    <?php } ?>

                    <input type="password" placeholder="Mot de passe" name="password" id="password"><br>

                    <?php if (isset($erreur["password"])) { ?>
                        <p class="erreur_password"><?= $erreur["password"] ?></p>
                    <?php } ?>


                    <input type="file" name="fichier" id=""><br><br>

                    <?php if (isset($erreur["fichier"])) { ?>
                        <p class="erreur_fichier"><?= $erreur["fichier"] ?></p>
                    <?php } ?>

                    <input type="submit" name="send" id="send"><br>

                    <?php if (isset($message)) { ?>
                        <p><?= $message  ?></p>
                    <?php } ?>
                </div>
            </div>
        </form>
    </main>