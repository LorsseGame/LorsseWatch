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








