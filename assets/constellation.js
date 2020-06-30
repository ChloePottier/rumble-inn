// let logoJfx = document.getElementById('logo-jfx');
let logoJfx = document.getElementById('menu-item-20852');
// let logoJfx = document.getElementById('menu-item-20510'); // a changer pour en ligne
let subMenu = document.getElementById('sub-menu-jfx');
logoJfx.addEventListener("click", function(element){
    console.log('click');
    element.preventDefault();
    subMenu.classList.toggle("dis-block");
});

