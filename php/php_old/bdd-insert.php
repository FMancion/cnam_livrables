<html>

<body>

<?php   

  include ("inc/header.inc.php"); headerinclude ("bdd-insert"); 
  
      $requete2= " INSERT INTO recette (recette_nom,recette_preparationtemps,recette_categorie) VALUES ('quiches2',20,'plat')" ;
	  
      require("inc/connexion.inc.php"); afficherbdd($requete2) ; ?>
      
      <p> ma requete d'insertion : <br/> "<?php echo $requete2; ?>" </p> 
      
      <a href="index.php">retour vers index.php</a>

  
</body>
</html>
    
   