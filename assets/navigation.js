/* global rumbleinnBurger*/
/**
 * Theme functions file.
 *
 */
window.onscroll = function() {
    stickyToScroll();
};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function stickyToScroll() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}
let burger = document.getElementById("burger");
    let navigation = document.getElementById("navigation");
    let burger1 = document.getElementById("burger1");
    let burger2 = document.getElementById("burger2");
    let burger3 = document.getElementById("burger3");
    burger.addEventListener("click", function() {
        navigation.classList.toggle("display-flex");
        burger.classList.toggle("bg-none");
        burger1.classList.toggle("isopen-burger1");
        burger2.classList.toggle("isopen-burger2");
        burger3.classList.toggle("isopen-burger3");
    });