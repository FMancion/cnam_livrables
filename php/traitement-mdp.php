<!DOCTYPE html>
<html lang="fr">

<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("TRAITEMENT MDP","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
  
<body>
 <div id="conteneur">  
 
<?php   
/* declaration des variables */
 $tc=$_GET['tc'];
 $login=$_GET['login'];
?>

<article>
<h1>votre demande est acceptee:</h1>

<?php 
 $requete= "SELECT distinct password FROM user WHERE login='$login' AND typecompte='$tc'";
 
  require("inc/connexion.inc.php"); 
   $motdepasse = rendvaleur($requete) ; 
   //$pass_crypte = crypt($motdepasse ,'4q'); // On crypte le mot de passe
   $nblignes = rendnblignes ($requete) ; 
   
   if ( $nblignes == 0 ) { ?> 
      nb de lignes trouvées : <?php echo $nblignes ;?> <br /> 
	  aucun mot de passe trouvé pour le login <?php echo $login ?> <br />
     <?php } else { ?>
     nb de lignes trouvées : <?php echo $nblignes ;?> <br />
     le mot de passe de <?php echo $login ;?> est : <?php echo $motdepasse ;?> <br />
	 <!-- echo ' <p> mot de passe crypté pour unix est :<br /> ' . $pass_crypte . '</p> --> 
    <?php } ?>
	
      <p> ma requete est : <br/> "<?php echo $requete; ?>" </p> 
	  <h2><a href="./index-admin.php">retour vers back-office</a></h2>
</article>

  <!---- include footer avec 1 paramètre -->  
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("traitement MDP"); 
?>

<!---- include footer avec 1 paramètre -->
</footer>

</div>
    <script src="../jvs/afficheheure.js"></script>
    <script src="../jvs/largeurpage.js"></script>
    <script src="../jvs/affichermasquer.js"></script>
</body>
</html>