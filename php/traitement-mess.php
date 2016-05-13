<!DOCTYPE html>
<html lang="fr">

<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS MESSAGES","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
  
<body>
 <div id="conteneur">  
 
<article>
<h1> liste des messages recus :</h1>

<?php 
/* declaration des variables */
 $requete = " SELECT  nom,texte FROM  message order by nom" ; 
 
 require("inc/connexion.inc.php"); AffMessTAB($requete) ;
?>     
      <p> ma requete de sélection : <br/> "<?php echo $requete; ?>" </p> 
	  
      <h2><a href="./index-admin.php">retour vers back-office</a></h2>
</article>
    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("traitementmess"); 
?>
</footer>

</div>
    <script src="../jvs/afficheheure.js"></script>
    <script src="../jvs/largeurpage.js"></script>
    <script src="../jvs/affichermasquer.js"></script>
</body>
</html>