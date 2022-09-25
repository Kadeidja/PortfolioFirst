// -----------------------------PARTIE MENU -----------------------------------------
var buttonHideMenu = document.getElementsByClassName("navbar-toggler");
var showMenu = document.getElementById("showMenuHidden");
buttonHideMenu.onclick = function () {
  showMenu.style.display = "initial";
}

// -----------------------------PARTIE PARCOURS -----------------------------------------
/* Faire disparaitre les autres cases audios et faire apparaitre le texte avec quelques 
images en diapo... ATTENTION REVOIR LES LIENS DES IMAGES...*/
/*var sectionHidden = document.getElementById("colonneParcours");
var audioALire = document.getElementById("audioEcouter");
var sectionToDisplay = document.getElementById("summaryParcours");
audioALire.onplay = function() {
  sectionHidden.style.display = "none";
  sectionToDisplay.style.display = "block";
}
audioALire.onpause = function() {
  sectionHidden.style.display = "initial";
}*/


/*
var audioALire = document.getElementsByClassName('audioEcouter'); //l'audio cible
var sectionToDisplay = document.getElementsByClassName('audioContenu'); //Le modal à faire apparaitre
var croixTexte = document.getElementsByClassName("closeTextParcours");
var bouttonSommaire = document.getElementsByClassName("btnSummary");


/*
On sélèctionne tout les elements impliqués = 
-la classe des boutons,et la classe des paragraphes -> document.getElementsByClassName
On essaye de selectionner chaque elements des classe un par un
On assigne un ecouteur d'événement aux boutons, en faisant en sorte que chaque boutons
correspondent à son paragraphe
*/
/*
function apparaitreTexte() {
  for (i = 0; i < sectionToDisplay.item.length; i++) {
    console.log(`Cest appuyé` + " " + i);
    console.log(audioALire[i]);
    sectionToDisplay[i].style.display = "inline";
  }
  
  audioALire[i].addEventListener("play", apparaitreTexte, false);
  audioALire[i].addEventListener("pause", disparaitreTexte, false);
  croixTexte[i].addEventListener("click", fermerTexte, false);
}

function fermerTexte() {
  for (i = 0; i < sectionToDisplay.item.length; i++) {
    sectionToDisplay[i].style.display = "none";
    console.log("Le bouton supprimé a été cliqué");
  }
  croixTexte[i].addEventListener("click", fermerTexte, false);
}

function changerSouris() {
  document.body.style.cursor = "pointer";
}

function defaultSouris() {
  document.body.style.cursor = "default";
}




var btns=document.getElementsByClassName("audioContenu");
console.log(Object.keys(btns));
console.log(btns);
console.log("Il y a "+btns.length+" éléments HTML de classe btn dans cette page");
for (var i=0; i<btns.length; i++) {
  btns[i].style.border="solid #A60D0D";
}*/

/*var i;
var bouttonSommaire = document.getElementsByClassName("btnSummary");
console.log(Object.keys(bouttonSommaire));
var sectionToDisplay = document.getElementsByClassName('audioContenu');
console.log(Object.keys(sectionToDisplay));
var sectionCorrespondant = Object.keys(sectionToDisplay);
console.log(sectionCorrespondant);*/


/*function apparaitreTexte() {
  for (i = 0; i < sectionToDisplay.length; ++i) {
    if(bouttonSommaire.item === sectionToDisplay.item){
      sectionToDisplay.item[i].style.display = "inline";}
      console.log("Le bouton ouvrir a été cliqué");
    }}*/
var i = 0;
var bouttonSommaire = document.getElementsByClassName("btnSummary");

var sectionToDisplay = document.getElementsByClassName("audioContenu");
let Tryyy = Object.keys(sectionToDisplay);
let Believe = Object.keys(bouttonSommaire);

/* function apparaitreTexte() {
  for (const element of Tryyy) {
    for (i = 0; i < sectionToDisplay.NodeList.length; ++i) {
      if (element[Tryyy] === bouttonSommaire[Believe]) {
        console.log(element); //Montre l'element selectionner  
        console.log(Tryyy); //Montre tout les elemeents concerné
        sectionToDisplay[element].style.display = "block";
        console.log('it worked');
      }
    }
  }
}
*/
/*var element = Tryyy.entries;
function apparaitreTexte() {
  for (element in Tryyy) {
    for (element = 0; element < sectionToDisplay.length; ++element) {
    sectionToDisplay[element].style.display = "block";
    sectionToDisplay[!element].style.display = "none";
    console.log(element.entries);
   }
  }
}
*/

var element = Tryyy.entries;
function apparaitreTexte() {
  for (element in Tryyy) {
    for (let ei of element) {
      console.log(ei);
        sectionToDisplay[ei].style.display = "block";
        sectionToDisplay[!ei].style.display = "none";
    }
   }
  }

apparaitreTexte();

function fermerTexte() {
  for (i = 0; i < sectionToDisplay.item.length; i++) {
    sectionToDisplay[i].style.display = "none";
    console.log("Le bouton supprimé a été cliqué");
  }
}

// TODO document why this arrow function is empty


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