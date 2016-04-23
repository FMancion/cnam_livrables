<!DOCTYPE html>
<html lang="fr">
<head>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif] -->
<title> MYSTERES ET ILLUSIONS - FORMULAIRE DE CONTACT</title>
 <meta charset="utf-8"/>
 <meta name="AUTHOR" content="Franck M. Cnam">
 <meta name="Description" content="site scientifique sur des mysteres ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales" />	
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
 <link rel="stylesheet" href ="../css/standard.css"/>
 <link rel="stylesheet" href ="../css/mobile.css"/>
 <link rel="shortcut icon" href="../img/favicon.ico" />
</head>
	
<body>
  
<div id="conteneur">

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("form_contact"); 
?>
 <img src="../img/img-form.png" id="imageenhaut"  >	

</header>

<div id="block-user-login" >
<h1>Espace Membre</h1>
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
 <ul id="menu">
 <?php  
  include ("./inc/menu.inc.php"); 
  ?>
 </ul>
<!-- menu navigation mobile -->
  <ul id="navigationMenu">
 <?php  
  include ("./inc/menu-mobile.inc.php"); 
  ?>
  </ul>
</nav>

<section>
	 <fieldset>
      <legend>Formulaire de contact</legend>
      <form name="formulaire" method="GET"  id="mc-form" action="./traitement.php" onSubmit ="return verifForm(this);" >
        <label>Veuillez indiquer le sujet de votre demande:</label></br>
        <input type="radio" name="sujet" id="sujet" value="contact" checked>contact<br>
        <input type="radio" name="sujet" value="information">information<br>
        <input type="radio" name="sujet" value="amelioration">amélioration<br></br>
        <p>Nom (*) <input  type="text" name="nom" id="nom" onblur="NomAvecLettres(this)"  maxlength="50" required placeholder="pas de chiffres svp"/></p></br>
        <p>Message (*) <textarea  name="message" id="message" rows="5" cols="20" placeholder="votre message, pas de caractères spéciaux" required onblur="MessSansCaractAnormaux(this);" /></textarea></p></br>
        <p>Mail (*) <input type="email" name="email" id="email" onblur="BonFormatMail(this)" maxlength="50" required placeholder="ex : exemple@domaine.fr "/></p></br></br>
        <input id="envoi" name="envoi" type="submit"  value="Envoyer"   /></br>	
        <input id="reset" name="reset" type="reset" value="Réinitialiser"/>
		</br>
        </form>
		</br>
        	 <div id="carte_js"></div>
     </fieldset>
</section>

<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("form_contact"); 
?>
</footer>


</div>
  <!-- <script src="../jvs/verif_form.js"></script> -->
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
  <script src="../jvs/map.js" type="text/javascript"></script>
</body>
</html>
