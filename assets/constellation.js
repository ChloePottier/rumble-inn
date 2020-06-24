let logoJfx = document.getElementById('menu-item-20326');
// let logoJfx = document.getElementById('menu-item-20510'); // a changer pour en ligne
let subMenu = document.getElementById('sub-menu-jfx');
logoJfx.addEventListener("click", function(element){
    element.preventDefault();
    subMenu.classList.toggle("dis-block");
});

