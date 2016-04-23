<!DOCTYPE html>
<html lang="fr">
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	<title> MYSTERES ET ILLUSIONS - LE DAMIER D'Adelson </title>
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
 include ("./inc/header.inc.php"); headerinclude ("damierAdel"); 
 //include ("inc/banniere.inc.php"); 
?>
 <img src="../img/illusions/damier2.jpg" id="imageenhaut"  >	

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
 include ("inc/cookie.inc.php"); cookieinclude ("damierAdel");
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
	<a href ="./lignes_piano.php"> <img src="../img/f_gauche.png" id="flechegauche" ></a>
	Le Damier d'Adelson
	<a href ="./lignes_piano.php"> <img src="../img/f_droite.png" id="flechedroite" ></a>
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

 $requete= "SELECT distinct contenu FROM article WHERE titre='$titre'  ";
 
 require("inc/connexion.inc.php"); 
 $contenu=rendvaleur($requete) ; 
 echo "$contenu";
?>     
    </p>
    	  <input id="impression" name="impression" type="button" onclick="imprimer_page()" value="Imprimer cette page" />

	</article> 

  </section>


<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("damierAdel"); 
?>
</footer>

</div>
  <script src="../jvs/damier.js"></script>
  <script src="../jvs/imprimer.js"></script>
</body>
</html>
   

     
     



