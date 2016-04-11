<?php


/* declaration des variables */

 $login=$_GET['login'];
 $pwd=$_GET['pwd'];
 $login_valide="admin";
 $pwd_valide="admin";
 
// On définit un login et un mot de passe de base pour tester notre exemple.
// Cependant, vous pouvez très bien interroger votre base de données afin de savoir
// si le visiteur qui se connecte est bien membre de votre site

 $requete = "select typecompte from user where login='$login' and password='$pwd' ";
 
 
 //require("inc/connexioncomptes.inc.php"); $typecpte=requetecomptebdd($requete) ;
     

 // on teste si nos variables sont définies
if (isset($_GET['login']) && isset($_GET['pwd'])) {
echo "<script language='javascript'>\nalert(\"Le d\351lai d\'attente est t ce site.\");\n</script>"; exit;
	// on vérifie les informations du formulaire, à savoir si le pseudo saisi 
	//est bien un pseudo autorisé, de même pour le mot de passe
	
	if ($login_valide == $_GET['login'] && $pwd_valide == $_GET['pwd']) {
		// dans ce cas, tout est ok, on peut démarrer notre session
		// on la démarre :)
		
		session_start ();
		
  // on enregistre les paramètres de notre visiteur comme variables de session 
  //($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
  
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['pwd'] = $_GET['pwd'];
		$_SESSION['TypeCpte'] = $typeCpte;

		// on redirige notre visiteur vers une page de notre section membre
		header ('location: ../index_admin.php');
	}
	else {
	// Le visiteur n'a pas été reconnu comme étant membre de notre site. 
	//On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		// echo '<meta http-equiv="refresh" content="0;URL=index.htm">';
		header ('location: ../index_user.php');
	}
}
else {
	echo ' variables du formulaire ne sont pas déclarées.';
}
?>