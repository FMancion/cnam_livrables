<!DOCTYPE html>
<html lang="fr">

<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS BEST LOGIN","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
  
<body> 
 <div id="conteneur">  
 
<article>
<h1> liste des contenus des articles :</h1>

<?php 
/* declaration des variables */

/* select pour rechercher le nom du login qui a fait le plus de modifs */
 $requete = " SELECT  id_user, login, count(*) as nombre_modifs 
				FROM user u right join modifier on u.id = id_user
				GROUP BY id_user,login HAVING count(*) = ( SELECT MAX(nb_modifs) FROM
				( SELECT count(*) as nb_modifs FROM modifier GROUP BY id_user ) m ) " ;
				
 $requete2 = " SELECT  id_user, id_article from modifier group by id_user " ;
 
 $requete3 = " SELECT  id_user, login, count(*) as nombre_modifs from modifier group by id_user " ;
 
 /* SELECT nofour, nomfour, count(*) as nombre_produits
FROM fournisseurs join acheter using(nofour)
GROUP BY nofour, nomfour HAVING count(*)=(SELECT MAX(nb_prod) FROM
(SELECT count(*) as nb_prod FROM acheter GROUP BY nofour) a); */

 require("inc/connexion.inc.php"); AffBestLoginTAB($requete) ;
 
?>  
   
   
   <p> ma requete de selection : <br/> "<?php echo $requete; ?>" </p> 
   
   <h2><a href="./index-admin.php" alt="mystillus admin" >retour vers back-office</a></h2>

</article>
    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("traitement_bestlogin"); 
?>
</footer>

</div>
</body>
</html>