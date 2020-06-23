let logoJfx = document.getElementById('menu-item-20326');
// let logoJfx = document.getElementById('menu-item-20510'); // a changer pour en ligne
let subMenu = document.getElementById('sub-menu-jfx');

// logoJfx.addEventListener("click", function(e){
//     e.preventDefault();
//     console.log('test');
//     subMenu.classList.toggle("display-block");
// });
logoJfx.addEventListener("click", function(element){
    element.preventDefault();
    console.log('test');
    subMenu.classList.toggle("dis-block");
});

