<!DOCTYPE html>
<html lang="fr">

<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS CONTENUS","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
  
<body> 
 <div id="conteneur">  
 
<article>
<h1> liste des contenus des articles :</h1>

<?php 
/* declaration des variables */

 // requete de sélection du titre,contenu dans la table article 
 $requete = " SELECT  titre,contenu FROM article order by titre " ; 
 require("inc/connexion.inc.php"); AffContTAB($requete) ;
?>  
   
<a href="./modif-contenu.php"><input type="button" id="backoff" title="modifier le contenu des articles" alt="mystillus modif" value="modif contenu article"/></a></br> 
   <p> ma requete de selection : <br/> "<?php echo $requete; ?>" </p> 
   <h2><a href="./index-admin.php" alt="mystillus admin" >retour vers back-office</a></h2>

</article>
    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("traitement_contenu"); 
?>
</footer>

</div>
</body>
</html>