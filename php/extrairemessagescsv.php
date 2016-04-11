<!DOCTYPE html>
<html>
	<head>
  	<title> RESULTATS FORMULAIRE </title>
		<meta charset="utf-8"/>
		<meta name="AUTHOR" content="David C. et Franck M.">
		<meta name="Descri!ion" content="site scientifique sur des mysteres ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales" />	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		<link rel="stylesheet" href ="../css/standard.css"/>
		<link rel="shortcut icon" href="./images/projet.ico" />
	</head>
<body> ;
 <div id="conteneur">  
 
<?php   
 include ("./inc/header.inc.php"); headerinclude ("Accueil"); 
 include ("./inc/menu.inc.php"); 

 
/* declaration des variables */
?>

<h1> lste des messages recus :</h1>
<section>


<?php 
 $requete = " SELECT  nom,texte FROM  message " ; 
 require("inc/connexion.inc.php"); ExtraireMessCSV($requete) ;
?>     
      <p> ma requete d'insertion : <br/> "<?php echo $requete; ?>" </p> 
      
      <a href="./index.php">retour vers index.php</a>

</section>

      <article>
    <button onclick="affichermasquer(this)">faire apparaitre ou enlever lien sur formulaire</button>
    <p id="amasquer"><a href ="../html/contact.html">retour formulaire</a></p>
    
    </article>
    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("Accueil"); 
?>
</footer>

</div>
    <script src="../js/afficheheure.js"></script>
    <script  src="../js/largeurpage.js"></script>
    <script src="../js/affichermasquer.js"></script>
</body>
</html>