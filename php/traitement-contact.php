	<!DOCTYPE html>
<html lang="fr">

<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("TRAITEMENT Contact","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
  
<body> 
 <div id="conteneur">  
 
<?php   
/* declaration des variables */
// ***** sécurisation PHP *****/
 $nom = htmlspecialchars ($_GET['nom'],ENT_QUOTES);
 $nom = strtoupper($nom);
 $sujet = $_GET['sujet'];
 //$message = mysqli_real_escape_string ($_GET['message']);
 $message = htmlspecialchars ( $_GET['message'],ENT_QUOTES ) ;
 $email = $_GET['email'];
 $tel = $_GET['tel'];
 $malargeur = 0 ;
?>

<article>

<?php
//$requete = ' INSERT INTO "message" ("nom", "texte", "mail") VALUES ( "$nom","$message", "$email") ' ; 
//$requete = ' INSERT INTO message("nom", "texte", "mail" ) VALUES ( "$nom" , "$message" , "$email") '; 

$atom   = '[-a-z0-9!#$%&\'*+\\/=?^_`{|}~]' ;   // caractères autorisés avant l'arobase
$domain = '([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)' ; // caractères autorisés après l'arobase (nom de domaine)
                               
$regex = '/^' . $atom . '+' .   // Une ou plusieurs fois les caractères autorisés avant l'arobase
'(\.' . $atom . '+)*' .         // Suivis par zéro point ou plus
                                // séparés par des caractères autorisés avant l'arobase
'@' .                           // Suivis d'un arobase
'(' . $domain . '{1,63}\.)+' .  // Suivis par 1 à 63 caractères autorisés pour le nom de domaine
                                // séparés par des points
$domain . '{2,63}$/i' ;          // Suivi de 2 à 63 caractères autorisés pour le nom de domaine

//$regex_nom = ' ^[\w$@%*+\-_!]{8,15}$ ' ;   // regex nom , pas dechiffres 
$regex_nom="#^[a-zA-Z0-9]$#" ;
$regex_message = "#[a-zA-Z0-9]#" ;  // regex message, pas de < ni > 
$regex_password='^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$ ' ;
$regex_mail = '/^' .$atom. '+' . '(\.' .$atom. '+)*' .'@' . '(' .$domain. '{1,63}\.)+' .$domain. '{2,63}$/i' ;
$regex_tel = "#^0[1-68]([-. ]?[0-9]{2}){4}$#" ;


	
// test de l'adresse e-mail
 //if ( (preg_match("#[a-zA-Z0-9]#" , $nom)) && (preg_match("#^(?=.*\d)(?=.*[a-zA-Z]).{4,8}#", $message)) && (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) ) {
	
		
	//if (  (preg_match($regex_nom , $nom)) && (preg_match($regex_message , $message)) &&
		//		(preg_match($regex_mail,$email)) && (preg_match($regex_tel,$tel))) {
			
	if (isset($nom) && isset($sujet) && isset($message) && isset($email) ) { ?>
	
	  tout est valide, on peut lancer la requete en base </br>
	  <?php $requete = " INSERT INTO `message` (`nom`, `texte`, `tel`, `mail` ) VALUES ( '$nom' , '$message' , '$tel', '$email') " ; 
	  require("inc/connexion.inc.php"); requetebdd($requete) ; ?>
	  
	  <h1> Votre message a bien été envoyé en base : </h1> 
	  <?php  } else  { ?> 
      un champ n'est pas valide, la requete sql n'est pas lancée 
	  <body onLoad="alert(\'les valeurs du formulaire ne sont pas correctes \')">
	
	  <?php header ('location: ./contact.php');  exit ;  }  ?>
	  
 <p> ma requete d'insertion : <br/> "<?php echo $requete; ?>" </p> 

<?php
//date_default_timezone_set('America/Montreal') ;	
date_default_timezone_set('Europe/Paris') ;
$date = date("d-m-Y");
$heure = date("H:i:s");
?>
  
<TABLE > 
  <!-- <CAPTION> Résultats du formulaire </CAPTION>  -->
  <TR> <TH> date et heure réception </TH>  <TD>  <?php  echo "le $date à $heure"?> </TD>  </TR> 
  <TR> <TH> nature de la demande </TH>  <TD>  <?php  echo $sujet ?> </TD>   </TR> 
  <TR> <TH> NOM </TH>  <TD> <?php echo $nom ?></TD>   </TR> 
  <TR> <TH> MESSAGE HTML</TH> <TD> <?php echo $message ?></TD>   </TR> 
  <TR> <TH> MESSAGE SQL</TH> <TD> <?php echo htmlentities ($message) ?></TD>   </TR> 
  <TR> <TH> MAIL </TH>  <TD> <?php echo $email ?></TD>   </TR> 
  <TR> <TH> TEL </TH>  <TD> <?php echo $tel ?></TD>   </TR> 
  <TR> <TH> LARGEUR PAGE en px (temps réel)</TH> <TD id="largeurPage" > <?php echo "$malargeur"  ?> </TD> </TR> 
</TABLE> 

<button id="changecouleur" onClick='changeCouleur("largeurPage")'> change couleur px</button>
<button id="remettrecouleur" onClick='remettreCouleur("largeurPage")'> reset couleur px</button>

</article>

<article>
  <button onclick="affichermasquer(this)">faire apparaitre ou enlever lien du formulaire</button>
  <p id="amasquer"><a href ="./contact.php" alt="mystillus contact">retour formulaire</a></p>
</article>

	<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("traitementcontact"); 
?>
</footer>

</div>
    <script src="../jvs/afficheheure.js"></script>
    <script src="../jvs/timeout.js"></script>
    <script src="../jvs/largeurpage.js"></script>
	<script src="../jvs/changecouleurcellule.js"></script>
    <script src="../jvs/affichermasquer.js"></script>
</body>
</html>