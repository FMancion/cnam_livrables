<!DOCTYPE html>
<html lang="fr">

<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS VIDER MESS","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
  
<body> 
 <div id="conteneur">  
 
<article>
<h2> effacement complet de la table des messages :</h2>

<?php 
/* declaration des variables */
 $requete = " truncate table message " ; 
 require("inc/connexion.inc.php"); requetebdd($requete) ;
?>  

   <p> ma requete de selection : <br/> "<?php echo $requete; ?>" </p> 

   <h2> effacement complet de la table des messages effectué !!!:</h2>

   	<a href="./traitement-mess.php"><input type="button" id="backoff" title="extraire messages dans tableau page web" value="liste des messages"/></a></br>

   
   <h2><a href="./index-admin.php" alt="mystillus admin" >retour vers back-office</a></h2>

</article>
    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("vider messages"); 
?>
</footer>

</div>
</body>
</html>