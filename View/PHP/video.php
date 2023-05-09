<body>
    <div class="div_video">
        <?php
        if ($_GET['episode'] > 1) { ?>
            <a href="index.php?video&episode=<?= $moins ?>&anime=<?= $_GET['anime'] ?>&saison=<?= $_GET['saison'] ?>&langue=<?= $_GET['langue'] ?>" class="a_video_moins"> < </a>
                <?php } else { ?>
                    <a href="index.php?video&episode=<?= $_GET['episode'] ?>&anime=<?= $_GET['anime'] ?>&saison=<?= $_GET['saison'] ?>&langue=<?= $_GET['langue'] ?>" class="a_video_moins"> < </a>
                        <?php } ?>
                        <video class="video" controlslist="nodownload" controls poster="<?= $video->video()['image_episode']; ?>" src="<?= $video->video()['video'] ?>"></video>
                        <?php
                        if ($_GET['episode'] < $anime->nombre_episode()['Nombre_episode']) { ?>

                            <a href="index.php?video&episode=<?= $plus ?>&anime=<?= $_GET['anime'] ?>&saison=<?= $_GET['saison'] ?>&langue=<?= $_GET['langue'] ?>" class="a_video_plus">></a>
                        <?php } else { ?>
                            <a href="index.php?video&episode=<?= $_GET['episode'] ?>&anime=<?= $_GET['anime'] ?>&saison=<?= $_GET['saison'] ?>&langue=<?= $_GET['langue'] ?>" class="a_video_plus">></a>

                        <?php } ?>
    </div>

    <div class="information_episode">
        <h4 class="numero_episode">Episode <select name="numero_episode" onchange="location.href=''+this.options[this.selectedIndex].value;" id="">
                <option style="display: none;" value=""><?= $_GET['episode'] ?></option>
                <?php
                for ($i = 1; $i <= $video->max_episode()['episode']; $i++) { ?>


                    <option value="index.php?video&episode=<?= $i ?>&anime=<?= $_GET['anime'] ?>&saison=<?= $_GET['saison'] ?>&langue=<?= $_GET['langue'] ?>"><?= $i ?></option>

                <?php }
                ?>
            </select></h4>

    </div>

</body>