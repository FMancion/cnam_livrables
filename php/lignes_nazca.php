<!DOCTYPE html>
<html lang="fr">  
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	<title> LES LIGNES DE NAZCA </title>
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
 include ("./inc/header.inc.php"); headerinclude ("lignesnazca"); 
 //include ("inc/banniere.inc.php"); 
 ?>
 <img src="../img/mysteres/lignes2.jpg" id="imageenhaut"  >	
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
 include ("inc/cookie.inc.php"); cookieinclude ("lignesnazca");
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
	    <h1>
		<a href ="./lasbolas.php"> <img src="../img/f_gauche.png" id="flechegauche" ></a>
    	Les lignes de Nazca
		<a href ="./peintures_SW.php"> <img src="../img/f_droite.png" id="flechedroite" ></a>
		</h1>
		
		 <!-- list des 3 sites concurrents par expression clé -->
 <p> les 3 sites concurrents pour l'expression "Lignes de Nazca" sont : </p>
 
  <a href="https://fr.wikipedia.org/wiki/G%C3%A9oglyphes_de_Nazca" >site 1</a>
  <a href="http://www.natgeotv.com/fr/lignes-de-nazca" >site 2</a>
  <a href="http://www.travelplugin.com/nazca-les-verite-jamais-vu/" >site 3</a>

    </article>
	
  <article>
      
      <a href ="../img/mysteres/lignes_nazca.jpg"> <img src="../img/mysteres/lignes_nazca.jpg" id="imagearticle" ></a>
	  
	  <p>
      <!-- on affiche le contenu présent en base entre les balises <p> -->
<?php 
/* declaration des variables */
 $titre="lignesnazca" ;

 $requete= "SELECT distinct contenu FROM article WHERE titre='$titre'  ";
 
 require("inc/connexion.inc.php"); 
 $contenu=rendvaleur($requete) ; 
 echo "$contenu";
?>     
      </p>
	  
	    <input type="button" id="impression"  onclick="imprimer_page()"  value="Imprimer cette page" >

    </article>
	
  </section>
  
    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("lignesnazca"); 
?>
</footer>
	
</div>
  <script src="../jvs/imprimer.js"></script>
</body>
</html>