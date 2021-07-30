const url = new URL(document.location.href);
if(document.getElementById("regie") === true){
    var regie = document.getElementById("regie");
    regie.addEventListener("mouseover", function() {
        document.images['immap'].src = url.protocol + '//' + url.hostname +'/wp-content/uploads/2020/06/regie.jpg';
        document.images['immap'].classList.add("plan-hover");
    });
    regie.addEventListener("mouseleave", function() {
        document.images['immap'].src = url.protocol + '//' + url.hostname +'/wp-content/uploads/2020/05/plan-rumble-inn-studio.jpg';
        document.images['immap'].classList.remove("plan-hover");
    });
}
if(document.getElementById("chillout") === true){
    var chillout = document.getElementById("chillout");
    chillout.addEventListener("mouseover", function() {
        document.images['immap'].src = url.protocol + '//' + url.hostname +'/wp-content/uploads/2020/06/chillout.jpg';
        document.images['immap'].classList.add("plan-hover");
    });
    chillout.addEventListener("mouseleave", function() {
        document.images['immap'].src = url.protocol + '//' + url.hostname +'/wp-content/uploads/2020/05/plan-rumble-inn-studio.jpg';
        document.images['immap'].classList.remove("plan-hover");
    });
}
if(document.getElementById("prise1") === true){
    var prise1 = document.getElementById("prise1");
    prise1.addEventListener("mouseover", function() {
        document.images['immap'].src = url.protocol + '//' + url.hostname +'/wp-content/uploads/2020/06/prise1.jpg';
        document.images['immap'].classList.add("plan-hover");
    });
    prise1.addEventListener("mouseleave", function() {
        document.images['immap'].src = url.protocol + '//' + url.hostname +'/wp-content/uploads/2020/05/plan-rumble-inn-studio.jpg';
        document.images['immap'].classList.remove("plan-hover");
    });
}
if(document.getElementById("prise2") === true){
    var prise2 = document.getElementById("prise2");
    prise2.addEventListener("mouseover", function() {
        document.images['immap'].src = url.protocol + '//' + url.hostname +'/wp-content/uploads/2020/06/prise2.jpg';
        document.images['immap'].classList.add("plan-hover");
    });
    prise2.addEventListener("mouseleave", function() {
        document.images['immap'].src = url.protocol + '//' + url.hostname +'/wp-content/uploads/2020/05/plan-rumble-inn-studio.jpg';
        document.images['immap'].classList.remove("plan-hover");
    });
}
if(document.getElementById("prise3") === true){
    var prise3 = document.getElementById("prise3");
    prise3.addEventListener("mouseover", function() {
        document.images['immap'].src = url.protocol + '//' + url.hostname +'/wp-content/uploads/2020/06/prise3.jpg';
        document.images['immap'].classList.add("plan-hover");
    });
    prise3.addEventListener("mouseleave", function() {
        document.images['immap'].src = url.protocol + '//' + url.hostname +'/wp-content/uploads/2020/05/plan-rumble-inn-studio.jpg';
        document.images['immap'].classList.remove("plan-hover");
    });
}







