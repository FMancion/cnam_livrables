
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre site)

//session_start ();

$ndom=$_SERVER['HTTP_HOST'] ;

  if ( isset($_SESSION['typecpte']) && $_SESSION['typecpte']== "Administrateur" ) {
	  ?>

	
	<h2> <-- gestion messages --></h2>
	<a href="./traitement-mess.php"><input type="button" id="backoff" title="extraire messages dans tableau page web" value="liste des messages page web"/></a><br>
    <a href="./traitement-mess-csv.php"><input type="button" id="backoff" title="extraire messages dans fichier csv" value="liste messages format csv"/></a><br>  
	<!-- <a href="./traitement-vider-mess.php"><input type="button" id="backoff" title="vider table messages" value="vider table messages" onClick="alert('ATTENTION VOUS ALLEZ VIDER LA TABLE DES MESSAGES !!! ')"/></a><br>  -->	

	<h2> <-- gestion articles --></h2>
	
   
	<a href="./traitement-contenu.php"><input type="button" id="backoff" title="liste les contenus des articles" value="liste contenu"/></a><br>
	<a href="./modif-contenu.php"><input type="button" id="backoff" title="modifier le contenu d'un article" value="modifier contenu article" onClick="alert('ATTENTION VOUS ALLEZ MODIFIER LE CONTENU D\'UN ARTICLE !!! ')" /></a><br>
	
	<a href="./creation-article.php"><input type="button" id="backoff" title="création d'un article" value="création article"/></a><br>
	
	<a href="./traitement-loginmodif.php"><input type="button" id="backoff" title="login somme modif" value="total modifs par user"/></a><br>
	<a href="./traitement-bestlogin.php"><input type="button" id="backoff" title="meilleur user" value="user le + de modifs"/></a><br>
	
	<h2> <-- tutoriels --></h2> 
	<a href="./tuto.php"><input type="button" id="backoff" title="tuto" value="tuto saisie contenu (*)"/></a><br>
   	<a href="./tuto2.php"><input type="button" id="backoff" title="tuto" value="tuto saisie article (*)"/></a><br>

	<h2> <-- gestion utilisateurs --></h2> 
	<a href="./affiche-mdp.php"><input type="button" id="backoff" title="affiche mot de passe oublié" value="mot de passe oublié ?"/></a><br>
	<a href="./creation-user.php"><input type="button" id="backoff" title="création user" value="création user"/></a><br>
	<a href="./traitement-liste-user.php"><input type="button" id="backoff" title="liste user" value="liste des comptes"/></a><br>

 
 <?php } else { ?>
   <p> Vous n'êtes pas administrateur, veuillez vous connecter avec les droits adéquats pour acceder au back office </p>
   <a href="./index.php"> <input type="button" id="connection" value="se connecter"/></a>
 <?php } ?>


	








 


