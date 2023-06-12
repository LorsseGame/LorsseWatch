<body>
    <div class="div_video">
        <?php
        if ($_GET['episode'] > 1) { ?>
            <a href="index.php?video&episode=<?= htmlspecialchars($moins, ENT_QUOTES, 'UTF-8') ?>&anime=<?= htmlspecialchars($_GET['anime'], ENT_QUOTES, 'UTF-8') ?>&saison=<?= htmlspecialchars($_GET['saison'], ENT_QUOTES, 'UTF-8') ?>&langue=<?= htmlspecialchars($_GET['langue'], ENT_QUOTES, 'UTF-8') ?>" class="a_video_moins"> < </a>
        <?php } else { ?>
            <a href="index.php?video&episode=<?= htmlspecialchars($_GET['episode'], ENT_QUOTES, 'UTF-8') ?>&anime=<?= htmlspecialchars($_GET['anime'], ENT_QUOTES, 'UTF-8') ?>&saison=<?= htmlspecialchars($_GET['saison'], ENT_QUOTES, 'UTF-8') ?>&langue=<?= htmlspecialchars($_GET['langue'], ENT_QUOTES, 'UTF-8') ?>" class="a_video_moins"> < </a>
        <?php } ?>
        
        <video class="video" controlslist="nodownload" controls poster="<?= htmlspecialchars($video->video()['image_episode'], ENT_QUOTES, 'UTF-8') ?>" src="<?= htmlspecialchars($video->video()['video'], ENT_QUOTES, 'UTF-8') ?>"></video>
        
        <?php
        if ($_GET['episode'] < $anime->nombre_episode()['Nombre_episode']) { ?>
            <a href="index.php?video&episode=<?= htmlspecialchars($plus, ENT_QUOTES, 'UTF-8') ?>&anime=<?= htmlspecialchars($_GET['anime'], ENT_QUOTES, 'UTF-8') ?>&saison=<?= htmlspecialchars($_GET['saison'], ENT_QUOTES, 'UTF-8') ?>&langue=<?= htmlspecialchars($_GET['langue'], ENT_QUOTES, 'UTF-8') ?>" class="a_video_plus">></a>
        <?php } else { ?>
            <a href="index.php?video&episode=<?= htmlspecialchars($_GET['episode'], ENT_QUOTES, 'UTF-8') ?>&anime=<?= htmlspecialchars($_GET['anime'], ENT_QUOTES, 'UTF-8') ?>&saison=<?= htmlspecialchars($_GET['saison'], ENT_QUOTES, 'UTF-8') ?>&langue=<?= htmlspecialchars($_GET['langue'], ENT_QUOTES, 'UTF-8') ?>" class="a_video_plus">></a>
        <?php } ?>
    </div>

    <div class="information_episode">
        <h4 class="numero_episode">Episode <select name="numero_episode" onchange="location.href=''+this.options[this.selectedIndex].value;" id="">
            <option style="display: none;" value=""><?= htmlspecialchars($_GET['episode'], ENT_QUOTES, 'UTF-8') ?></option>
            <?php
            for ($i = 1; $i <= $video->max_episode()['episode']; $i++) { ?>
                <option value="index.php?video&episode=<?= htmlspecialchars($i, ENT_QUOTES, 'UTF-8') ?>&anime=<?= htmlspecialchars($_GET['anime'], ENT_QUOTES, 'UTF-8') ?>&saison=<?= htmlspecialchars($_GET['saison'], ENT_QUOTES, 'UTF-8') ?>&langue=<?= htmlspecialchars($_GET['langue'], ENT_QUOTES, 'UTF-8') ?>"><?= $i ?></option>
            <?php } ?>
        </select></h4>
    </div>
</body>
