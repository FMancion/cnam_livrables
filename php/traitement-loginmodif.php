<!DOCTYPE html>
<html lang="fr">

<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS | login modifs","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
  
<body> 
 <div id="conteneur">  
 
<article>
<h1> liste des contenus des articles :</h1>

<?php 
/* declaration des variables */

/* select pour lister les login avec leur nombre de modifs */
 
 $requete = " SELECT  id_user, login, count(*) as nombre_modifs from modifier m left join user u
				on m.id_user = u.id group by id_user " ;
 
 require("inc/connexion.inc.php"); AffListLoginModifTAB($requete) ;
 
?>  
   
   
   <p> ma requete de selection : <br/> "<?php echo $requete; ?>" </p> 
   
   <h2><a href="./index-admin.php" alt="mystillus admin" >retour vers back-office</a></h2>

</article>
    
<!---- include footer avec 1 paramètre -->
<footer> 
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("traitement_loginmodifs"); 
?>
</footer>

</div>
</body>

</html>