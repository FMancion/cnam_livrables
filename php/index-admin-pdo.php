<!DOCTYPE html>
<html lang="fr">
<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("ADMIN PDO","administration en pdo");
  ?>  
  </head>
	
<body>
<?php include_once("inc/analyticstracking.inc.php") ; ?>
  
<div id="conteneur">

<header>  
<?php   
  include ("./inc/header.inc.php"); headerinclude ("Accueil_admin"); 
?>
 <img src="../img/img-admin.jpg" id="imageenhaut"  />	
</header>

<div id="block-user-login" >
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
<h1>Accueil - Outils Back-Office</h1>
<?php
 include ("inc/affichebackoff-pdo.inc.php"); 
?>
</article>

<article>
 <h2><a href="./mysteres.php" title="page des mystères" >MYSTERES SCIENTIFIQUES</a></h2>
 <p>Présentation de divers mystères scientifiques, élucidés ou non, sous divers formats avec description et explications. </p>
 <h2><a href="./illusions.php" title="page des illusions" >ILLUSIONS D'OPTIQUE</a></h2>
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