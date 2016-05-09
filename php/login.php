

<?php 
//ob_start();


/* declaration des variables */

 $login= htmlspecialchars ($_GET['login'],ENT_QUOTES)  ;
 //$login= $_GET['login']  ;
 $pwd= htmlspecialchars ($_GET['pwd'],ENT_QUOTES) ;
 //$pwd=$_GET['pwd'];
 
 //$regex_pass="#^(?=.*\d)(?=.*[a-zA-Z]).{4,8}#" ;
 //$regex_nom="#[a-zA-Z0-9]#" ;
 
 $requete1 = "select * from user where login='$login' and password='$pwd' and typecompte='admin'";
 $requete2 = "select * from user where login='$login' and password='$pwd' and typecompte='user'";
 $requete3 = "select distinct password from user where login='$login' ";


 require("inc/connexion.inc.php"); 
 
   $nblignesadmin=rendnblignes($requete1) ; 
   $nblignesuser=rendnblignes($requete2) ; 
   $pass= rendvaleur ($requete3) ; 
   

  //echo "nombre de lignes admin: " . $nblignesadmin . "<br />";
  //echo "nombre de lignes user : " . $nblignesuser . "<br />";

   // on teste si nos variables sont définies

if ( isset($_GET['login']) && isset($_GET['pwd'])) {
			// dans ce cas, tout est ok, on peut démarrer notre session
			session_start ();

		if ( $nblignesadmin >= 1 ) {
    // on enregistre les paramètres de notre visiteur comme variables de session 
			  
		  $_SESSION['login'] = $login;	
		  $_SESSION['pwd'] = $_GET['pwd'];
		  $_SESSION['typecpte'] = "Administrateur";
		  header ('location: ./index-admin.php');
		  exit ;
		} 
		if ( $nblignesuser >= 1 ) {
	// on enregistre les paramètres de notre visiteur comme variables de session 

		  $_SESSION['login'] = $_GET['login'];
		  $_SESSION['pwd'] = $_GET['pwd'];
		  $_SESSION['typecpte'] = "Utilisateur";
		  header ('location: ./index-connected.php');
		  exit ;
		}
		if ( ($nblignesadmin < 1 ) || ($nblignesuser < 1 ) ) {
		  // Le visiteur n'a pas été reconnu comme étant membre de notre site. 
	      //On utilise alors un petit javascript lui signalant ce fait
		  // puis on le redirige vers la page d'accueil
		  
		  echo '<body onLoad="alert(\'membre non reconnu en base ... \')">';
		  //ob_end_flush();
		}	
	} else {
      //echo '<body onLoad="alert(\'les variables du formulaire ne sont pas déclarées \')">';
      //echo ' Les variables du formulaire ne sont pas déclarées.';
      }
	 header ('location: ./index-connected.php');
	 exit ;
?>


