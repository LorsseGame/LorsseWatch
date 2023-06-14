document.addEventListener('click', function (event) {
    var menu = document.getElementById('menu_anime');
    var filter = document.getElementById('filtre');

    if (event.target.closest('#filtre')) {
        filter.classList.toggle('active');
    } else if (!event.target.closest('#menu_anime')) {
        filter.classList.remove('active');
    }
});



function previewFile() {
    var preview = document.querySelector('#preview img');
    var file = document.querySelector('input[type=file]').files[0];
    var reader = new FileReader();

    reader.addEventListener("load", function () {
        preview.src = reader.result;
        document.querySelector('#conteneurPreview').style.display = 'flex'
        document.querySelector('#preview').style.display = 'flex';
    }, false);

    if (file) {
        reader.readAsDataURL(file);
    }
}

function cancelImage() {
    document.querySelector('#preview').style.display = 'none';

}

document.getElementById('formDesactiverAnime').addEventListener('submit', function (e) {
    e.preventDefault(); // Empêche l'envoi du formulaire par défaut

    // Envoyer le formulaire via AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Le formulaire a été envoyé avec succès
            // Afficher la div avec la transition
            document.getElementById('notification').style.display = 'flex';
            setTimeout(function () {
                // Masquer la div après 5 secondes
                document.getElementById('notification').style.display = 'none';
            }, 2000);
        }
    };
    xhr.send('desactiverAnime=1');
});


document.getElementById('formReactiverAnime').addEventListener('submit', function (e) {
    e.preventDefault(); // Empêche l'envoi du formulaire par défaut

    // Envoyer le formulaire via AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Le formulaire a été envoyé avec succès
            // Afficher la div avec la transition
            document.getElementById('notificationReactiver').style.display = 'flex';
            setTimeout(function () {
                // Masquer la div après 5 secondes
                document.getElementById('notificationReactiver').style.display = 'none';
            }, 2000);
        }
    };
    xhr.send('reactiverAnime=0');
});


function supprimerAnime() {
    document.querySelector('#confirmationDelete').style.display = 'flex'
}

function cancelConfirmDelete() {
    document.querySelector('#confirmationDelete').style.display = 'none';
}

// Récupérer le bouton et créer l'image
var addButton = document.getElementById("addButton");
var image = document.createElement("img");
image.src = "./image/iconWatchlist.svg";

// Vérifier la largeur de la fenêtre lors du chargement de la page
if (window.innerWidth <= 1024) {
    replaceButtonContent();
}

// Ajouter un écouteur d'événement pour détecter le redimensionnement de la fenêtre
window.addEventListener("resize", function () {
    if (window.innerWidth <= 1024) {
        replaceButtonContent();
    } else {
        restoreButtonContent();
    }
});

// Fonction pour remplacer le contenu du bouton par l'image
function replaceButtonContent() {
    addButton.innerText = ""; // Supprimer le texte du bouton
    addButton.appendChild(image); // Ajouter l'image au bouton
}

// Fonction pour restaurer le contenu original du bouton
function restoreButtonContent() {
    addButton.innerText = "Ajouter à la watchlist"; // Restaurer le texte du bouton
    addButton.removeChild(image); // Supprimer l'image du bouton
}




window.addEventListener('DOMContentLoaded', function () {
    const informationAnimeDiv = document.querySelector('.information_anime');
    const h1ChoixTitre = document.querySelector('.h1_choix_titre');
    const selectElements = document.querySelectorAll('.select_element');

    function rearrangeElements() {
        if (window.innerWidth <= 1024) {
            // Insérer le titre à l'intérieur de la div .information_anime après le premier select
            informationAnimeDiv.insertBefore(h1ChoixTitre, informationAnimeDiv);
        } else {
            // Remettre le titre à sa position initiale
            informationAnimeDiv.insertBefore(h1ChoixTitre, informationAnimeDiv.querySelector('.select_saison_choix'));
        }

        // Réorganiser les éléments select en inversant leur ordre
        for (let i = selectElements.length - 1; i >= 0; i--) {
            informationAnimeDiv.insertBefore(selectElements[i], h1ChoixTitre.nextSibling);
        }
    }

    window.addEventListener('resize', rearrangeElements);

    rearrangeElements(); // Appeler la fonction une première fois au chargement de la page pour vérifier la disposition initiale
});










