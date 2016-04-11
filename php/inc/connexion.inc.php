
<?php

// fonction 1 --- applique juste une requete dans la base

function requetebdd($requete) { 
  /* Declaration des variables de connexion a la BDD  */
  
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

  
  /* CONNECTION serveur, definition du charset, connexion bdd, requete sql   */
  // on se connecte à MySQL 
  // on sélectionne la base 
  $con = mysqli_connect ($serveur,$loginserveur,$mdpserveur) 
  or die("impossible de se connecter : " .mysqli_error()) ; /* affichage error si probleme */ 
  $con->set_charset('utf8');
  mysqli_select_db($con,$nombdd) 
  or die("impossible de selecter la base: " .mysqli_error()) ; /* affichage error si probleme */ 
  // on crée les requête SQL 
  $requete2 = " SELECT nom,texte FROM message" ; 
  // on envoie les requêtes 
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  ;
  $resultat2 = mysqli_query($con,$requete2) or die('Erreur SQL !<br>'.$requete2.'<br>'.mysqli_error()); ;
  $resultat3=mysqli_num_rows($resultat2);
  
  /* affichage de toutes les donnees demandees par la requete sql   */
  // on fait une boucle qui va faire un tour pour chaque enregistrement 
  
  //while ($donnees = @mysqli_fetch_row($resultat2)) {
  //foreach ($donnees as $don) {echo $don.' | ' ;	} ;  } 	
  
  while($data = mysqli_fetch_assoc($resultat2)) { 
    echo '<b>'.$data['nom'].' '.$data['texte'].'</b><br>'; 
  } 
  echo "nombre de lignes : " . $resultat3 . "<br />";
  
	
  // on ferme la connexion à mysql 
  mysqli_close($con); 
}


// fonction 2 --- retourne le nombre de lignes

function rendnblignes($requete) { 
    /* Declaration des variables de connexion a la BDD  */
	
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
  
  /* CONNECTION serveur, definition du charset, connexion bdd, requete sql   */
  $con = mysqli_connect ($serveur,$loginserveur,$mdpserveur) 
  or die("impossible de se connecter : " .mysqli_error()) ; /* affichage error si probleme */ 
  $con->set_charset('utf8');
  mysqli_select_db($con,$nombdd) 
  or die("impossible de selecter la base: " .mysqli_error()) ; /* affichage error si probleme */ 
  
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  ;
  
	$resultat2=mysqli_num_rows($resultat1);
  //$resultat2=mysqli_fetch_field($resultat1);

  return $resultat2; 
  
    //if( $resultat2[0] == 0) {   echo "vous n'avez pas de compte";   }  else  {    echo "oui il y a un compte";   }	
  // on ferme la connexion à mysql 
  mysqli_close($con); 
}


// fonction 3 --- retourne une valeur d'un champ

function rendvaleur($requete) { 
    /* Declaration des variables de connexion a la BDD  */
	
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
  
  /* CONNECTION serveur, definition du charset, connexion bdd, requete sql   */
  $con = mysqli_connect ($serveur,$loginserveur,$mdpserveur) 
  or die("impossible de se connecter : " .mysqli_error()) ; /* affichage error si probleme */ 
  $con->set_charset('utf8');
  mysqli_select_db($con,$nombdd) 
  or die("impossible de selecter la base: " .mysqli_error()) ; /* affichage error si probleme */ 
  
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  ;
  $resultat2=mysqli_num_rows($resultat1);
  
   echo "nombre de lignes trouvees: " . $resultat2 . "<br />";

    //while($data = mysqli_fetch_assoc($resultat1)) { 
    //echo '<b>'.$data['password'].'</b><br>'; 
    //echo '<b>'.$data['password'].' '.$data['typecompte'].'</b><br>'; 
    //} 
  while ($donnees = @mysqli_fetch_row($resultat1)) {
  foreach ($donnees as $don) {return $don ;} ;  } 	
  //$resultat2=mysqli_fetch_field($resultat1);
  //return $resultat1; 
  
  // on ferme la connexion à mysql 
  mysqli_close($con); 
}


// fonction 4 --- affiche lignes dans un tableau PAGE WEB

function AfficheReqBddTAB($requete) { 
    /* Declaration des variables de connexion a la BDD  */
	
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
  
  /* CONNECTION serveur, definition du charset, connexion bdd, requete sql   */
  $con = mysqli_connect ($serveur,$loginserveur,$mdpserveur) 
  or die("impossible de se connecter : " .mysqli_error()) ; /* affichage error si probleme */ 
  $con->set_charset('utf8');
  mysqli_select_db($con,$nombdd) 
  or die("impossible de selecter la base: " .mysqli_error()) ; /* affichage error si probleme */ 
  
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  ;
  $resultat2=mysqli_num_rows($resultat1);  
   echo "nombre de lignes trouvees: " . $resultat2 . "<br />";
   
echo "<TABLE >";
echo '<CAPTION> Résultats de la requete </CAPTION>' ;
  while($data = mysqli_fetch_assoc($resultat1)) { 
  echo '<TR><TH>'.$data['nom'].'</TH><TD> '.$data['texte'].'</TD></TR>'; 
  } 
echo "</TABLE> ";

  // on ferme la connexion à mysql 
  mysqli_close($con); 
}


// fonction 5 --- extrait donnees dans un fichier .csv

function ExtraireMessCSV($requete) { 
    /* Declaration des variables de connexion a la BDD  */
	
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
  
  /* CONNECTION serveur, definition du charset, connexion bdd, requete sql   */
  $con = mysqli_connect ($serveur,$loginserveur,$mdpserveur) 
  or die("impossible de se connecter : " .mysqli_error()) ; /* affichage error si probleme */ 
  $con->set_charset('utf8');
  mysqli_select_db($con,$nombdd) 
  or die("impossible de selecter la base: " .mysqli_error()) ; /* affichage error si probleme */ 
  
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  ;

  $resultat2=mysqli_num_rows($resultat1);  
   echo "nombre de lignes trouvees: " . $resultat2 . "<br />";
   
   // Les lignes du tableau

 //$lignes[] = array('Adriana', 'Lima');
 //$lignes[] = array('Candice', 'Swanepoel');

// Paramétrage de l'écriture du futur fichier CSV
$chemin = './inc/csv/extraxt.csv';
$delimiteur = ','; // Pour une tabulation, utiliser $delimiteur = "t";

// Création du fichier csv (le fichier est vide pour le moment)
$fichier_csv = fopen($chemin, 'w+');

// Si votre fichier a vocation a être importé dans Excel,
// vous devez impérativement utiliser la ligne ci-dessous pour corriger
// les problèmes d'affichage des caractères internationaux (les accents par exemple)
fprintf($fichier_csv, chr(0xEF).chr(0xBB).chr(0xBF));

// Boucle foreach sur chaque ligne du tableau
	// chaque ligne en cours de lecture est insérée dans le fichier
	// les valeurs présentes dans chaque ligne seront séparées par $delimiteur

  while ($donnees = @mysqli_fetch_row($resultat1)) {
  foreach ($donnees as $don) {fputcsv($fichier_csv, $donnees, $delimiteur); } 	
  }
// fermeture du fichier csv
fclose($fichier_csv);

  // on ferme la connexion à mysql 
  mysqli_close($con); 
}

 ?> 