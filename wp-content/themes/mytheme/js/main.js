// Initialisation de varibles

let sidebarMobile = document.getElementById('sidebar');
let toggleBlock = document.getElementById('menu-hamburger');

// Si le visiteur clique sur le menu hamburger, basculer sur un bloc qui est superposé

toggleBlock.addEventListener('click', function () {
    sidebarMobile.classList.toggle('toggle');
})