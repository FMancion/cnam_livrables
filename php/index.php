<!DOCTYPE html>
<html lang="fr">
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	<title> MYSTERES ET ILLUSIONS </title>
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

<header>  
<?php
 include ("inc/header.inc.php"); headerinclude ("accueil principal");
 include ("inc/banniere.inc.php"); 
?>
</header>

<div id="block-user-login">
<legend>Espace Membre</legend>
  <form name="formulaire" method="GET" action="./login.php" onSubmit="return verifForm(this);" >
	<label>Login : (*)</label>
    <input type="text" id="login" name="login"	onblur="NomAvecLettres(this)" placeholder=" sans symbole < " required onblur="LoginSansInf(this);" > <br /><br>
    <label>Password : (*)</label> <input type="password" id="pwd" name="pwd" required onblur="PassCorrect(this);" > <br></br>
    <input id="envoi" name="connection" type="submit"  value="Envoyer" /> <span id="erreur4"></span> 
  </form>
</div>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("accprinc");
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
 <h1>Accueil - Présentation du site</h1>
 <p>Ce site, développé par Franck M. du Cnam de Bourges, a pour but de vous faire partager divers mystères scientifiques , élucidés ou non, et illusions d'optique, et d'en expliquer le fonctionnement. Ce site est destiné a tout public ( étudiants, scientifiques, informaticiens ) . Bonne navigation !</p> 
 
 <!-- list des 3 sites concurrents par expression clé -->
 <p> les 3 sites concurrents pour l'expression " mystères et illusions ( titre ) sont : </p>
  <a href="http://www.grandchambord.fr/commune/saint-claude-de-diray/actualites/mysteres-et-illusions-maxime-minerbe"  >site 1</a>
  <a href="http://www.theatreprospero.com/2015/03/mysteres-et-illusions-du-printemps/" >site 2 </a>
  <a href="http://www.artesine.fr/spectacle-2915-mystere-illusion.html"  >site 3</a></br>

 </article>
<article>
 <h2><a href="./mysteres.php" title="page des mystères" >MYSTERES</a></h2>
 <p>Présentation de divers mystères scientifiques, élucidés ou non, sous divers formats avec description et explications. </p>
 <h2><a href="./illusions.php" title="page des illusions">ILLUSIONS</a></h2>
 <P> Présentation d'incroyables illusions d'optique, sous divers formats( photos, javascript ) avec description et explications .</p>
</article>
</section>

<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("Accueil_principal"); 
?>
</footer>

</div>

  <script src="../jvs/AfficheOuMasquePassword.js"></script>
  <!-- <script src="../jvs/verif_form.js"></script> -->

</body>
</html>		