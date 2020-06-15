var regie = document.getElementById("regie");
var chillout = document.getElementById("chillout");
var imagePlan = document.querySelector('image-map-plan');
const url = new URL(document.location.href);
console.log(url);
regie.addEventListener("mouseover", function () {
    // regie.classList.add("plan-hover");
    document.images['immap'].src = url.protocol + '//' + url.hostname +'/rumble-inn/wp-content/uploads/2020/05/190301_regie.jpg';
    document.images['immap'].classList.add("plan-hover");
});
regie.addEventListener("mouseleave", function () {
    document.images['immap'].src = `${url.protocol}//${url.hostname}/rumble-inn/wp-content/uploads/2020/05/plan-rumble-inn-studio.jpg`;
    document.images['immap'].classList.remove("plan-hover");
});
chillout.addEventListener("mouseover", function () {
    document.images['immap'].src = url.protocol + '//' + url.hostname +'/rumble-inn/wp-content/uploads/2020/06/chillout-studio.jpg';
    document.images['immap'].classList.add("plan-hover");
});
chillout.addEventListener("mouseleave", function () {
    // imagePlan.classList.remove("plan-hover");
    document.images['immap'].src = `${url.protocol}//${url.hostname}/rumble-inn/wp-content/uploads/2020/05/plan-rumble-inn-studio.jpg`;7
    document.images['immap'].classList.remove("plan-hover");

});