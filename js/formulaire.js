;(function(){
})
function onClickbtnDiscovery(e) {
    // Rechercher le Formulaire 
    let target1 = document.getElementById('target1')
        // Si il est caché, rendre visible.
    if (target1.style.display == 'none') {
        target1.style.display = 'block';
        // Animation d'entrée.
        target1.classList.add('animate__fadeInUp');
    } else {
        target1.style.display = 'none'; // Si il est visible rendre caché
    }
}

let btnDiscovery;
btnDiscovery = document.getElementById('btnDiscovery');

btnDiscovery.addEventListener('click', onClickbtnDiscovery );