﻿<!DOCTYPE html>
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
 include ("./inc/header.inc.php"); headerinclude ("modifcontenu"); 
?>
 <img src="../img/newspaper.png" id="imageenhaut"  >	
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
 include ("inc/cookie.inc.php"); cookieinclude ("modifcontenu");
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
    <article>
	 <fieldset>
      <legend>Formulaire de changement de contenu</legend>
      <form name="formulaire" method="GET"  id="mc-form" action="./traitement_modif_contenu.php"  onSubmit ="return verifForm(this);" >
        <label>Veuillez indiquer l'article concerné:</label></br>
		
        <select name="titre" id="titre">
			<option value="lignesnazca" selected>lignes de Nazca</option>
			<option value="peintures_SW">peintures de SW</option>
			<option value="lasbolas">boules Las Bolas</option>
			<option value="damier">damier d'Adelson</option>
			<option value="lignespiano">lignes piano</option>
			</select>  
					
        <!-- <input type="radio" name="sujet" value="lignespiano">lignes piano<br></br> -->
		
        <label>nouveau contenu (*) <textarea  name="contenu" id="contenu" rows="5" cols="20" placeholder="votre message, pas de caractères spéciaux" required onblur="MessSansCaractAnormaux(this);" /></textarea></label></br>
        <input id="envoi" name="envoi" type="submit"  value="Envoyer"   />
        <input id="reset" name="reset" type="reset" value="Réinitialiser"/>
		</br>
        </form>
		</br>
     </fieldset>
	</article>
</section>

<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("modifcontenu"); 
?>
</footer>


</div>
  <script src="../jvs/verif_form.js"></script>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
  <script src="../jvs/map.js" type="text/javascript"></script>
</body>
</html>