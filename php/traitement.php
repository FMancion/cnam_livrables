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
 $requete = " INSERT INTO message(nom, texte, mail) VALUES ('$nom','$message','$email') " ; 
 require("inc/connexion.inc.php"); requetebdd($requete) ;
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