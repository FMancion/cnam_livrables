<!DOCTYPE html>
<html lang="fr">
<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS MODIF CONTENU","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
  
<body> 
 <div id="conteneur">  
 
<?php   
session_start () ;
/* declaration des variables */
 $login = $_SESSION['login'] ;
 $id_titre=$_GET['id_titre'];
 //$contenu= mysql_real_escape_string ( $_GET['contenu'] ); // affiche les balises et caract mais ne les inteprete pas
 $contenu_brut =  $_GET['contenu'] ;
 $contenu= htmlspecialchars ( $_GET['contenu'] , ENT_QUOTES);
 $contenu2= htmlentities ( $_GET['contenu'] );
 //$contenu= mysqli_real_escape_string  ( string $contenu ) ; // affiche les balises et caract mais ne les inteprete pas
 //$contenu= htmlspecialchars ( $_GET['contenu'] ); // affiche en &lt;p&gt; &amp;é&quot;''(-è_ççà &lt;/p&gt 	
 //$contenu= htmlentities ( $_GET['contenu'] ); // affiche en eacute
 $date = date("Y-m-d-h-i-s");
 //$contenu = htmlspecialchars ($contenu) ;
 // securisation 
 //$contenu = mysqli_real_escape_string ($contenu) ;
?>

<article>

<?php 
 $requete1= "SELECT distinct contenu FROM article WHERE id='$id_titre' ";
 $requete2= "SELECT distinct id FROM user WHERE login='$login' ";
 
  require("inc/connexion.inc.php"); 
  $contenu_old=rendvaleur($requete1) ; 
  $id_login=rendvaleur($requete2) ; 
     
  //echo "l'ancien contenu de ".$titre." est : " . $contenu_old . "<br />";
 ?>
    <p> ma requete de selection 1: <br/> "<?php echo $requete1; ?>" </p> 
    <p> ma requete de selection 2: <br/> "<?php echo $requete2; ?>" </p> 

 <?php
  //$requete3 = ' UPDATE article set 	`contenu` = "$contenu" WHERE id= "$id_titre" ' ; 
  $requete3 = " UPDATE article set 	`contenu` = '$contenu' WHERE id= '$id_titre' " ; 
  //$requete4 = ' INSERT INTO `modifier`( `id_article`, `id_user` , `date`) VALUES ( "2", "5" , "2016-05-05 04:14:17" ) ' ; 
  $requete4 = " INSERT INTO `modifier`( `id_article`, `id_user` , `date`) VALUES ( '$id_titre', '$id_login', '$date' ) " ; 
 ?>   
  
  <p> ma requete d'update de la table article : <br/> "<?php echo $requete3; ?>" </p>
  <p> ma requete d'insert de la table modifier : <br/> "<?php echo $requete4; ?>" </p>
 
  <!-- <p> mon contenu demandé : <br/> "<?php echo $contenu_brut; ?>" </p>
   <p> mon contenu modifé avec htmlspecialchars : <br/> "<?php echo $contenu; ?>" </p>
  <p> mon contenu modifié avec htmlentities : <br/> "<?php echo $contenu2; ?>" </p> -->
  
  
  
  <?php
  requetebdd( $requete3) ;
  requetebdd( $requete4) ;
  ?> 
   
<h1> Votre nouveau contenu a bien été envoyé en base :</h1>
<TABLE > 
  <TR> 
 <TH> ANCIEN CONTENU </TH> 
 <TD> <?php echo $contenu_old ?> </TD> 
  </TR> 
 <TR> 
 <TH> NOUVEAU CONTENU HTML </TH> 
 <TD>  <?php echo $contenu ; ?> </TD> 
 </TR> 
 <TR> 
 <TH> NOUVEAU CONTENU EN BASE </TH> 
 <TD>  <?php echo htmlentities ($contenu) ; ?> </TD> 
 </TR> 
</TABLE> 
      <h2><a href="./index-admin.php">retour vers back-office</a></h2>

</article>


    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("modif_contenu"); 
?>
</footer>

</div>
    <script src="../jvs/afficheheure.js"></script>
    <script src="../jvs/largeurpage.js"></script>
    <script src="../jvs/affichermasquer.js"></script>
</body>
</html>

