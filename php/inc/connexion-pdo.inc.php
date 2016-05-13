<?php /* fichier cnam/nfa017/2015regc3-bdd/inc/connexionpdo.inc.php - 20160320-PBO */

  function connexionpdo() {

/* Variables de connexion à la BDD ================================== */

if ( $_SERVER['HTTP_HOST'] == 'localhost' ) { 
  $serveur=$_SERVER['HTTP_HOST'] ;
  $loginserveur='root' ;
  $mdpserveur='' ;
  $nombdd='u128572442_myst' ;
} 
if ( $_SERVER['HTTP_HOST'] == 'mystillus.esy.es' ){
  $serveur='mysql.hostinger.fr' ;
  $loginserveur='u128572442_myst' ;
  $mdpserveur='dragon18' ;
  $nombdd='u128572442_myst' ;
  }
  
if ( $_SERVER['HTTP_HOST'] == 'mystillus.hol.es' ){
  $serveur='mysql.hostinger.fr' ;
  $loginserveur='u353141068_myst' ;
  $mdpserveur='dragon18' ;
  $nombdd='u353141068_myst' ;
  }

    
/* CONNEXION serveur, définition du charset, connexion BDD, requete SQL ============== */

    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8';
    $con = new PDO('mysql:host='.$serveur.';dbname='.$nombdd, $loginserveur, $mdpserveur, $pdo_options); // Connexion à la BDD
    return $con; /* pour ré utiliser l'identifiant de connexion pour executer les requetes */
  } ?>
