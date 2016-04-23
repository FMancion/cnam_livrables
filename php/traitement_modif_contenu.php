<!DOCTYPE html>
<html lang="fr">
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	<title> TRAITEMENT CONTACT </title>
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
 $titre=$_GET['titre'];
 $contenu=$_GET['contenu'];
 // securisation 
 $contenu = mysql_real_escape_string ($contenu) ;
?>

<article>

<?php 
 $requete1= "SELECT distinct contenu FROM article WHERE titre='$titre'";
 
  require("inc/connexion.inc.php"); 
  $contenu_old=rendvaleur($requete1) ; 
   
  //echo "l'ancien contenu de ".$titre." est : " . $contenu_old . "<br />";
 ?>
    <p> ma requete de selection : <br/> "<?php echo $requete1; ?>" </p> 

 <?php
  $requete2 = " UPDATE article set contenu='.$contenu.' WHERE titre='.$titre.' " ; 

  requetebdd($requete2) ;
  
 ?>   
 
 <p> ma requete de mise à jour : <br/> "<?php echo $requete2; ?>" </p>
   
<h1> Votre nouveau contenu a bien été envoyé en base :</h1>
<TABLE > 
  <TR> 
 <TH> ANCIEN CONTENU </TH> 
 <TD> <?php echo $contenu_old ?> </TD> 
  </TR> 
 <TR> 
 <TH> NOUVEAU CONTENU </TH> 
 <TD>  <?php echo ''.htmlspecialchars($contenu).''; ?> </TD> 
 </TR> 
</TABLE> 
      <h2><a href="./index_admin.php">retour vers back-office</a></h2>

</article>


    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("modif_contenu"); 
?>
</footer>

</div>
    <script src="../jvs/afficheheure.js"></script>
    <script src="../jvs/largeurpage.js"></script>
    <script src="../jvs/affichermasquer.js"></script>
</body>
</html>