  
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
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error()); 
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
  
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  
  
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
  
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  
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
  
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  
  $resultat2=mysqli_num_rows($resultat1);  
   echo "nombre de lignes trouvees: " . $resultat2 . "<br />";  ?>

   <!-- affichage du tableau résultat --> 
   
   <TABLE ><CAPTION> Résultats de la requete </CAPTION>
    <?php 
    while($data = mysqli_fetch_assoc($resultat1)) {  ?>
    <TR><TH> <?php echo $data['nom'] ; ?> </TH><TD> <?php echo $data['texte'] ; ?> </TD></TR>
    <?php }  ?>
   </TABLE>
 
  <?php
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
   echo "nombre de lignes trouvees: " . $resultat2 . "<br/>";
   
   // Les lignes du tableau

 //$lignes[] = array('Adriana', 'Lima');
 //$lignes[] = array('Candice', 'Swanepoel');

// Paramétrage de l'écriture du futur fichier CSV
$date = date("Y-m-d-h-i-s");
$chemin = '../csv/extract.csv';
$delimiteur = ';'; // Pour une tabulation, utiliser $delimiteur = "t";

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
   //foreach ($donnees as $don) {fputcsv($fichier_csv, $donnees, $delimiteur); } 
   {fputcsv($fichier_csv, $donnees, $delimiteur); } 
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
  
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  
  $resultat2=mysqli_num_rows($resultat1);  
  ?>
   nombre de lignes trouvees: <?php echo $resultat2 ?> <br />
   
   <!-- affichage du tableau résultat --> 
   
   <TABLE > 
     <CAPTION> Résultats de la requete </CAPTION>
     <?php while($data = mysqli_fetch_assoc($resultat1)) { ?>
     <TR><TH> <?php echo $data['titre'] ; ?> </TH><TD> <?php echo $data['contenu'] ; ?> </TD></TR>
     <?php } ?> 
   </TABLE>
   
   <?php
   //  on ferme la connexion à mysql  
    mysqli_close($con); 
   } 

// ---------- fonction 7 ----------extrait donnees base dans fichier csv  ------------------


function WriteCsv ($requete) {

// configuration de la base de données 
  $serveur=$_SERVER['HTTP_HOST'] ;
  $loginserveur='root' ;
  $mdpserveur='' ;
  $nombdd='u128572442_myst' ;

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
  
$host = $serveur ;
$user = $loginserveur ;
$pass = $mdpserveur ;
$db = $nombdd ;
$nom_fichier = 'export_messages.csv';


//format du CSV
$csv_terminated = "\n";
$csv_separator = ";";
$csv_enclosed = '"';
$csv_escaped = "\\";

// connexion à la base de données

  $con = mysqli_connect ($serveur,$loginserveur,$mdpserveur)
     or die("impossible de se connecter : " .mysqli_error()) ; /* affichage error si probleme */ 
  $con->set_charset('utf8');
  
  mysqli_select_db($con,$nombdd) 
  or die("impossible de selecter la base: " .mysqli_error()) ; /* affichage error si probleme */ 


// exécute la commande
//$result = mysqli_query($requete);
$result = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error()); 
$fields_cnt = mysqli_num_fields($result);

$schema_insert = '';

for ($i = 0; $i < $fields_cnt; $i++) {
    $l = $csv_enclosed . str_replace($csv_enclosed, $csv_escaped . $csv_enclosed,
    stripslashes(mysql_field_name($result, $i))) . $csv_enclosed;
    $schema_insert .= $l;
    $schema_insert .= $csv_separator;
} // fin for

$out = trim(substr($schema_insert, 0, -1));
$out .= $csv_terminated;

// Format des données
while ($row = mysqli_fetch_array($result))
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
//header("Content-Type: text/plain");
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=" . $nom_fichier);
echo $out;
exit;
}

// ---------- fonction 8 ---------- affiche id et titre des articles dans un select ------------------

function AffIdTitreSelect($requete) { 
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
  
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  
  $resultat2=mysqli_num_rows($resultat1);  
   echo "nombre de lignes trouvees: " . $resultat2 . "<br />";
   
  // boucle for pour afficher les titres en base 
  
  while($data = mysqli_fetch_assoc($resultat1)) {  ?>
  
  <option value= <?php echo $data['id'] ?> > <?php echo htmlentities ($data['titre']) ?> </option>   
		
  <?php } 

  //<option value="1">lignes de Nazca</option>

  // on ferme la connexion à mysql 
  mysqli_close($con); 
}


// ---------- fonction 9 ---------- affiche best login le plus de modifs dans tableau PAGE WEB------------------

function AffBestLoginTAB($requete) { 
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
  
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  
  $resultat2=mysqli_num_rows($resultat1);  ?>
  
   nombre de lignes trouvees: <?php echo $resultat2 ;?> <br />
   
   <!-- affichage du tableau résultat -->
   
   <TABLE ><CAPTION> Résultats de la requete </CAPTION>
     <?php while($data = mysqli_fetch_assoc($resultat1)) { ?>
     <TR><TH> id_user </TH> <TH> login </TH> <TH> nb_modifs </TH> </TR>
     <TD><?php echo ($data['id_user']) ; ?> </TD>
	 <TD><?php echo ($data['login']) ;?> </TD>
	 <TD><?php echo ($data['nombre_modifs']) ;?> </TD>
	 <?php } ?>  
   </TABLE> 
   <?php 
   
  // on ferme la connexion à mysql 
  mysqli_close($con); 
}



// ---------- fonction 10 ---------- affiche liste modifs par compte dans tableau PAGE WEB -----------------

function AffListLoginModifTAB($requete) { 
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
  
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  
  $resultat2=mysqli_num_rows($resultat1);  ?>
  
  <!-- affichage du tableau résultat -->
  
   nombre de lignes trouvees: <?php echo $resultat2 ;?> <br />
   
   <TABLE >
    <CAPTION> Résultats de la requete </CAPTION>
    <TR> <TH> id_user </TH> <TH> login </TH> <TH> nb_modifs </TH> </TR>
    <?php 
    while($data = mysqli_fetch_assoc($resultat1)) { ?>
     <TR>
	   <TD> <?php echo $data['id_user'] ;?> </TD>
	   <TD> <?php echo $data['login'] ?> </TD>
       <TD> <?php echo $data['nombre_modifs'] ;?> </TD>
	 </TR>
    <?php  } ?>  
  </TABLE>
  
  <?php 
  // on ferme la connexion à mysql 
  mysqli_close($con); 
}

// ---------- fonction 11 ---------- affiche liste comptes dans tableau PAGE WEB ------------------

function AffListUserTAB($requete) { 
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
  
  $resultat1 = mysqli_query($con,$requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysqli_error());  
  $resultat2=mysqli_num_rows($resultat1);  ?>
  
   nombre de lignes trouvees: <?php echo $resultat2 ;?> <br />
   
   <!-- affichage du tableau résultat --> 
   
    <TABLE >
      <CAPTION> Résultats de la requete </CAPTION>
      <TR> <TH>= = = = = = = </TH> <TD>= = = = = = = = = = = = = = = = = = = = =</TD></TR>

      <?php while($data = mysqli_fetch_assoc($resultat1)) { ?> 
   
      <TR> <TH> id </TH> <TD> <?php echo $data['id'] ;?> </TD> </TR>
      <TR> <TH> login </TH> <TD> <?php echo $data['login'] ;?> </TD> </TR>
      <TR> <TH> password </TH> <TD> <?php echo $data['password'] ;?> </TD> </TR>
      <TR> <TH> type compte </TH> <TD> <?php echo $data['typecompte'] ;?> </TD> </TR>
      <TR> <TH> abonnement </TH> <TD> <?php echo $data ['abonnement'] ;?> </TD> </TR>
      <TR> <TH> avatar </TH> 
		   <TD><img src="../img/<?php echo $data['avatar'] ;?> "id="avatar3" alt="avatar"></TD></TR> 
      <TR> <TH>= = = = = = = </TH> <TD>= = = = = = = = = = = = = = = = = = = = =</TD> </TR>
    
    <?php } ?>  
    </TABLE>
	
	<?php
	
  // on ferme la connexion à mysql 
  mysqli_close($con); 
  
}

 ?> 

 
 
 
 
 