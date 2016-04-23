<!DOCTYPE html>
<html lang="fr">
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	<title> TRAITEMENT MDP </title>
	<meta charset="utf-8"/>
	<meta name="AUTHOR" content="Franck M. CNAM Bourges">
	<meta name="Description" content="site scientifique sur des mysteres ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<link rel="stylesheet" href ="../css/standard.css"/>
	<link rel="stylesheet" href ="../css/mobile.css"/>
	<link rel="shortcut icon" href="../img/favicon.ico" />
  </head>
  
<body>
 <div id="conteneur">  
 
<?php   
/* declaration des variables */
 $tc=$_GET['tc'];
 $login=$_GET['login'];
?>

<article>
<h1>votre demande est acceptee:</h1>

<?php 
 $requete= "SELECT distinct password FROM user WHERE login='$login' AND typecompte='$tc'";
 
  require("inc/connexion.inc.php"); 
   $motdepasse = rendvaleur($requete) ; 
   $nblignes = rendnblignes ($requete) ; 
   
   if ( $nblignes == 0 ) { 
      echo "nb de lignes trouvées : " . $nblignes . "<br />";
	  echo "aucun mot de passe trouvé pour le login ".$login." <br />";
   } else { 
     echo "nb de lignes trouvées : " . $nblignes . "<br />";
     echo "le mot de passe de ".$login." est : " . $motdepasse . "<br />";
   }
   
  
?>     
      <p> ma requete est : <br/> "<?php echo $requete; ?>" </p> 
	  <h2><a href="./index_admin.php">retour vers back-office</a></h2>
</article>

    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("traitement MDP"); 
?>
</footer>

</div>
    <script src="../jvs/afficheheure.js"></script>
    <script  src="../jvs/largeurpage.js"></script>
    <script src="../jvs/affichermasquer.js"></script>
</body>
</html>