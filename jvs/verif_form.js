// vérification d'un formulaire

function NomAvecLettres($champ) {
  $champvaleur = $champ.value;
  $maregex = /[1-9]+/ ;
  if($champvaleur.match($maregex)){ 
    alert(" NOK : Pas de chiffres dans le nom SVP");
    $champ.focus();
    return false;
  } 
$champ.value=$champ.value.toUpperCase(); return true;
}
function MessSansCaractAnormaux($champ){
  $champvaleur = $champ.value;
  $maregex = /[\<|\>|\@]+/ ;
  if($champvaleur.match($maregex)){ 
    alert(" NOK : Pas de caractères spéciaux dans le message SVP");
    $champ.focus();
    return false;
  }
  return true;
}
function TelSansLettres($champ) {
  $champvaleur = $champ.value;
  $maregex = /[a-zA-Z]+/ ;
  if($champvaleur.match($maregex)){ 
    alert(" NOK : Pas de lettres dans le tel SVP");
    $champ.focus();
    return false;
  }
  return true;
}
function BonFormatMail($champ) {
  $champvaleur = $champ.value;
  $maregex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,6}$/ ;
  if(!$champvaleur.match($maregex)){ 
    alert("format mail :exemple@domaine.fr svp!");
    $champ.focus();
    return false;
  }
 return true;
}
function verifForm(formulaire) {
  var ok = true;
  ok = ok && NomAvecLettres(formulaire.nom);
  ok = ok && MessSansCaractAnormaux(formulaire.message);
  ok = ok && TelAvecChiffres(formulaire.tel);
  ok = ok && BonFormatMail(formulaire.email);
  return ok;
}

