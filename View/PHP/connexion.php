<body class="body_connexion">

    <h3 style="text-align: center;">
        <?php
        if (isset($_GET['message'])) {
            echo htmlspecialchars($_GET['message'], ENT_QUOTES, 'UTF-8');
        } else if (isset($_GET['watchlist'])) {
            echo "<p>Veuillez vous connecter pour accéder à cette page.</p>";
        }
        ?></h3>
    <form method="post">
        <main class="Main_Login">
            <div class="div_login">
                <h1 class="h1_login">Login</h1>
                <input type="email" name="email" placeholder="Email" id="input_Email">
                <?php
                if (isset($_POST['Valider'])) {
                    if (isset($erreur['email'])) {
                ?>
                        <p style="color: red;"><?php echo htmlspecialchars($erreur['email'], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php }
                } ?>
                <?php if (isset($profilInexistant)) { ?>
                    <p><?= htmlspecialchars($profilInexistant, ENT_QUOTES, 'UTF-8') ?></p>
                <?php } ?>
                <input type="password" name="password" placeholder="Password" id="input_Password">
                <?php
                if (isset($erreur['password'])) {
                ?>
                    <p style="color: red;"><?php echo htmlspecialchars($erreur['password'], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php }
                ?>
                <?php if (isset($mauvaisMdp)) { ?>
                    <p style="color: red;"><?= htmlspecialchars($mauvaisMdp, ENT_QUOTES, 'UTF-8') ?></p>
                <?php } ?>
                <input type="submit" value="Login" name="Valider" id="Input_Valider_Login">
                <?php if (isset($_POST['Valider'])) {

                    if (isset($erreur['email']) && isset($erreur['password'])) {
                ?>
                        <p style="color: red;">Veuillez entrer vos informations.</p>
                <?php }
                }
                ?>
                <?php
                if (isset($_POST['Valider'])) {
                    if (isset($erreur['Desactiver'])) { ?>
                        <p style="color: red;"><?php echo htmlspecialchars($erreur['Desactiver'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <input type="submit" name="activer" value="Activer" id="">
                <?php }
                } ?>
                <div class="lien_login">
                    <a class="No_mdp" href="">Forgot Password ?</a>
                    <a class="sinscrire" href="index.php?register">Sign Up</a>
                </div>
            </div>

        </main>
    </form>
</body>
