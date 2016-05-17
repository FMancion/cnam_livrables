// script d'affichage/masquage d'un résumé

function affichermasquer($monbouton) { 
  var $maligne = document.getElementById('amasquer');
  if ($maligne.style.display == 'none'){
      $maligne.style.display = 'block'; $monbouton.innerHTML = 'Masquer'.toUpperCase();
  } else { $maligne.style.display = 'none';  $monbouton.innerHTML = 'Afficher'.toUpperCase(); }

}