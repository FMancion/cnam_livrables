<!DOCTYPE html>
<html lang="fr">

<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("Damier d'Adelson","site scientifique sur des mystères ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales");
  ?>  
  </head>
	
<body>
<?php include_once("inc/analyticstracking.inc.php") ; ?>

<div id="conteneur">

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("damier Adelson"); 
 //include ("inc/banniere.inc.php"); 
?>
 <img src="../img/illusions/damier2.jpg" id="imageenhaut"  alt="damier adelson">	

</header>

<div id="block-user-login" >
<?php  
 include ("./inc/userco.inc.php");
 ?>
  <!-- On affiche un lien pour fermer notre session -->
</div>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("Adelson");
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
	<a href ="./lignes-piano.php"> <img src="../img/f_gauche.png" id="flechegauche"></a>
	Le Damier d'Adelson
	<a href ="./lignes-piano.php"> <img src="../img/f_droite.png" id="flechedroite" ></a>
	</h1>
    </article>
    <article>
	
    <img src="../img/illusions/shadow-illusion.jpg" id="imagearticle" alt="damier d'Adelson" 
    onmousedown="press(this)"
	onmouseup="depress(this)">
	
	<p>
<!-- on affiche le contenu présent en base entre les balises <p> -->
<?php 
/* declaration des variables */
 $titre="damier" ;

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
 include ("./inc/footer.inc.php");  footerinclude ("Damier Adelson"); 
?>
</footer>

</div>
  <script src="../jvs/damier.js"></script>
  <script src="../jvs/imprimer.js"></script>
</body>
</html>
   

     
     



