<!DOCTYPE html>
<html lang="fr">
<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS | liste user","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
  
<body> 
 <div id="conteneur">  
 
<?php   
session_start () ;
?>

<article>
   <form name="formulaire" method="GET" action="./traitement-efface-user.php"  >
	<label>user numéro : (*)</label>
    <input type="text" id="num" name="num" maxlength="5" placeholder="id user " required onblur="NumQueChiffres(this);" > <br /><br>
    <input id="envoi" name="envoi" type="submit"  value="supprimer" />  
  </form>

<?php 
  //selection pour la liste des comptes
  $requete = "select * from user order by id ; " ; 
  require("inc/connexion.inc.php"); 
  AffListUserTAB( $requete) ;
 ?>
  <p> ma requete d'insert de la table article : <br/> "<?php echo $requete; ?>" </p>  
  
      <h2><a href="./index-admin.php">retour vers back-office</a></h2>

</article>

<footer>
<?php   
 include ("./inc/footer.inc.php"); footerinclude ("liste_user"); 
?>
</footer>

</div>
    <script src="../jvs/verif_form.js"></script>
</body>
</html>

