
<?php

// ------------ fonction 1 --- applique juste une requete dans la base -----------------------

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
  //$requete2 = " SELECT nom,texte FROM message" ; 
  // on envoie les requêtes 
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  ;
  //$resultat2 = mysqli_query($con,$requete2) or die('Erreur SQL !<br>'.$requete2.'<br>'.mysqli_error()); ;
  //$resultat3=mysqli_num_rows($resultat2);
  
  /* affichage de toutes les donnees demandees par la requete sql   */
  // on fait une boucle qui va faire un tour pour chaque enregistrement 
  
  //while ($donnees = @mysqli_fetch_row($resultat2)) {
  //foreach ($donnees as $don) {echo $don.' | ' ;	} ;  } 	
  
  //while($data = mysqli_fetch_assoc($resultat2)) { 
    //echo '<b>'.$data['nom'].' '.$data['texte'].'</b><br>'; 
   //} 
  //echo "nombre de lignes : " . $resultat3 . "<br />";
  
	
  // on ferme la connexion à mysql 
  mysqli_close($con); 
  }


// ------- fonction 2 ----------- retourne le nombre de lignes ---------------------------

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


// -------------- fonction 3 ------------- retourne une valeur d'un champ ----------------------------

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
  
   //echo "nombre de lignes trouvees: " . $resultat2 . "<br />";

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


// ---------------------- fonction 4 ------ affiche lignes dans un tableau PAGE WEB ---------------------

function AffMessTAB($requete) { 
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


// -------------- fonction 5 ------- extrait donnees dans un fichier .csv ---------------------------

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
$chemin = './inc/csv/extract.csv';
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

  //while ($donnees = @mysqli_fetch_row($resultat1)) {
  while ($donnees = @mysqli_fetch_assoc($resultat1)) {
  foreach ($donnees as $don) {fputcsv($fichier_csv, $donnees, $delimiteur); } 	
  }
  
// fermeture du fichier csv
  fclose($fichier_csv);

  // on ferme la connexion à mysql 
  mysqli_close($con); 
}

// ---------- fonction 6 ---------- affiche contenus des articles dans un tableau PAGE WEB------------------

function AffContTAB($requete) { 
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
  echo '<TR><TH>'.$data['titre'].'</TH><TD> '.$data['contenu'].'</TD></TR>'; 
  } 
echo "</TABLE> ";

  // on ferme la connexion à mysql 
  mysqli_close($con); 
}

// ---------- fonction 7 ----------extrait donnees base dans fichier csv  ------------------


function WriteCsv() {

// configuration de la base de données base de données
$serveur=$_SERVER['HTTP_HOST'] ;
  $loginserveur='root' ;
  $mdpserveur='' ;
  $nombdd='u128572442_myst' ;
  
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'u128572442_myst';
$nom_fichier = 'export_messages.csv';

//format du CSV
$csv_terminated = "\n";
$csv_separator = ";";
$csv_enclosed = '"';
$csv_escaped = "\\";

// requête MySQL
$sql_query = "SELECT * FROM message";

// connexion à la base de données
$link = mysql_connect($host, $user, $pass) or die("Je ne peux me connecter." . mysql_error());
mysql_select_db($db) or die("Je ne peux me connecter.");

// exécute la commande
$result = mysql_query($sql_query);
$fields_cnt = mysql_num_fields($result);

$schema_insert = '';

for ($i = 0; $i < $fields_cnt; $i++)
{
    $l = $csv_enclosed . str_replace($csv_enclosed, $csv_escaped . $csv_enclosed,
    stripslashes(mysql_field_name($result, $i))) . $csv_enclosed;
    $schema_insert .= $l;
    $schema_insert .= $csv_separator;
} // fin for

$out = trim(substr($schema_insert, 0, -1));
$out .= $csv_terminated;

// Format des données
while ($row = mysql_fetch_array($result))
{
    $schema_insert = '';
    for ($j = 0; $j < $fields_cnt; $j++)
    {
if ($row[$j] == '0' || $row[$j] != '')
{

    if ($csv_enclosed == '')
    {
$schema_insert .= $row[$j];
    } else
    {
$schema_insert .= $csv_enclosed .
    str_replace($csv_enclosed, $csv_escaped . $csv_enclosed, $row[$j]) . $csv_enclosed;
    }
} else
{
    $schema_insert .= '';
}

if ($j < $fields_cnt - 1)
{
    $schema_insert .= $csv_separator;
}
    } // fin for

    $out .= $schema_insert;
    $out .= $csv_terminated;
} // fin while

// Envoie au fureteur pour le téléchargement
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Length: " . strlen($out));
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=" . $nom_fichier);
echo $out;
exit;
}


 ?> 
 
 
 
 