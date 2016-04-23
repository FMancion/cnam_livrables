<!DOCTYPE html>
<html lang="fr">
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	<title> TRAITEMENT CONTACT </title>
	<meta charset="utf-8"/>
	<meta name="AUTHOR" content="Franck M. CNAM Bourges">
	<meta name="Description" content="site scientifique sur des mysteres ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<link rel="stylesheet" href ="../css/standard.css"/>
	<link rel="stylesheet" href ="../css/mobile.css"/>
	<link rel="shortcut icon" href="../img/favicon.ico" />
  </head>
  
<body> 
 <div id="conteneur">  
 
<?php   
/* declaration des variables */
 $nom=$_GET['nom'];
 $sujet=$_GET['sujet'];
 $message=$_GET['message'];
 $email=$_GET['email'];
?>


<article>
<?php
$atom   = '[-a-z0-9!#$%&\'*+\\/=?^_`{|}~]';   // caractères autorisés avant l'arobase
$domain = '([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)'; // caractères autorisés après l'arobase (nom de domaine)
                               
$regex = '/^' . $atom . '+' .   // Une ou plusieurs fois les caractères autorisés avant l'arobase
'(\.' . $atom . '+)*' .         // Suivis par zéro point ou plus
                                // séparés par des caractères autorisés avant l'arobase
'@' .                           // Suivis d'un arobase
'(' . $domain . '{1,63}\.)+' .  // Suivis par 1 à 63 caractères autorisés pour le nom de domaine
                                // séparés par des points
$domain . '{2,63}$/i';          // Suivi de 2 à 63 caractères autorisés pour le nom de domaine

// test de l'adresse e-mail
if (preg_match($regex, $nom)) {
    echo "le nom $nom est valide";
} else {
    echo "le nom $nom n'est pas valide";
}
?>

<?php 
 $requete = " INSERT INTO message(nom, texte, mail) VALUES ('$nom','$message','$email') " ; 
 ?>
    <p> ma requete d'insertion : <br/> "<?php echo $requete; ?>" </p> 

 <?php
 require("inc/connexion.inc.php"); requetebdd($requete) ;
?>   
<?php
$date = date("d-m-Y");
$heure = date("H:i");
?>
  
<h1> Votre message a bien été envoyé en base :</h1>
<TABLE > 
  <CAPTION> Résultats du formulaire </CAPTION> 
 <TR> 
 <TH> date et heure réception </TH> 
 <TD>  <?php  echo "le $date à $heure"?> </TD> 
 </TR> 
  <TR> 
 <TH> nature de la demande </TH> 
 <TD>  <?php  echo $sujet ?> </TD> 
  </TR> 
  <TR> 
 <TH> NOM </TH> 
 <TD> <?php echo $nom ?></TD> 
  </TR> 
  <TR> 
 <TH> MAIL </TH> 
 <TD> <?php echo $email ?></TD> 
  </TR> 
  <TR> 
 <TH> MESSAGE </TH> 
 <TD> <?php echo $message ?></TD> 
  </TR> 
 <TR> 
 <TH> LARGEUR PAGE (temps réel)</TH> 
 <TD>  <div id="largeurPage">0</div> pixels </TD> 
 </TR> 
</TABLE> 
</article>

<article>
  <button onclick="affichermasquer(this)">faire apparaitre ou enlever lien</button>
  <p id="amasquer"><a href ="./index_admin.php">retour backoffice</a></p>
</article>

    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("traitementcontact"); 
?>
</footer>

</div>
    <script src="../jvs/afficheheure.js"></script>
    <script src="../jvs/largeurpage.js"></script>
    <script src="../jvs/affichermasquer.js"></script>
</body>
</html>