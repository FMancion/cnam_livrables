

// script d affichage de l'avatar choisi dans select


var valueToImage = {
  "tintin.png" : "../img/tintin.png",
  "tournesol.png" : "../img/tournesol.png",
  "haddock.png" : "../img/haddock.png" , // pas de virgule ici
  "milou.png" : "../img/milou.png", // pas de virgule ici
  "castafiore.png" : "../img/castafiore.png" ,// pas de virgule ici
  "no-ava.png" : "../img/no-ava.png" // pas de virgule ici
};
 
function AffAva(select) {
  var valeur = select.options[select.selectedIndex].value;
  document.getElementById("avatar3").src = valueToImage[valeur];
}
