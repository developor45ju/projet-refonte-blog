// Initialisation de varibles

let sidebarMobile = document.getElementById('sidebar');
let toggleBlock = document.getElementById('menu-hamburger');

toggleBlock.addEventListener('click', function () {
    sidebarMobile.classList.toggle('toggle');
})