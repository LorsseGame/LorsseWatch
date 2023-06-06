document.addEventListener('click', function(event) {
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

    reader.addEventListener("load", function() {
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
  

  
