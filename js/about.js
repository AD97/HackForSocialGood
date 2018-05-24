// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   if (n > slides.length) {slideIndex = 1}    
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";  
//   }
//   slides[slideIndex-1].style.display = "block";
// }

// alert("Hello!");
var optimism = document.getElementById("optimism");
var collab = document.getElementById("collab");
var human = document.getElementById("human");
var tech = document.getElementById("tech");
var community = document.getElementById("community");
var autonomy = document.getElementById("autonomy");
var trust = document.getElementById("trust");
var simple = document.getElementById("simple");

optimism.style.display = "none";
collab.style.display = "none";
human.style.display = "none";
tech.style.display = "none";
community.style.display = "none";
autonomy.style.display = "none";
trust.style.display = "none";
simple.style.display = "none";

function f_optimism() {
    if (optimism.style.display === "none") {
        optimism.style.display = "block";
    } else {
        optimism.style.display = "none";
    }
}

function f_collab() {
    if (collab.style.display === "none") {
        collab.style.display = "block";
    } else {
        collab.style.display = "none";
    }
}

function f_human() {
    if (human.style.display === "none") {
        human.style.display = "block";
    } else {
        human.style.display = "none";
    }
}

function f_tech() {
    if (tech.style.display === "none") {
        tech.style.display = "block";
    } else {
        tech.style.display = "none";
    }
}

function f_community() {
    if (community.style.display === "none") {
        community.style.display = "block";
    } else {
        community.style.display = "none";
    }
}

function f_autonomy() {
    if (autonomy.style.display === "none") {
        autonomy.style.display = "block";
    } else {
        autonomy.style.display = "none";
    }
}

function f_trust() {
    if (trust.style.display === "none") {
        trust.style.display = "block";
    } else {
        trust.style.display = "none";
    }
}

function f_simple() {
    if (simple.style.display === "none") {
        simple.style.display = "block";
    } else {
        simple.style.display = "none";
    }
}