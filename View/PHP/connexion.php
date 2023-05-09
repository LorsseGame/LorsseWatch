
<body class="body_connexion">

    <h3 style="text-align: center;">
        <?php
        if (isset($_GET['message'])) {
            echo $_GET['message'];
        }
        else if (isset($_GET['watchlist'])){
            echo "<p>Veiller vous connecter pour accéder a cette page.</p>";
        }
        ?></h3>
    <form  method="post">
        <main class="Main_Login">
            <div class="div_login">
                <h1 class="h1_login">Login</h1>
                <input type="email" name="email" placeholder="Email" id="input_Email">
                <?php if (isset($_POST['Valider'])) {
                    if (isset($erreur['email'])) {
                ?>
                        <p style="color: red;"><?php echo $erreur['email']; ?></p>
                <?php }
                } ?>
                <?php if (isset($profilInexistant)) { ?>
                    <p><?= $profilInexistant ?></p>
                <?php } ?>
                <input type="password" name="password" placeholder="Password" id="input_Password">
                <?php
                if (isset($erreur['password'])) {
                ?>
                    <p style="color: red;"><?php echo $erreur['password']; ?></p>
                <?php }
                ?>
                <?php if (isset($mauvaisMdp)) { ?>
                    <p style="color: red;"><?= $mauvaisMdp ?></p>
                <?php } ?>
                <input type="submit" value="Login" name="Valider" id="Input_Valider_Login">
                <?php if (isset($_POST['Valider'])) {

                    if (isset($erreur['email']) && isset($erreur['password'])) {
                ?>
                        <p style="color: red;"> Veiller rentrer vos information. </p>
                <?php }
                }
                ?>
                <?php
                if (isset($_POST['Valider'])) {
                    if (isset($erreur['Desactiver'])) { ?>
                        <p style="color: red;"><?php echo $erreur['Desactiver']; ?></p>
                        <input type="submit" name="activer" value="Activer" id="">
                <?php }
                } ?>
                <div class="lien_login">
                    <a class="No_mdp" href="">Forgot Password ?</a>
                    <a class="sinscrire" href="inscriptions.php">Sign Up</a>
                </div>
            </div>

        </main>
    </form>




