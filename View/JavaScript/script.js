


document.addEventListener('click', function(event) {
    var menu = document.getElementById('menu_anime');
    var filter = document.getElementById('filtre');

    if (event.target.closest('#filtre')) {
        filter.classList.toggle('active');
    } else if (!event.target.closest('#menu_anime')) {
        filter.classList.remove('active');
    }
});

