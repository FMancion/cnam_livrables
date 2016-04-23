<!DOCTYPE html>
<html lang="fr">
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	<title> AFFICHE MESSAGES </title>
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
 
<article>
<h1> liste des contenus des articles :</h1>

<?php 
/* declaration des variables */
 $requete = " SELECT  titre,contenu FROM  article " ; 
 require("inc/connexion.inc.php"); AffContTAB($requete) ;
?>  
   
<a href="./modif_contenu.php"><input type="button" id="backoff" title="modifier le contenu des articles" value="modif contenu article"/></a></br> 
   <p> ma requete de selection : <br/> "<?php echo $requete; ?>" </p> 
   <h2><a href="./index_admin.php">retour vers back-office</a></h2>

</article>
    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("traitement_contenu"); 
?>
</footer>

</div>
    <script src="../jvs/afficheheure.js"></script>
    <script src="../jvs/largeurpage.js"></script>
    <script src="../jvs/affichermasquer.js"></script>
</body>
</html>