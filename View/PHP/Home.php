<body class="body_home">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> <!-- Indicateur du premier slide -->
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> <!-- Indicateur du deuxième slide -->
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> <!-- Indicateur du troisième slide -->
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block image_slide1  " src="<?= $image->affichage($_SESSION['slider1'])['image_fond'] ?>" alt="First slide"> <!-- Image du premier slide -->
        <img class="image_annonce1" src="<?= $image->affichage($_SESSION['slider1'])['image_home'] ?>" alt=""> <!-- Image de l'annonce du premier slide -->
        <img class="titre_slide1" src="<?= $image->affichage($_SESSION['slider1'])['image_titre'] ?>" alt=""> <!-- Titre du premier slide -->
        <a  href="index.php?choix&code=<?= $_SESSION['slider1'] ?>&saison=1&langue=vostfr"><button class="button_slide">Regarder</button></a> <!-- Bouton pour regarder le contenu du premier slide -->
      </div>
      <div class="carousel-item">
        <img class="d-block image_slide2 " src="<?= $image->affichage($_SESSION['slider2'])['image_fond'] ?>" alt="Second slide"> <!-- Image du deuxième slide -->
        <img class="image_annonce1" src="<?= $image->affichage($_SESSION['slider2'])['image_home'] ?>" alt=""> <!-- Image de l'annonce du deuxième slide -->
        <img class="titre_slide2" src="<?= $image->affichage($_SESSION['slider2'])['image_titre'] ?>" alt=""> <!-- Titre du deuxième slide -->
        <a  href="index.php?choix&code=<?= $_SESSION['slider2'] ?>&saison=1&langue=vostfr"><button class="button_slide">Regarder</button></a> <!-- Bouton pour regarder le contenu du deuxième slide -->
      </div>
      <div class="carousel-item">
        <img class=" d-block image_slide3 " src="<?= $image->affichage($_SESSION['slider3'])['image_fond'] ?>" alt="Third slide"> <!-- Image du troisième slide -->
        <img class="image_annonce1" src="<?= $image->affichage($_SESSION['slider3'])['image_home'] ?>" alt=""> <!-- Image de l'annonce du troisième slide -->
        <img class="titre_slide1" src="<?= $image->affichage($_SESSION['slider3'])['image_titre'] ?>" alt=""> <!-- Titre du troisième slide -->
        <a  href="index.php?choix&code=<?= $_SESSION['slider3'] ?>&saison=1&langue=vostfr"><button class="button_slide">Regarder</button></a> <!-- Bouton pour regarder le contenu du troisième slide -->
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <h3 class="dernier_sortie" style="color: white;">Dernières sorties</h3>
  <div class="conteneur_anime">
    <?php for ($i = $image->calcule_anime()['Code_animeMax']; $i >= $image->calcule_anime()['Code_anime']; $i--) {
      $image->setCode($i)  ?>
      <div class="div_image_anime_<?= $i ?>"><a alt="<?= $i ?>" href="index.php?choix&code=<?= $i ?>&saison=1&langue=vostfr" class="a_anime1"><img class="image_anime1" src="<?php echo $image->information_anime()['image_home']  ?>" alt=""></a></div> <!-- Affichage des images des dernières sorties avec un lien pour voir les détails -->
    <?php } ?>
  </div>

  <h3 class="le_plus_popolaire" style="color: white;">Le plus populaire</h3>

  <div class="div_populaire">
    <img src="<?= $image->affichage($_SESSION['populaire'])['image_home'] ?>" class="populaire" alt=""> <!-- Image de l'anime le plus populaire -->
    <div class="populaire_droite">
      <div class="conteneur_titre_populaire">
        <img src="<?= $image->affichage($_SESSION['populaire'])['image_titre'] ?>" class="image_titre_populaire" alt=""> <!-- Titre de l'anime le plus populaire -->
      </div>

      <div class="div_description_populaire">
        <p class="description_populaire"></p> <!-- Description de l'anime le plus populaire -->
      </div>

      <div class="conteneur_btn_regarder">
        <a href="index.php?choix&code=<?= $_SESSION['populaire'] ?>&saison=1&langue=vostfr"><button class="inp_regarder_home">Regarder</button></a> <!-- Bouton pour regarder l'anime le plus populaire -->
      </div>

    </div>
  </div>

</body>
