// let logoJfx = document.getElementById('logo-jfx');
let logoJfx = document.getElementById('menu-item-20852');
let subMenu = document.getElementById('sub-menu');
logoJfx.addEventListener("click", function(element){
    console.log('click');
    subMenu.classList.toggle("dis-none");
    element.preventDefault();    
});

