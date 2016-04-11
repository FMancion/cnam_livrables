<!DOCTYPE html>
<html>
	<head>
  	<title> RESULTATS FORMULAIRE </title>
		<meta charset="utf-8"/>
		<meta name="AUTHOR" content="David C. et Franck M.">
		<meta name="Description" content="site scientifique sur des mysteres ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales" />	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		<link rel="stylesheet" href ="../css/standard.css"/>
		<link rel="shortcut icon" href="./images/projet.ico" />
	</head>
<body>
 <div id="conteneur">  
 
<?php   
 include ("./php/inc/header.inc.php"); headerinclude ("Accueil"); 
 include ("./php/inc/menu.inc.php"); menuinclude ("Accueil"); 

 
/* declaration des variables */
 $nom=$_GET['nom'];
 $sujet=$_GET['sujet'];
 $message=$_GET['message'];
 $email=$_GET['email'];
?>

<h1>message de contact reçu:</h1>
<section>
<TABLE > 
  <CAPTION> Résultats du formulaire </CAPTION> 
  <TR> 
 <TH> nature de la demande </TH> 
 <TD>  <?php  echo "$sujet" ?> </TD> 
  </TR> 
    <TR> 
 <TH> NOM </TH> 
 <TD> <?php echo $nom ?></TD> 
  </TR> 
 
  <TR> 
 <TH> MAIL </TH> 
 <TD> <?php echo $email ?></TD> 
  </TR> 
  <TR> 
 <TH> MESSAGE </TH> 
 <TD> <?php echo $message ?></TD> 
  </TR> 
 <TR> 
 <TH> LARGEUR PAGE (temps réel)</TH> 
 <TD>  <div id="largeurPage">0</div> pixels </TD> 
 </TR> 

</TABLE> 

<?php 


/* Declaration des variables de connexion a la BDD  */

$serveur='mysql.hostinger.fr' ;
$loginserveur='u128572442_myst' ;
$mdpserveur='pacmak33' ;
$nombdd='u128572442_myst' ;

/* CONNECTION serveur, definition du charset, connexion bdd, requete sql   */

// on se connecte à MySQL 
//$db = mysqli_connect('mysql.hostinger.fr', 'u128572442_myst', 'pacmak33','u128572442_myst'); 
//$db = mysqli_connect('mysql.hostinger.fr', 'u128572442_myst', 'pacmak33'); 
//$db = mysqli_connect('localhost'); 

// on sélectionne la base 
//mysqli_select_db('u128572442_myst',$db); 

$con = mysqli_connect ($serveur,$loginserveur,$mdpserveur) 
or die("impossible de se connecter : " .mysqli_error()) ; /* affichage error si probleme */ 
$con->set_charset('utf8');
mysqli_select_db($con,$nombdd) ;

// on crée les requête SQL 

$requete1 = " INSERT INTO message(nom, texte, mail) VALUES ('$nom','$message','$email') " ; 
//$sql2 = " UPDATE contacts SET `LOGIN`= 'mafoufou1' where login = 'mafoufou' " ; 
$requete2 = " SELECT nom,texte FROM message" ; 

// on envoie les requêtes 

$resultat1 = mysqli_query($con,$requete1) or die('Erreur SQL !<br>'.$requete1.'<br>'.mysqli_error());  ;
$resultat2 = mysqli_query($con,$requete2) or die('Erreur SQL !<br>'.$requete2.'<br>'.mysqli_error()); ;

/* affichage de toutes les donnees demandees par la requete sql   */
// on fait une boucle qui va faire un tour pour chaque enregistrement 

//while ($donnees = @mysqli_fetch_row($resultat2)) {
//foreach ($donnees as $don) {echo $don.' | ' ;	} ;  } 
	
while($data = mysqli_fetch_assoc($resultat2))     { 
    echo '<b>'.$data['nom'].' '.$data['texte'].'</b><br>'; 
} 



// on ferme la connexion à mysql 
mysqli_close($con); 


?> 

</section>

      <article>
    <button onclick="affichermasquer(this)">faire apparaitre ou enlever lien sur formulaire</button>
    <p id="amasquer"><a href ="../html  /contact.html">retour formulaire</a></p>
    
    </article>
    
<?php   
 include ("./php/inc/footer.inc.php"); 
 footerinclude ("Accueil"); 
?>

</div>
    <script src="../js/afficheheure.js"></script>
    <script src="../js/timeout.js"></script>
    <script  src="../js/largeurpage.js"></script>
    <script src="../js/affichermasquer.js"></script>
</body>
</html>