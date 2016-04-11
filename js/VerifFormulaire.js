// script de verifications sur les champs du formulaire

function LoginSansInf($champ){
  $champvaleur = $champ.value;
   //alert(" votre login est" +$champvaleur );
  $maregex = /[<]+/ ;
  if($champvaleur.match($maregex)){ 
    //alert(" NOK : Pas de caractères inf dans le login SVP");
    document.getElementById('erreur1').innerHTML = 'NOK : Pas de caractères inf dans le login SVP'; 
    $champ.focus();
    return false;
  } 
    document.getElementById('erreur1').innerHTML = ' ';
    return true;
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

 function MatchPass($champ){
  $pass1 = formulaire.password1.value;
  //alert(" votre pass1 est " +$pass1 );
  $pass2 = $champ.value;
  //alert(" votre pass2 est " +$pass2 );
    if( $pass2 != $pass1 ){ 
    document.getElementById('erreur3').innerHTML = 'NOK : les deux password ne match pas';
    $champ.focus();
    return false;
  }
  document.getElementById('erreur3').innerHTML = ' ';
  return true;
} 

function verifForm(formulaire) {
   //alert(" verif complete du formulaire ");
  if  ( ! LoginSansInf(formulaire.login) ) { document.getElementById('erreur4').innerHTML = (" pas bien le login!!"); return false ;} 
    if  ( ! PassCorrect(formulaire.password1) ) { document.getElementById('erreur4').innerHTML = (" pas bien le pass1!!"); return false ;} 
      if  ( ! MatchPass(formulaire.password2) ) { document.getElementById('erreur4').innerHTML = (" pas bien le pass2!!"); return false ;} 

    document.getElementById('erreur4').innerHTML = ' ';
    return true ;
}
