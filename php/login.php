<?php
/* declaration des variables */

 $login=$_GET['login'];
 $pwd=$_GET['pwd'];
  
 $requete1 = "select * from user where login='$login' and password='$pwd' and typecompte='admin'";
 $requete2 = "select * from user where login='$login' and password='$pwd' and typecompte='user'";


 require("inc/connexion.inc.php"); 
   $nblignesadmin=rendnblignes($requete1) ; 
   $nblignesuser=rendnblignes($requete2) ; 

  echo "nombre de lignes admin: " . $nblignesadmin . "<br />";
  echo "nombre de lignes user : " . $nblignesuser . "<br />";

   // on teste si nos variables sont définies

if (isset($_GET['login']) && isset($_GET['pwd'])) {
			// dans ce cas, tout est ok, on peut démarrer notre session
			session_start ();

		if ( $nblignesadmin >= 1) {
    // on enregistre les paramètres de notre visiteur comme variables de session 
			  
		  $_SESSION['login'] = $_GET['login'];
		  $_SESSION['pwd'] = $_GET['pwd'];
		  $_SESSION['typecpte'] = "Administrateur";
		header ('location: ./index_admin.php');
		exit ;
		} 
		if ( $nblignesuser >= 1) {
	// on enregistre les paramètres de notre visiteur comme variables de session 

		  $_SESSION['login'] = $_GET['login'];
		  $_SESSION['pwd'] = $_GET['pwd'];
		  $_SESSION['typecpte'] = "Utilisateur";
		header ('location: ./index_user.php');
		exit ;
		}
	    // Le visiteur n'a pas été reconnu comme étant membre de notre site. 
	    //On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		header ('location: ./index.php');
		exit ;
	} else {
  echo '<body onLoad="alert(\'les variables du formulaire ne sont pas déclarées \')">';
  echo ' Les variables du formulaire ne sont pas déclarées.';
  header ('location: ./index.php');
  exit ;
      }
?>