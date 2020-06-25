
var regie = document.getElementById("regie");
var chillout = document.getElementById("chillout");
var prise1 = document.getElementById("prise1");
var prise2 = document.getElementById("prise2");
var prise3 = document.getElementById("prise3");
const url = new URL(document.location.href);
regie.addEventListener("mouseover", function() {
    document.images['immap'].src = url.protocol + '//' + url.hostname +'/rumble-inn/wp-content/uploads/2020/06/regie.jpg';
    document.images['immap'].classList.add("plan-hover");
});
regie.addEventListener("mouseleave", function() {
    document.images['immap'].src = url.protocol + '//' + url.hostname +'/rumble-inn/wp-content/uploads/2020/05/plan-rumble-inn-studio.jpg';
    document.images['immap'].classList.remove("plan-hover");
});
chillout.addEventListener("mouseover", function() {
    document.images['immap'].src = url.protocol + '//' + url.hostname +'/rumble-inn/wp-content/uploads/2020/06/chillout.jpg';
    document.images['immap'].classList.add("plan-hover");
});
chillout.addEventListener("mouseleave", function() {
    document.images['immap'].src = url.protocol + '//' + url.hostname +'/rumble-inn/wp-content/uploads/2020/05/plan-rumble-inn-studio.jpg';
    document.images['immap'].classList.remove("plan-hover");
});
prise1.addEventListener("mouseover", function() {
    document.images['immap'].src = url.protocol + '//' + url.hostname +'/rumble-inn/wp-content/uploads/2020/06/prise1.jpg';
    document.images['immap'].classList.add("plan-hover");
});
prise1.addEventListener("mouseleave", function() {
    document.images['immap'].src = url.protocol + '//' + url.hostname +'/rumble-inn/wp-content/uploads/2020/05/plan-rumble-inn-studio.jpg';
    document.images['immap'].classList.remove("plan-hover");
});
prise2.addEventListener("mouseover", function() {
    document.images['immap'].src = url.protocol + '//' + url.hostname +'/rumble-inn/wp-content/uploads/2020/06/prise2.jpg';
    document.images['immap'].classList.add("plan-hover");
});
prise2.addEventListener("mouseleave", function() {
    document.images['immap'].src = url.protocol + '//' + url.hostname +'/rumble-inn/wp-content/uploads/2020/05/plan-rumble-inn-studio.jpg';
    document.images['immap'].classList.remove("plan-hover");
});
prise3.addEventListener("mouseover", function() {
    document.images['immap'].src = url.protocol + '//' + url.hostname +'/rumble-inn/wp-content/uploads/2020/06/prise3.jpg';
    document.images['immap'].classList.add("plan-hover");
});
prise3.addEventListener("mouseleave", function() {
    document.images['immap'].src = url.protocol + '//' + url.hostname +'/rumble-inn/wp-content/uploads/2020/05/plan-rumble-inn-studio.jpg';
    document.images['immap'].classList.remove("plan-hover");
});