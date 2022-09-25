// -----------------------------PARTIE MENU -----------------------------------------
var buttonHideMenu = document.getElementsByClassName("navbar-toggler");
var showMenu = document.getElementById("showMenuHidden");
buttonHideMenu.onclick = function () {
  showMenu.style.display = "initial";
}

// -----------------------------PARTIE PARCOURS -----------------------------------------
/* Faire disparaitre les autres cases audios et faire apparaitre le texte avec quelques 
images en diapo... ATTENTION REVOIR LES LIENS DES IMAGES...*/

var audioALire = document.getElementsByClassName('audioEcouter'); //l'audio cible
var sectionToDisplay = document.querySelectorAll('.audioContenu'); //Le modal à faire apparaitre
var croixTexte = document.getElementsByClassName("closeTextParcours");
var bouttonSommaire = document.querySelectorAll(".btnSummary");
var i;
var btnSumKey = bouttonSommaire.keys();
console.log(sectionToDisplay);
console.log(toString(sectionToDisplay.values));
function apparaitreTexte() {  
for (var item of sectionToDisplay.keys()) {
  console.log(item);
  sectionToDisplay[item].style.display = "inline";
  //sectionToDisplay[!item].style.display = "none";
  console.log("Le bouton apparaitre " + item.valueOf(bouttonSommaire) + " a été cliqué");
}
bouttonSommaire[i].addEventListener("click", apparaitreTexte, false);
}

function fermerTexte() {
    for (var item of sectionToDisplay.keys()) {
    sectionToDisplay[item].style.display = "none";
    console.log("Le bouton supprimé  " + item.valueOf() + "  a été cliqué");
  }
  croixTexte[item].addEventListener("click", fermerTexte, false);
}


function changerSouris() {
  document.body.style.cursor = "pointer";
}

function defaultSouris() {
  document.body.style.cursor = "default";
}

// -----------------------PARTIE PORTFOLIO -----------------------------------------

// -------------------------------------------------------MODAL N°1
var imgBoutton = document.getElementById("portfolionum1");
var modal1 = document.getElementById("myModal");
imgBoutton.onclick = function openTheModal1() {
  
  var modalImg = document.getElementById("portfolio01");
  
  modal1.style.display = "block";
  modalImg.src = this.src;
}
// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];
// When the user clicks on <span> (x), close the modal
span1.onclick = function () {
  modal1.style.display = "none";
};

// -------------------------------------------------------MODAL N°2
var imgBoutton2 = document.getElementById("portfolionum2");
var modal2 = document.getElementById("myModal2");
imgBoutton2.onclick = function openTheModal2() {
  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var modalImg = document.getElementById("portfolio02");
  modal2.style.display = "block";
  modalImg.src = this.src;
}
// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close")[1];
// When the user clicks on <span> (x), close the modal
span2.onclick = function () {
  modal2.style.display = "none";
};


// -------------------------------------------------------MODAL N°3
var imgBoutton3 = document.getElementById("portfolionum3");
var modal3 = document.getElementById("myModal3");
imgBoutton3.onclick = function openTheModal3() {
  
  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var modalImg = document.getElementById("portfolio03");
  
  modal3.style.display = "block";
  modalImg.src = this.src;
}
// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close")[2];
// When the user clicks on <span> (x), close the modal
span3.onclick = function () {
  modal3.style.display = "none";
};