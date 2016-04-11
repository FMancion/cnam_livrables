<?php


/* declaration des variables */

 $login=$_GET['login'];
 $pwd=$_GET['pwd'];
  
// On définit un login et un mot de passe de base pour tester notre exemple.
// Cependant, vous pouvez très bien interroger votre base de données afin de savoir
// si le visiteur qui se connecte est bien membre de votre site

 $requete1 = "select * from user where login='$login' and password='$pwd' and typecompte='admin'";
 $requete2 = "select * from user where login='$login' and password='$pwd' and typecompte='user'";

 //$requete2 = "SELECT count(*) FROM user WHERE  AND login = '$login' and mdp = '$pwd'";

 require("inc/connexion.inc.php"); 
   $nblignesadmin=rendnblignes($requete1) ; 
   $nblignesuser=rendnblignes($requete2) ; 

  echo "nombre de lignes admin: " . $nblignesadmin . "<br />";
  echo "nombre de lignes user : " . $nblignesuser . "<br />";

 // on teste si nos variables sont définies
if (isset($_GET['login']) && isset($_GET['pwd'])) {
	 echo '<body onLoad="alert(\'good \')">';
	// on vérifie les informations du formulaire, à savoir si le pseudo saisi 
	//est bien un pseudo autorisé, de même pour le mot de passe
	
	//if ($login_valide == $_GET['login'] && $pwd_valide == $_GET['pwd']) {
		// dans ce cas, tout est ok, on peut démarrer notre session
		// on la démarre :)

		if ( $nblignesadmin >= 1) {
			  echo '<body onLoad="alert(\'vous etes connecté en admin \')">';
			session_start ();
			  // on enregistre les paramètres de notre visiteur comme variables de session 
		  $_SESSION['login'] = $_GET['login'];
		  $_SESSION['pwd'] = $_GET['pwd'];
		  //$_SESSION['TypeCpte'] = 'Administrateur';
		// on redirige notre admin vers le backoffice
		header ('location: ./index_admin.php');
			
		} else { 
		if ( $nblignesuser >= 1) {
			  echo '<body onLoad="alert(\'vous etes connecte en user \')">';
			session_start ();
			  // on enregistre les paramètres de notre visiteur comme variables de session 
		  $_SESSION['login'] = $_GET['login'];
		  $_SESSION['pwd'] = $_GET['pwd'];
		  //$_SESSION['TypeCpte'] = 'Simple utilisateur';
		// on redirige notre user vers le site normal
		header ('location: ./index_user.php');
		}
	} 
	// Le visiteur n'a pas été reconnu comme étant membre de notre site. 
	//On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		// echo '<meta http-equiv="refresh" content="0;URL=index.htm">';
		header ('location: ./index.php');
}
else {
  echo '<body onLoad="alert(\'les variables du formulaire ne sont pas déclarées \')">';
  echo ' Les variables du formulaire ne sont pas déclarées.';
  //header ('location: ./index.php');
}
?>