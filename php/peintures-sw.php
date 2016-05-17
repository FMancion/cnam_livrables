<!DOCTYPE html>
<html lang="fr">

<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("Peintures de Stephen Wiltshire","Peintures de Stephen Wiltshire, autisme, doué, mémoire incroyable");
  ?>  
  </head>
	
<body>
<?php include_once("inc/analyticstracking.inc.php") ; ?>

<div id="conteneur">

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("peinturesSW"); 
 //include ("inc/banniere.inc.php"); 
?>
 <img src="../img/mysteres/sw2.jpg" id="imageenhaut"  alt="Stephen Wiltshire">	
</header>

<div id="block-user-login" >
<?php  
 include ("./inc/userco.inc.php");
 ?>
  <!-- On affiche un lien pour fermer notre session -->
</div>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("Wiltshire");
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
	  <a href ="./lignes-nazca.php"> <img src="../img/f_gauche.png" id="flechegauche"  ></a>
  	  Les peintures de SW
	  <a href ="./lasbolas.php"> <img src="../img/f_droite.png" id="flechedroite"></a>
	  </h1>
    </article>
      <article>
	  
  	  <a href ="../img/mysteres/swnewyork.jpg" > <img src="../img/mysteres/swnewyork.jpg" id="imagearticle" /></a>
      
	  <p>
<!-- on affiche le contenu présent en base entre les balises <p> -->
<?php 
/* declaration des variables */
 $titre="peintures_sw" ;

 // test si le fichier connexion a deja été appelé, si non on l'appelle
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
	  
    	  <input id="impression" name="impression" type="button" onclick="imprimer_page()" value="Imprimer cette page" />
	  </article>
	</section>
  

<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("peintures Wiltshire"); 
?>
</footer>

</div>
  <script src="../jvs/imprimer.js"></script>
</body>
</html>

