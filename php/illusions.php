<!DOCTYPE html>
<html lang="fr">
<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("ILLUSIONS d'optique","site scientifique sur les illusions d'optique et mirages, images subliminales ");
  ?>  
  </head>
	
<body>

<div id="conteneur">

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("illusions d'optique"); 
 //include ("inc/banniere.inc.php"); 
?>
 <img src="../img/illusions/robe.jpg" id="imageenhaut" alt="illusion robe">	
</header>

<div id="block-user-login" >
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
    <h1>ILLUSIONS - Présentation </h1>
	 <p> Vous trouverez ci dessous les liens pour accedérer à l'image et à l'explication de chaque illusion !</p> 
    </article>
    <article>
  		<h2><a href="./damier-adelson.php" >Le damier d'Adelson</a></h2> 
       <p style="cursor:pointer;" onclick="montre('resume1');">cliquez ici pour voir/enlever le résumé</p>
       <div id="resume1" style="display:none;">
       <p>Cette illusion a été créée en 1995 par Edward.H ADELSON, un chercheur de l’institut technologique du Massachusetts, qui travaille beaucoup sur les illusions qui jouent sur la luminosité, et le contraste.</p>
       </div>
       <h2><a href="./lignes-piano.php" >Les lignes piano</a></h2>
       <p style="cursor:pointer;" onclick="montre('resume2');">cliquez ici pour voir/enlever le résumé</p>
       <div id="resume2" style="display:none;">
       <p>Une illusion au style particulier, qui consiste à regarder l'image, croire une chose, et ensuite réaliser, que peut être ce que l'on voit n'est pas la réalité ..</p>
       </div>
    </article>
	</section>
	
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("illusions d'optique"); 
?>
</footer>

  </div>
    <script src="../jvs/masquer.js"></script>
  </body>
</html> 