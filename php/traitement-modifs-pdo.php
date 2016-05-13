<!DOCTYPE html>
<html lang="fr">

<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("modifs","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
  
<body>
 <div id="conteneur">  
 
<article>
<h1> liste des modifications recues :</h1>

<?php 
/* declaration des variables */
 $requete = " SELECT  date, id_article, id_user from modifier order by id_article; " ; 
 $requete1 = " SELECT  count(*) from modifier ; " ; 
 
 include("inc/affiche-pdo.inc.php"); 
	affichepdo( 'date', 'id_article','id_user',$requete);
	//AfficheNBLignesPDO($requete1);
?>     
      <p> ma requete de sélection : <br/> "<?php echo $requete; ?>" </p> 
	  
      <h2><a href="./index-admin.php">retour vers back-office</a></h2>
</article>
    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("liste modifs"); 
?>
</footer>

</div>
</body>
</html>