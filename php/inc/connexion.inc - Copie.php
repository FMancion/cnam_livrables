
<?php

function afficherbdd($requete) { 

/* Declaration des variables de connexion a la BDD  */


$serveur='localhost' ;
$loginserveur='root' ;
$mdpserveur='' ;
$nombdd='cnam_recette' ;


/* CONNECTION serveur, definition du charset, connexion bdd, requete sql   */

$con = mysqli_connect ($serveur,$loginserveur,$mdpserveur) 
or die("impossible de se connecter : " .mysql_error()) ; /* affichage error si probleme */ 
$con->set_charset('utf8');
mysqli_select_db($con,$nombdd) ;

$resultat = mysqli_query($con,$requete) ;

/* affichage de toutes les donnees demandees par la requete sql   */

while ($donnees = @mysqli_fetch_row($resultat)) {
foreach ($donnees as $don) { echo $don.' | ' ;} ; } 
}

 ?> <br/> 

  
  