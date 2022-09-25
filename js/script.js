// -----------------------------PARTIE MENU -----------------------------------------


// -----------------------------PARTIE PARCOURS -----------------------------------------

var audioALire = document.getElementsByClassName('audioEcouter'); //l'audio cible
var sectionToDisplay = document.querySelectorAll('.audioContenu'); //Le modal à faire apparaitre
var croixTexte = document.getElementsByClassName("closeTextParcours");
var bouttonSommaire = document.querySelectorAll(".btnSummary");
var i;
function apparaitreTexte(number){
for (i = number; sectionToDisplay[i]; i++) {
  /* On effectue un traitement sur les div */
  sectionToDisplay[i].style.display="inline";
  sectionToDisplay[!i].style.display="none";
}
apparaitreTexte(0);
apparaitreTexte(1);
apparaitreTexte(2);
apparaitreTexte(3);
apparaitreTexte(4);
}
function fermerTexte(number){
  for (i = number; sectionToDisplay[i]; i++) {
  sectionToDisplay[i].style.display="none";
  sectionToDisplay[!i].style.display="initial";
}
fermerTexte(0);
fermerTexte(1);
fermerTexte(2);
fermerTexte(3);
fermerTexte(4);
}



// -----------------------PARTIE PORTFOLIO -----------------------------------------

var imgBoutton = document.getElementsByClassName("portfolionum");
var modal = document.getElementsByClassName("myModal");
var iModal;
function openTheModal(modalNumber){ 
  for (iModal = modalNumber; modal[iModal]; iModal++) {
  
  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var modalImg = document.getElementsByClassName("portfolio");
  
  modal[iModal].style.display = "block";
  modalImg[iModal].src = this.src;
  modal[!iModal].style.display = "none";
}
openTheModal(0);
openTheModal(1);
openTheModal(2);
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");
// When the user clicks on <span> (x), close the modal
function closeTheModal(modalNumber) {
  for (iModal = modalNumber; modal[iModal]; iModal++) {
  modal[iModal].style.display = "none";
  modal[!iModal].style.display = "initial";
}
closeTheModal(0);
closeTheModal(1);
closeTheModal(2);
}