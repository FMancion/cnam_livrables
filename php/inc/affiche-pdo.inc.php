<?php /* fichier cnam/nfa017/regb/affichepdo.inc.php - 20160320-PBO */

  function affichepdo($champsselect1,$champsselect2,$champsselect3,$requete) {

/* variables ============================================================================ */
    /* $requete : requete a executer */
    /* $champsselect1 : 1er champ à afficher */
    /* $champsselect2 : 2e  champ à afficher */
    /* $champsselect3 : 3e  champ à afficher */
     
  
/* debug ============================================================================== */
    echo 'champ1 : '.$champsselect1.'<br/>';
    echo 'champ2 : '.$champsselect2.'<br/>';
    echo 'champ3 : '.$champsselect3.'<br/>';
    echo 'requete : '.$requete.'<br><br/>';
     
/* connexion BDD ====================================================================== */
    include("inc/connexion-pdo.inc.php"); $con=connexionpdo();
     
/* resultat requete SQL =============================================================== */
    $resultat = $con->query($requete);
      
/* Affichage de toutes les données demandées par la requête =========================== */
    while($donnees = $resultat->fetch()) { 
        echo $donnees[$champsselect1];
        if($champsselect2) {echo ' | '.$donnees[$champsselect2];  } 
        if($champsselect3) {echo ' | '.$donnees[$champsselect3];  } 
		?> <br/> <?php   } ?><br/><?php
  }
  
  
  