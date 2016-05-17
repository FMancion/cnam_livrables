<!DOCTYPE html>
<html lang="fr">
<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS | creation article","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
  
<body> 
 <div id="conteneur">  
 
<?php   
session_start () ;
/* declaration des variables */
 $cat = $_GET['cat'];
 $titre=$_GET['titre'];
 // securisation 
 $contenu= htmlspecialchars ( $_GET['contenu'],ENT_QUOTES );
?>

<article>

<?php 
  // requete d'insertion d'un nouvel article 
  $requete = " INSERT INTO `article`( `titre`, `contenu` , `categorie`) VALUES ( '$titre', '$contenu', '$cat' ) " ; 
 
  require("inc/connexion.inc.php"); 
  requetebdd( $requete) ;
 ?>
  <p> ma requete d'insert de la table article : <br/> "<?php echo $requete; ?>" </p>  
  
   
<h1> Votre nouvel article a bien été envoyé en base :</h1>

<!-- début affichage du tableau résultat --> 
<TABLE > 
 <TR> <TH> CATEGORIE </TH>  <TD> <?php echo $cat ?> </TD> </TR> 
 <TR> <TH> TITRE </TH> <TD> <?php echo $titre ?> </TD> </TR> 
 <TR> <TH> CONTENU </TH>  <TD>  <?php echo htmlspecialchars($contenu); ?> </TD> </TR> 
</TABLE> 

<h2><a href="./index-admin.php">retour vers back-office</a></h2>

</article>


    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("creation_article"); 
?>
</footer>

</div>
    <script src="../jvs/afficheheure.js"></script>
    <script src="../jvs/largeurpage.js"></script>
    <script src="../jvs/affichermasquer.js"></script>
</body>
</html>

