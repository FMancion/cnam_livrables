<!DOCTYPE html>
<html>
	<head>
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif] -->
  	<title> FORMULAIRE </title>
		<meta charset="utf-8"/>
		<meta name="AUTHOR" content="David C. et Franck M.">
		<meta name="Description" content="site scientifique sur des mysteres ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales" />	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		<link rel="stylesheet" href ="../css/standard.css"/>
		<link rel="shortcut icon" href="./images/projet.ico" />
	</head>
	
<body>
 <div id="conteneur">  
 <a href ="../index.php"> <img src="../images/logo.png" width="80%" height="130px" align="center" ></a>

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("Contact"); 
 include ("inc/cookie.inc.php"); cookieinclude ("Contact");
?>
</header>

<nav>
<ul id='menu'>
<?php  
 include ("./inc/menu.inc.php"); 
 //include ("./php/inc/menu.inc.php"); menuinclude ("mystillus.esy.es"); 
 ?>
 </ul>
</nav>

<div id="block-user-login" >
 <?php  
 include ("./inc/userco.inc.php");
 ?>
  <!-- On affiche un lien pour fermer notre session -->
<a href="./logout.php"><input type="button" name="logout" value="logout"/></a>
</div>

    <fieldset>
      <label>Formulaire de contact</label>
      <form name="formulaire" method="GET"  id="mc-form" action="./traitement.php"  onSubmit ="return verifForm(this);" >
        <label>Veuillez indiquer le sujet de votre demande:</label>
        <input type="radio" name="sujet" id="sujet" value="contact" checked>demande de contact<br>
        <input type="radio" name="sujet" value="information">demande d'information<br>
        <input type="radio" name="sujet" value="amelioration">demande d'amélioration<br>
        <label>Nom (*) <input  type="text" name="nom" id="nom" onblur="NomAvecLettres(this)"  size="30px" "maxlength="50" required placeholder="pas de chiffres svp"/></label>
        <label>Message (*) <textarea cols="30" rows="4" name="message" id="message" placeholder="votre message, pas de caractères spéciaux" required onblur="MessSansCaractAnormaux(this);" /></textarea></label>
        <label>Mail (*) <input type="email" name="email" id="email" onblur="BonFormatMail(this)" maxlength="100" required placeholder="ex : exemple@domaine.fr "/></label>
        <input id="envoi" name="envoi" type="submit"  value="Envoyer"   />
        <input id="reset" name="reset" type="reset" value="Réinitialiser"/>
      </form>
	  </fieldset>


    <div id="carte_js"></div>
            
	<footer>
		Copyright © David et Franck - tous droits réservés
    <a href="../index.html">Retour à l'accueil</a>
    <a href="./legales.html">Lien vers mentions légales</a>
	</footer>
	
	  </div>

</div>
  <script src="../js/AfficheOuMasquePassword.js"></script>
  <script src="../js/affichermasquer.js"></script>
  <script src="../js/verif_form.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="../js/captcha.js "></script>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
  <script src="../js/map.js" type="text/javascript"></script>
</body>
</html>
