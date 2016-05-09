<!DOCTYPE html>
<html lang="fr">  
<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS | lignes de Nazca | géoglyphes de Nazca", "présentation des lignes de Nazca, appelées aussi géoglyphes de Nazca, au sud du Pérou");
  ?>  
  </head>
	
<body>
<?php include_once("inc/analyticstracking.inc.php") ; ?>

<div id="conteneur">

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("lignes nazca"); 
 //include ("inc/banniere.inc.php"); 
 ?>
 <img src="../img/mysteres/lignes2.jpg" id="imageenhaut" alt="lignes nazca" />	
</header>

<div id="block-user-login" >
<?php  
 include ("./inc/userco.inc.php");
 ?>
  <!-- On affiche un lien pour fermer notre session -->
</div>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("lignes-nazca");
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
	    <h1>
		<a href ="./lasbolas.php"> <img src="../img/f_gauche.png" id="flechegauche" ></a>
    	Les lignes de Nazca
		<a href ="./peintures-sw.php"> <img src="../img/f_droite.png" id="flechedroite" ></a>
		</h1>
		
		 <!-- list des 3 sites concurrents par expression clé 
 <p> les 3 sites concurrents pour l'expression "Lignes de Nazca" sont : </p>
 
  <a href="https://fr.wikipedia.org/wiki/G%C3%A9oglyphes_de_Nazca " >site 1</a>
  <a href="http://www.natgeotv.com/fr/lignes-de-nazca " >site 2</a>
  <a href="http://www.travelplugin.com/nazca-les-verite-jamais-vu/ " >site 3</a> -->

    </article>
	
  <article>
      
      <a href ="../img/mysteres/lignes_nazca.jpg"> <img src="../img/mysteres/lignes_nazca.jpg" id="imagearticle" ></a>
	  
	  <p>
      <!-- on affiche le contenu présent en base entre les balises <p> -->
<?php 
/* declaration des variables */
 $titre="lignesnazca" ;
 
 if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) { 
   $requete= "SELECT distinct contenu FROM article WHERE titre='$titre'  "; 
   $contenu=rendvaleur($requete) ; 
   echo "$contenu";
 } else {
	require("inc/connexion.inc.php");
   $requete= "SELECT distinct contenu FROM article WHERE titre='$titre'  "; 
   $contenu=rendvaleur($requete) ; 
   echo "$contenu";
 }
 
 
?>     
      </p>
	  
	    <input type="button" id="impression"  onclick="imprimer_page()"  value="Imprimer cette page" >

    </article>
	
  </section>
  
    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("géoglyphes de nazca"); 
?>
</footer>
	
</div>
  <script src="../jvs/imprimer.js"></script>
</body>
</html>