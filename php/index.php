<!DOCTYPE html>
<html lang="fr">

<!---- include head avec 2 paramètres title et content ---->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS | mystères et illusions","site scientifique sur des mystères ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales");
  ?>  
  </head>
	
<body>
<?php include_once("inc/analyticstracking.inc.php") ; ?>

<div id="conteneur">

<!---- include header avec 1 paramètre ---->
<header>  
<?php
 include ("inc/header.inc.php"); headerinclude ("accueil principal");
 include ("inc/banniere.inc.php"); 
?>
</header>

<!---- début formulaire ---->
<div id="block-user-login">
<h1>Espace Membre</h1>
  <form name="formulaire" method="GET" action="./login.php" onSubmit="return verifForm(this);" >
	<label>Login : (*)</label>
    <input type="text" id="login" name="login" maxlength="10" placeholder=" sans < ou > " required onblur="LoginSansInf(this);" > <br /><br>
    <label>Password : (*)</label> <input type="password" id="pwd" placeholder="10 caracteres max" name="pwd" maxlength="10" required onblur="PassCorrect(this);" > <span id="erreur2"></span><br><br>
    <input id="envoi" name="connection" type="submit"  value="Envoyer" /> <span id="erreur4"></span> 
  </form>
</div>

<!---- block cookie ---->
<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("accprinc");
?>
</aside>

<!---- block navigation ---->
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
 <h1>Accueil - Présentation du site</h1>
 <p>Ce site, développé par Franck M. du Cnam de Bourges, a pour but de vous faire partager divers mystères scientifiques , élucidés ou non, et illusions d'optique, et d'en expliquer le fonctionnement. Ce site est destiné a tout public ( étudiants, scientifiques, informaticiens ) . Bonne navigation !</p> 
 
 <!-- list des 3 sites concurrents par expression clé 
 <p> les 3 sites concurrents pour l'expression " mystères et illusions ( titre ) sont : </p>
  <a href="http://www.grandchambord.fr/commune/saint-claude-de-diray/actualites/mysteres-et-illusions-maxime-minerbe"  >site 1</a>
  <a href="http://www.theatreprospero.com/2015/03/mysteres-et-illusions-du-printemps/" >site 2 </a>
  <a href="http://www.artesine.fr/spectacle-2915-mystere-illusion.html"  >site 3</a></br> -->

 </article>
<article>
 <h2><a href="./mysteres.php" title="page des mystères" >MYSTERES SCIENTIFIQUES</a></h2>
 <p>Présentation de divers mystères scientifiques, élucidés ou non, sous divers formats avec description et explications. </p>
 <h2><a href="./illusions.php" title="page des illusions" >ILLUSIONS D'OPTIQUE</a></h2>
 <P> Présentation d'incroyables illusions d'optique, sous divers formats( photos, javascript ) avec description et explications .</p>
</article>
</section>

<!---- include footer avec 1 paramètre -->
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("Accueil_principal"); 
?>
</footer>

</div>

  <!-- début javascript -->
  <!-- <script src="../jvs/AfficheOuMasquePassword.js"></script> -->
   <script src="../jvs/verif_form.js"></script> 

</body>
</html>		