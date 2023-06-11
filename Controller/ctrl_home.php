<?php
$image = new Anime;
$image->setCode(0);
$slider = new Slider;
$populaire = new Populaire;

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