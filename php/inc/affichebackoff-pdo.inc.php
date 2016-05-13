
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre site)

//session_start ();

$ndom=$_SERVER['HTTP_HOST'] ;

  if ( isset($_SESSION['typecpte']) && $_SESSION['typecpte']== "Administrateur" ) {
	  ?>

	
	<h2> <-- gestion modifications --></h2>
	<a href="./traitement-modifs-pdo.php"><input type="button" id="backoff" title="liste des modifications des articles" value="liste des modifs"/></a><br>

 
 <?php } else { ?>
   <p> Vous n'êtes pas administrateur, veuillez vous connecter avec les droits adéquats pour acceder au back office </p>
   <a href="./index.php"> <input type="button" id="connection" value="se connecter"/></a>
 <?php } ?>


	








 


