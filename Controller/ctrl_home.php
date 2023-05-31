<?php

$image = new Anime;
$image->setCode(0);

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Récupérer les données du formulaire
  if (isset($_POST['send_slider_admin'])) {
    // Vérifier si le champ change_slider1 est rempli
    if (isset($_POST['change_slider1']) && !empty($_POST['change_slider1'])) {
      // Stocker la valeur du champ change_slider1 dans le $_SESSION['slider1']
      $_SESSION['slider1'] = $_POST['change_slider1'];
    } else {
      echo "erreur slider 1 ";
    }
    // Vérifier si le champ change_slider2 est rempli
    if (isset($_POST['change_slider2']) && !empty($_POST['change_slider2'])) {
      // Stocker la valeur du champ change_slider2 dans le $_SESSION['slider2']
      $_SESSION['slider2'] = $_POST['change_slider2'];
    } else {
      echo "erreur slider 2 ";
    }
    // Vérifier si le champ change_slider3 est rempli
    if (isset($_POST['change_slider3']) && !empty($_POST['change_slider3'])) {
      // Stocker la valeur du champ change_slider3 dans le $_SESSION['slider3']
      $_SESSION['slider3'] = $_POST['change_slider3'];
    } else {
      echo "erreur slider 3 ";
    }
  }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(isset($_POST['send_populaire_admin'])){
        // Vérifier si le champ populaire est rempli
        if (isset($_POST['populaire']) && !empty($_POST['populaire'])) {
          // Stocker la valeur du champ populaire dans le $_SESSION['populaire']
          $_SESSION['populaire'] = $_POST['populaire'];
        } else {
          echo "erreur populaire ";
        }

  }
}
?>