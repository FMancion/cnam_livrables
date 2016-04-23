
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre site)

//session_start ();

$ndom=$_SERVER['HTTP_HOST'] ;

  if ( isset($_SESSION['typecpte']) && $_SESSION['typecpte']== "Administrateur" ) {
	echo '<a href="./traitement_mess.php"><input type="button" id="backoff" title="extraire messages dans tableau page web" value="extraire messages dans tableau"/></a></br>' ;
    echo '<a href="./traitement_mess_csv.php"><input type="button" id="backoff" title="extraire messages dans fichier csv" value="extraire messages format csv"/></a></br>';   
    echo '<a href="./traitement_contenu.php"><input type="button" id="backoff" title="liste les contenus des articles" value="liste contenu"/></a></br>';
	echo '<a href="./modif_contenu.php"><input type="button" id="backoff" title="modifier le contenu des articles" value="modif contenu"/></a></br>';
    echo '<a href="./affiche_mdp.php"><input type="button" id="backoff" title="affiche mot de passe oublié" value="mot de passe oublié ?"/></a></br>';
 
 } else {
	echo "<p> Vous n'etes pas administrateur, veuillez vous connecter avec les droits adéquats pour acceder au back office </p>";
    echo '<a href="./index.php"> <input type="button" id="connection" value="se connecter"/></a>';
 }
  
?>


	








 


