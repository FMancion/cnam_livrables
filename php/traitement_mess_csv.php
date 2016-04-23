<!DOCTYPE html>
<html lang="fr">
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	<title> AFFICHE MESSAGES csv</title>
	<meta charset="utf-8"/>
	<meta name="AUTHOR" content="Franck M. CNAM Bourges">
	<meta name="Description" content="site scientifique sur des mysteres ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<link rel="stylesheet" href ="../css/standard.css"/>
	<link rel="stylesheet" href ="../css/mobile.css"/>
	<link rel="shortcut icon" href="../img/favicon.ico" />
  </head>
  
<body> ;
 <div id="conteneur">  
 
<article>

<h1> generation du fichier extract.csv :</h1>

<?php 
/* declaration des variables */
 $requete = " SELECT  nom,texte FROM  message " ; 
 //require("inc/connexion.inc.php"); ExtraireMessCSV($requete) ;
  require("inc/connexion.inc.php"); WriteCsv($requete) ;
?>     
?>     
      <p> ma requete de selection : <br/> "<?php echo $requete; ?>" </p> 
      
	  <h1> le fichier extract.csv est généré sur le répertoire <?php echo $_SERVER['HTTP_HOST']?>/php/inc/csv </h1>
	  
	  <p> vous pouvez le télecharger en ciquant sur le lien ci-dessous </p>
	  <h2><a href="./inc/csv/">download file</a></h2>
	  
      <h2><a href="./index_admin.php">retour vers back-office</a></h2>

</article>

    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("traitementmess_csv"); 
?>
</footer>

</div>
    <script src="../js/afficheheure.js"></script>
    <script  src="../js/largeurpage.js"></script>
    <script src="../js/affichermasquer.js"></script>
</body>
</html>