<!DOCTYPE html>
<html lang="fr">
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	<title> ILLUSIONS D'OPTIQUE</title>
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
 include ("./inc/header.inc.php"); headerinclude ("accueil_illusions"); 
 //include ("inc/banniere.inc.php"); 
?>
 <img src="../img/illusions/robe.jpg" id="imageenhaut"  >	
</header>

<div id="block-user-login" >
<h1>Espace Membre</h1>
<?php  
 include ("./inc/userco.inc.php");
 ?>
  <!-- On affiche ici un lien pour fermer notre session -->
</div>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("illusions");
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
    <h1>ILLUSIONS - Présentation </h1>
	 <p> Vous trouverez ci dessous les liens pour accedérer à l'image et à l'explication de chaque illusion !</p> 
    </article>
    <article>
  		<h2><a href="./damier_adelson.php">Le damier d'Adelson</a></h2> 
       <p style="cursor:pointer;" onclick="montre('resume1');">cliquez ici pour voir/enlever le résumé</p>
       <div id="resume1" style="display:none;">
       <p>Cette illusion a été créée en 1995 par Edward.H ADELSON, un chercheur de l’institut technologique du Massachusetts, qui travaille beaucoup sur les illusions qui jouent sur la luminosité, et le contraste.</p>
       </div>
       <h2><a href="./lignes_piano.php">Les lignes piano</a></h2>
       <p style="cursor:pointer;" onclick="montre('resume2');">cliquez ici pour voir/enlever le résumé</p>
       <div id="resume2" style="display:none;">
       <p>Une illusion au style particulier, qui consiste à regarder l'image, croire une chose, et ensuite réaliser, que peut être ce que l'on voit n'est pas la réalité ..</p>
       </div>
    </article>
	</section>
	
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("accueil_illusions"); 
?>
</footer>

  </div>
    <script src="../jvs/masquer.js"></script>
  </body>
</html> 