// script d affichage ou masquage du mot de passe


function afficher($champ) { 
  document.getElementById('password1').type = this.checked ? 'password' : 'text'
}

function masquer($champ) { 
  document.getElementById('password1').type = this.checked ? 'text' : 'password'
}