<body class="body_home">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block image_slide1  " src="<?= $image->affichage($_SESSION['slider1'])['image_fond'] ?>" alt="First slide">
        <img class="image_annonce1" src="<?= $image->affichage($_SESSION['slider1'])['image_home'] ?>" alt="">
        <img class="titre_slide1" src="<?= $image->affichage($_SESSION['slider1'])['image_titre'] ?>" alt="">
        <a  href="index.php?choix&code=<?= $_SESSION['slider1'] ?>&saison=1&langue=vostfr"><button class="button_slide">Regarder</button></a>
      </div>
      <div class="carousel-item">
        <img class="d-block image_slide2 " src="<?= $image->affichage($_SESSION['slider2'])['image_fond'] ?>" alt="Second slide">
        <img class="image_annonce1" src="<?= $image->affichage($_SESSION['slider2'])['image_home'] ?>" alt="">
        <img class="titre_slide2" src="<?= $image->affichage($_SESSION['slider2'])['image_titre'] ?>" alt="">
        <a  href="index.php?choix&code=<?= $_SESSION['slider2'] ?>&saison=1&langue=vostfr"><button class="button_slide">Regarder</button></a>
      </div>
      <div class="carousel-item">
        <img class=" d-block image_slide3 " src="<?= $image->affichage($_SESSION['slider3'])['image_fond'] ?>" alt="Third slide">
        <img class="image_annonce1" src="<?= $image->affichage($_SESSION['slider3'])['image_home'] ?>" alt="">
        <img class="titre_slide1" src="<?= $image->affichage($_SESSION['slider3'])['image_titre'] ?>" alt="">
        <a  href="index.php?choix&code=<?= $_SESSION['slider3'] ?>&saison=1&langue=vostfr"><button class="button_slide">Regarder</button></a>
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
      <div class="div_image_anime_<?= $i ?>"><a alt="<?= $i ?>" href="index.php?choix&code=<?= $i ?>&saison=1&langue=vostfr" class="a_anime1"><img class="image_anime1" src="<?php echo $image->information_anime()['image_home']  ?>" alt=""></a></div>
    <?php } ?>
  </div>

  <h3 class="le_plus_popolaire" style="color: white;">Le plus populaire</h3>

  <div class="div_populaire">
    <img src="<?= $image->affichage($_SESSION['populaire'])['image_home'] ?>" class="populaire" alt="">
    <div class="populaire_droite">
      <div class="conteneur_titre_populaire">
        <img src="<?= $image->affichage($_SESSION['populaire'])['image_titre'] ?>" class="image_titre_populaire" alt="">
      </div>

      <div class="div_description_populaire">
        <p class="description_populaire"></p>
      </div>

      <div class="conteneur_btn_regarder">
        <a href="index.php?choix&code=<?= $_SESSION['populaire'] ?>&saison=1&langue=vostfr"><button class="inp_regarder_home">Regarder</button></a>
      </div>

    </div>
  </div>





</body>