<?php
$video = new Episode;
$anime = new Anime;

$video->setCode_anime($_GET['anime']);
$video->setEpisode($_GET['episode']);
$video->setSaison($_GET['saison']);
$video->setLangue($_GET['langue']);

$anime->setCode($_GET['anime']);

$plus = $_GET['episode'];
$plus++;
$moins = $_GET['episode'];
$moins--;

if ($_GET['episode'] <= 0) {
    ?>
<script>
    window.location.href = "index.php?video&episode=1&anime="+<?= $_GET['anime'] ?>+"&saison="+<?= $_GET['saison'] ?>;
</script>

<?php


} else if ($_GET['episode'] > $anime->nombre_episode()['Nombre_episode']) {
    ?>
<script>
    window.location.href = "index.php?video&episode=1&anime="+<?= $_GET['anime'] ?>+"&saison="+<?= $_GET['saison'] ?>;
</script>
<?php
}

if ($_GET['anime'] <= 0) {

    ?>
<script>
    window.location.href = "index.php?home";
</script>

<?php
} else if ($_GET['anime'] >  $anime->nombre_anime()['nombre_anime']) {

   ?>
<script>
    window.location.href = "index.php?home";
</script>

<?php

}

if ($_GET['saison'] <= 0) {

    ?>
    <script>
        window.location.href = "index.php?video&episode=<?= $_GET['episode'] ?>&anime=<?= $_GET['anime'] ?>&saison=1";
    </script>
    
    <?php
} else if ($_GET['saison'] > $anime->nombre_saison()['nombre_saison']) {
    ?>
    <script>
        window.location.href = "index.php?video&episode=<?= $_GET['episode'] ?>&anime=<?= $_GET['anime'] ?>&saison=1";
    </script>
    <?php
}


if (empty($_GET['episode'])) {

    ?>
<script>
    window.location.href = "index.php?home";
</script>

<?php

}

if (empty($_GET['anime'])) {

    ?>
<script>
    window.location.href = "index.php?home";
</script>

<?php

}

if (empty($_GET['saison'])) {

    ?>
<script>
    window.location.href = "index.php?home";
</script>

<?php

}

