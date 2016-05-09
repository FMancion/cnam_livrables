﻿<!DOCTYPE html>
<html lang="fr">

<head>
<?php include ("./inc/head.inc.php"); headinclude ("MYSTILLUS - CONTACT", "site scientifique sur les mystères scientifiques et illusions d'optique"); 
?>
</head>
	
<body>
<?php include_once("inc/analyticstracking.inc.php") ; ?>
  
<div id="conteneur">

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("contact"); 
?>
 <img src="../img/img-form.png" id="imageenhaut" alt="mystillus - contact" >	

</header>

<div id="block-user-login" >
<?php  
 include ("./inc/userco.inc.php");
 ?>
  <!-- On affiche un lien pour fermer notre session -->
</div>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("contact");
?>
</aside>

<nav>
<!-- menu navigation pc -->
 <?php  
  include ("./inc/menu.inc.php"); 
  ?>
<!-- menu navigation mobile -->
 <?php  
  include ("./inc/menu-mobile.inc.php"); 
  ?>
</nav>

<section>
<article>
	 <fieldset>
      <legend>Formulaire de contact</legend>
      <form name="formulaire" method="GET"  id="mc-form" action="./traitement-contact.php" onSubmit ="return verifForm(this);" >
        <label>Veuillez indiquer le sujet de votre demande:</label></br>
        <input type="radio" name="sujet" id="sujet" value="contact" checked>contact<br>
        <input type="radio" name="sujet" value="information">information<br>
        <input type="radio" name="sujet" value="amelioration">amélioration</br>
        <p>Nom (*) <input  type="text" name="nom" id="nom" onblur="NomAvecLettres(this)" maxlength="10" required placeholder="pas de chiffres svp"/></p>
        <p>Message (*) <textarea  name="message" id="message" onblur="MessSansCaractAnormaux(this);" maxlength="200" rows="5" cols="20" placeholder="votre message, pas de caractères spéciaux" required /></textarea></p>
        <p>Mail (*) <input type="email" name="email" id="email" onblur="BonFormatMail(this)" maxlength="30" required placeholder="ex : exemple@domaine.fr "/></p>
       	<p>Tel <input  type="tel" name="tel" id="tel" maxlength="10" onblur="TelSansLettres(this)"  placeholder="que des chiffres "/></p>
		<input id="envoi" name="envoi" type="submit"  value="Envoyer"   /></br>	
        <input id="reset" name="reset" type="reset" value="Réinitialiser"/>
		</br>
      </form>
	  </br>
        	 <div id="carte_js"></div>
     </fieldset>
	 </article>
</section>


<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("contact"); 
?>
</footer>


</div>
  <script src="../jvs/verif_form.js"></script> 
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
  <script src="../jvs/map.js" type="text/javascript"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>
</body>
</html>
