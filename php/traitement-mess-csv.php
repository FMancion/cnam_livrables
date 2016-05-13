<!DOCTYPE html>
<html lang="fr">
<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS MESSAGES CSV","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
  
<body> ;
 <div id="conteneur">  
 
<article>

<h1> generation du fichier extract.csv :</h1>

<?php 
/* declaration des variables */
  //$requete = " SELECT  nom,texte FROM  message " ; 
  $requete = " SELECT  * FROM  message  order by nom" ; 
  require("inc/connexion.inc.php"); ExtraireMessCSV($requete) ;
  //require("inc/connexion.inc.php"); WriteCsv ($requete) ;
?>     
   
      <p> ma requete de selection : <br/> "<?php echo $requete; ?>" </p> 
      
	  <h1> le fichier extract.csv est généré sur le répertoire <?php echo $_SERVER['HTTP_HOST']?>/csv </h1>
	  
	  <p> vous pouvez le télecharger ou l'ouvrir en ciquant sur le bouton ci-dessous </p>
	  <!-- <h2><a href="../csv/extract.csv">download file</a></h2> -->
    <h2><a href="../csv/extract.csv"><input type="button" id="backoff" title="extraction fichier csv" value="extraction fichier csv"/></a><br></h2>
	  
      <br><h2><a href="./index-admin.php">retour vers back-office</a></h2>

</article>

    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("traitementmess_csv"); 
?>
</footer>

</div>
</body>
</html>