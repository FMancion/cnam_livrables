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

<?php 
/* declaration des variables */
 $num = $_GET['num'];
 // *** requete pour effacer une ligne user ***
 $requete = " delete from user where id=$num " ; 
 $requete2 = " select * from user where id=$num " ; 
 
 require("inc/connexion.inc.php"); $nb_id = rendnblignes ($requete2) ;
 
  if ( $nb_id < 1 ) { ?> 
    <p> ma requete de sélection : <br/> "<?php echo $requete2 ; ?>" </p> 
    <h2> aucun compte trouvé avec l'id num <?php echo $num ?>  </h2>   
   
    <?php } else {  
    
    requetebdd($requete) ; ?> 
    <p> ma requete de delete : <br/> "<?php echo $requete; ?>" </p> 
     <h2> user numéro <?php echo $num ?> effacé !!! </h2>   
    <?php }  ?>  


	 <a href="./traitement-liste-user.php"><input type="button" id="backoff" title="liste user" value="liste des comptes"/></a><br>

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