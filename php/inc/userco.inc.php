<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre site)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	
	echo 'Votre login : '.$_SESSION['login'].' ' ;
	echo 'votre password : '.$_SESSION['pwd'].'.';
	echo 'votre type de compte : '.$_SESSION['typecpte'].'.';
	//echo 'Votre typeCpte : '.$_SESSION['typeCpte'].' ' ;
}
else {
	echo 'Vos variables de session ne sont pas déclarées.';
}
?>