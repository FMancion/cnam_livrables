<!DOCTYPE html>
<html lang="fr">
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	<title> MYSTERES ET ILLUSIONS - ADMIN</title>
	<meta charset="utf-8"/>
	<meta name="AUTHOR" content="Franck M.">
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
  include ("./inc/header.inc.php"); headerinclude ("Accueil_admin"); 
?>
 <img src="../img/img-admin.jpg" id="imageenhaut"  >	
</header>

<div id="block-user-login" >
<h1>Espace Membre</h1>
<?php  
 include ("./inc/userco.inc.php");
 ?>
</div>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("accadmin");
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
<h1>Accueil - Outils Back-Office</h1>
<?php
 include ("inc/affichebackoff.inc.php"); 
?>
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
 include ("./inc/footer.inc.php");  footerinclude ("accueil_admin"); 
?>
</footer>

</div>
</body>
</html>