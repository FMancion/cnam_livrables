<!DOCTYPE html>
<html lang="fr">
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	<title> MYSTERES ET ILLUSIONS - ACCUEIL ESPACE MEMBRE </title>
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
 include ("./inc/header.inc.php"); headerinclude ("accconnected"); 
 include ("inc/banniere.inc.php"); 
?>
</header>

<div id="block-user-login" >
<h1>Espace Membre</h1>
<?php  
 include ("./inc/userco.inc.php");
 if ( ! isset($_GET['login'] ) || ! isset($_GET['pwd'])) {
  echo '<body onLoad="alert(\'membre non reconnu ...	 \')">';
}
 ?>
</div>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("accconnected");
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
 <p>Ce site, développé par Franck M. du Cnam de Bourges, a pour but de vous faire partager divers mystères et illusions d'optique, et d'en expliquer le fonctionnement. Vous trouverez sur certains mots des informations info-bulles supplémentaires. Bonne navigation !</p> 
</article>
<article>
 <h2><a href="./mysteres.php" title="page des mystères" >MYSTERES</a></h2>
 <p>Présentation de divers mystères scientifiques, élucidés ou non, sous divers formats avec description et explications. </p>
 <h2><a href="./illusions.php" title="page des illusions">ILLUSIONS</a ></h2>
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