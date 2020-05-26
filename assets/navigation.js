/* global rumbleinnBurger*/
/**
 * Theme functions file.
 *
 */

window.onscroll = function () {
    stickyToScroll()
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function stickyToScroll() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}
let burger = document.getElementById("burger");
let navigation = document.getElementById("navigation");
let burger1 = document.getElementById("burger1");
let burger2 = document.getElementById("burger2");
let burger3 = document.getElementById("burger3");
burger.addEventListener("click", function () {
    navigation.classList.toggle("display-flex");
    burger.classList.toggle("bg-none");
    burger1.classList.toggle("isopen-burger1");
    burger2.classList.toggle("isopen-burger2");
    burger3.classList.toggle("isopen-burger3");
});

// let menu = document.getElementById("nav-top");
// menu.addEventListener("click", function () {
//     e.preventDefault();
//     console.log('cliqué')
// });

// Get the container element
var btnContainer = document.getElementById("nav-top");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByTagName("a");
console.log(btns);
// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    e.preventDefault();
    var current = document.classList.add("active");
    
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
} 