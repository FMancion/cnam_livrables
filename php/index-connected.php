<!DOCTYPE html>
<html lang="fr">
<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS MEMBRE","site scientifique sur des mystères scientifiques ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales");
  ?>  
  </head>
	
<body>
<?php include_once("inc/analyticstracking.inc.php") ; ?>

<div id="conteneur">

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("accconnected"); 
 include ("inc/banniere.inc.php"); 
?>
</header>

<div id="block-user-login" >
	  

<?php  
 include ("./inc/userco.inc.php");
 if ( isset($_SESSION['login']) && isset($_SESSION['pwd'] )) {

	// On teste pour voir si nos variables ont bien été enregistrées
	
	echo ' <body onLoad="alert(\' Vous êtes connecté ' . $_SESSION['login'] . ' \')"> ' ;

	}
else {
	echo '<body onLoad="alert(\' membre inconnu \')">';
}
 ?>
</div>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("connected");
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
 <h1>Accueil - Présentation du site</h1>
 <p>Ce site, développé par Franck M. du Cnam de Bourges, a pour but de vous faire partager divers mystères scientifiques et illusions d'optique, et d'en expliquer le fonctionnement. Vous trouverez sur certains mots des informations info-bulles supplémentaires. Bonne navigation !</p> 
</article>
<article>
 <h2><a href="./mysteres.php" title="page des mystères" >MYSTERES SCIENTIFIQUES</a></h2>
 <p>Présentation de divers mystères scientifiques, élucidés ou non, sous divers formats avec description et explications. </p>
 <h2><a href="./illusions.php" title="page des illusions" >ILLUSIONS D'OPTIQUE</a ></h2>
 <P> Présentation d'incroyables illusions d'optique, sous divers formats( vidéos, photos, ...) avec description et explications .</p>
</article>
</section>

	
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("accconnected"); 
?>
</footer>

</div>
  <script src="../jvs/AfficheOuMasquePassword.js"></script>
  <script src="../jvs/VerifFormulaire.js"></script>

</body>
</html>