<!DOCTYPE html>
<html lang="fr">
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	<title> MYSTERES SCIENTIFIQUES</title>
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
 include ("inc/header.inc.php"); headerinclude ("accueil_mystères");
 //include ("inc/banniere.inc.php"); 
?>
 <img src="../img/mysteres/maxresdefault.jpg" id="imageenhaut"  >	
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
 include ("inc/cookie.inc.php"); cookieinclude ("mysteres");
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
 <h1>MYSTERES - Présentation</h1>
 <p> Vous trouverez ci dessous les liens pour accedérer à l'image et à l'explication de chaque mystère scientifique !</p> 
 
  <!-- list des 3 sites concurrents par expression clé -->

 <p> les 3 sites concurrents pour l'expression " mystère scientifique" sont: </p>
  <a href="http://www.planet.fr/monde-sciences-10-mysteres-de-la-nature-toujours-inexpliques.546655.1608.html"  >site 1</a>
  <a href="https://associationslibres.wordpress.com/2015/10/22/10-vrais-mysteres-scientifiques-encore-inexpliques/" >site 2 </a>	
  <a href="http://www.mysteresdumonde.fr/"  >site 3</a></br>

	</article>
    <article>
          <h2><a href="./lignes_nazca.php">Les lignes de Nazca</a></h2>
          <p style="cursor:pointer;" onclick="montre('resume1');">cliquez ici pour voir/enlever le résumé</p>
          <div id="resume1" style="display:none;">
          <p>Découverts en 1927 dans le sud du Pérou, les géoglyphes de Nazca sont de grandes figures tracées sur le sol souvent d'animaux stylisés, parfois simples lignes longues de plusieurs kilomètres, qui se trouvent dans le désert de Nazca</p>
          </div>
          <h2><a href="./peintures_SW.php">peintures de Stephen Wiltshire</a></h2>
          <p style="cursor:pointer;" onclick="montre('resume2');">cliquez ici pour voir/enlever le résumé</p>
          <div id="resume2" style="display:none;">
          <p>Comme de nombreux autistes, Stephen Wiltshire a développer des facultés impressionnantes dans un domaine particulier. Surnommé « l’homme caméra » il est capable de reproduire un paysage, ou un ville entière avec une similitude impressionante juste en la survolant pendant quelques minutes….</p>
          </div>
          <h2><a href="./lasbolas.php">les boules "las bolas"</a></h2>
          <p style="cursor:pointer;" onclick="montre('resume3');">cliquez ici pour voir/enlever le résumé</p>
          <div id="resume3" style="display:none;">
          <p>Des centaines de boules de pierre ont été découvertes dans les années 30 dans la jungle du sud du Costa Rica. Connues sous le nom de "las bolas", ces sphères, pouvant mesurer jusqu’à plus de deux mètres de diamètre, auraient été sculptées entre 200 av. J.-C. et 1500. </p>
          </div>  
    </article>
  </section>

<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("accueil_mystères"); 
?>
</footer>

</div>
   <script src="../jvs/masquer.js"></script>

</body>
</html>		