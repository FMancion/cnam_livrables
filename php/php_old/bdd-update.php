<html>

<body>

<?php   

  include ("inc/header.inc.php"); headerinclude ("bdd-update"); 
  
      $requete3=" UPDATE recette SET recette_nom = 'spaguetti' , recette_preparationtemps = 10 WHERE recette_id=3" ;
                  
      require("inc/connexion.inc.php"); afficherbdd($requete3) ; ?>
      
      <p> ma requete de mise a jour  : <br/> "<?php echo $requete3; ?>" </p> 
      
      <a href="index.php">retour vers index.php</a>

  
</body>
</html>


    
   