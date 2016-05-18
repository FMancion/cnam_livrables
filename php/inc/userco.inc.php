<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre site)
session_start ();

// On récupère nos variables de session

if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	
	$login=$_SESSION['login'] ;
	$pwd=$_SESSION['pwd'] ;
	$requete = " select distinct avatar from user where login = '$login' and password='$pwd'" ; 
	require("inc/connexion.inc.php"); $avatar = rendvaleur ($requete) ;
	?>
	 
	<h1> <img src="../img/	<?php echo $avatar ; ?>" id="avatar2" /> Espace Membre</h1>
	
	Votre login : <?php echo $login ;?> <br>
  <!-- votre password : <?php echo $_SESSION['pwd'] ;?><br> -->
	votre type de compte : <?php echo $_SESSION['typecpte'] ;?> <br><br>
	
	<!--  On affiche un lien pour fermer notre session -->

	<a href="./logout.php"> <input type="button" title="logout" id="connection" value="logout"/></a>

	<?php 
	
} else 	{ ?> 
		 
	<p>Les variables de session ne sont pas déclarées.</p><br>
	<!-- echo '<body onLoad="alert(\'les variables du formulaire ne sont pas déclarées \')">-->
	<a href="./index.php"><input type="button" id="connection" value="se connecter"/></a>
	
	<?php 
	    } ?>