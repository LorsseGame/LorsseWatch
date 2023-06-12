<body class="info_profil_body">
    <main>

        <div class="div_image_info_pseudo">
            <form id="myForm" method="post" enctype="multipart/form-data">
                <div>
                    <input type="file" id="file" name="file" onchange="previewFile()" style="display: none;">
                </div>
                <div style="display: inline-block;">
                    <img class="image_info_profil" src="<?= htmlspecialchars($_SESSION['lien_image'], ENT_QUOTES, 'UTF-8') ?>?t=<?= time() ?>" alt="image" onclick="document.getElementById('file').click();">
                </div>
                <div style="display: none;" id="conteneurPreview" class="confirmationImage">
                    <div id="preview" style="display: none;">
                        <img class="imgConfirmation" src="" alt="image">
                        <span style="color: white;">Voulez vous changer votre photo de profil</span>
                        <div class="directionBouton">
                            <button onclick="cancelImage()">NON</button>
                            <input type="submit" value="OUI" name="sendImage" id="">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <form action="" method="post">
            <div class="div_pseudo_info_pseudo">
                <?php if (empty($_POST['modifier_pseudo'])) { ?>
                    <h5 class="h5_info_profil">Pseudo :</h5>
                    <h3 class="h3_info_profil"><?= htmlspecialchars($_SESSION['pseudo'], ENT_QUOTES, 'UTF-8') ?></h3>
                    <input type="submit" value="Modifier" class="modifier_pseudo" name="modifier_pseudo" id="">
                <?php } ?>

                <?php if (isset($_POST['modifier_pseudo'])) { ?>
                    <h5 class="h5_info_profil">Pseudo :</h5>
                    <input type="text" class="inp_pseudo" value="<?= htmlspecialchars($_SESSION['pseudo'], ENT_QUOTES, 'UTF-8') ?>" name="pseudo" id="">
                    <input type="submit" value="Modifier" class="send_pseudo" name="send_pseudo" id="">
                <?php  } ?>
            </div>
        </form>

        <form action="" method="post">
            <div class="div_pseudo_info_pseudo">
                <?php if (empty($_POST['modifier_email'])) { ?>

                    <h5 class="h5_info_profil">Email :</h5>
                    <h3 class="h3_info_profil"><?= htmlspecialchars($_SESSION['email'], ENT_QUOTES, 'UTF-8') ?></h3>
                    <input type="submit" value="Modifier" class="modifier_email" name="modifier_email" id="">
                <?php  } ?>

                <?php if (isset($_POST['modifier_email'])) { ?>
                    <h5 class="h5_info_profil">Email :</h5>
                    <input type="text" class="inp_email" value="<?= htmlspecialchars($_SESSION['email'], ENT_QUOTES, 'UTF-8') ?>" name="email" id="">
                    <input type="submit" value="Modifier" class="send_email" name="send_email" id="">
                <?php  } ?>
            </div>

        </form>
        <form action="" method="post">
            <div class="div_pseudo_info_pseudo">
                <?php if (empty($_POST['modifier_password'])) { ?>

                    <h5 class="h5_info_profil">Password :</h5>
                    <h3 class="h3_info_profil">************</h3>
                    <input type="submit" value="Modifier" class="modifier_password" name="modifier_password" id="">
                <?php  } ?>

                <?php if (isset($_POST['modifier_password'])) { ?>
                    <h5 class="h5_info_profil">Password :</h5>
                    <input type="password" class="inp_password" name="password" id="">
                    <input type="submit" value="Modifier" class="send_password" name="send_password" id="">
                <?php  } ?>

            </div>
        </form>

    </main>
</body>
