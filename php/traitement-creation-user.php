<!DOCTYPE html>
<html lang="fr">
<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS | creation user","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
  
<body> 
 <div id="conteneur">  
 
<?php   
session_start () ;

    /* declaration des variables */
  $madate1=$_GET['madate1'];
	$sujet=$_GET['sujet'];
	$sujetsql=$_GET['sujet'];
  
  switch ($sujet) {
    case "oui":  $sujetsql ="1"; break ;
    case "non":  $sujetsql ="0"; break ;
}
	$tc=$_GET['tc'];
	/* sécurisation php avant entrée en base */
    $login= htmlspecialchars ($_GET['login'],ENT_QUOTES) ;
    $pwd= htmlspecialchars ($_GET['password2'],ENT_QUOTES) ;
    $chemin= htmlspecialchars ($_GET['chemin'],ENT_QUOTES);
    if (empty($chemin) ) {$chemin = "no-ava.png";} 
      else {$chemin = $chemin;} 
     ?>

<article>

<?php 
  // insere dans la table user une nouvelle ligne 
  $requete = " INSERT INTO `user`( `login`, `password` , `typecompte`, `abonnement` , `avatar`)
				VALUES ( '$login', '$pwd', '$tc' , '$sujetsql', '$chemin') " ; 
 
  require("inc/connexion.inc.php"); 
  requetebdd( $requete) ;
 ?>
 

  <p> ma requete d'insert de la table article : <br/> "<?php echo $requete; ?>" </p>  
  
   
  <h1> Votre nouvel utilisateur a bien été envoyé en base :</h1>


      <!-- debut affichage tableau -->
<TABLE > 
  <TR> <TH> HEURE Création</TH> <TD> <?php echo $madate1 ?> </TD> </tr>
  <TR> <TH> login </TH> <TD> <?php echo $login ?>  </TD>  </tr></TR> 
  <TR> <TH> password </TH> <TD> <?php echo $pwd ?>  </TD> </TR> 
  <TR> <TH> newsletter </TH> <TD id="sujet"> <?php echo "$sujet" ?> </TD></TR> 
  <TR> <TH> type compte </TH> <TD id="tc"> <?php echo "$tc" ?> </TD> </TR> 
  <TR> <TH> avatar </TH><TD> <img id="avatar" alt="avatar" src="../img/<?php echo $chemin; ?>"/></TD></TR> 
</TABLE> 


      <h2><a href="./index-admin.php">retour vers back-office</a></h2>

</article>


    
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("creation_user"); 
?>
</footer>

</div>
    <script src="../jvs/afficheheure.js"></script>
    <script src="../jvs/largeurpage.js"></script>
    <script src="../jvs/affichermasquer.js"></script>
</body>
</html>

