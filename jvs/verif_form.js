// vérification d'un formulaire

function LoginSansInf($champ) {
  $champvaleur = $champ.value;
   //alert(" votre login est" +$champvaleur );
  $maregex = /[\<\>]+/ ;
  if($champvaleur.match($maregex)){ 
    alert(" NOK : Pas de < ou > SVP");
    $champ.focus();
    return false;
  } 
 //$champ.value=$champ.value.toUpperCase(); return true;
}
 function PassCorrect($champ){ 
  $champvaleur = $champ.value;
  $maregexmaj = /[A-Z]+/ ;
  $maregexmin = /[a-z]+/ ;
  $maregexchiffre = /[0-9]+/ ;
  if(!$champvaleur.match($maregexmaj)) { 
    document.getElementById('erreur2').innerHTML = 'NOK : au moins une majuscule SVP'; 
    $champ.focus();
    return false;
  } 
  if(!$champvaleur.match($maregexmin)) { 
    document.getElementById('erreur2').innerHTML = 'NOK : au moins une minuscule SVP'; 
    $champ.focus();
    return false;
  } 
  if(!$champvaleur.match($maregexchiffre)) { 
    document.getElementById('erreur2').innerHTML = 'NOK : au moins un chiffre SVP'; 
    $champ.focus();
    return false;
  } 
    if ($champvaleur.length<6) { 
    document.getElementById('erreur2').innerHTML = 'NOK : au moins 6 caractères SVP'; 
    $champ.focus();
    return false;
  }
  document.getElementById('erreur2').innerHTML = ' '; 
  return true;
}

function NomAvecLettres($champ) {
  $champvaleur = $champ.value;
  $maregex = /[1-9]+/ ;
  if($champvaleur.match($maregex)){ 
    alert(" NOK : Pas de chiffres dans le nom SVP");
    $champ.focus();
    return false;
  } 
 //$champ.value=$champ.value.toUpperCase(); return true;
}
function NumQueChiffres($champ) {
  $champvaleur = $champ.value;
  $maregex = /[0-9]+/ ;
  if(!$champvaleur.match($maregex)){ 
    alert(" NOK : Que des chiffres SVP");
    $champ.focus();
    return false;
  } 
 //$champ.value=$champ.value.toUpperCase(); return true;
}

function MessSansCaractAnormaux($champ){
  $champvaleur = $champ.value;
  //$maregex = /[\<|\>|\@]+/ ;
  $maregex = /[<>]+/ ;
  if($champvaleur.match($maregex)){ 
    alert(" NOK : Pas de balises dans le message SVP");
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

