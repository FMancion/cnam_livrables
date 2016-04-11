<html>



<?php    /* objectif : transfert de données entre pages */ 
  session_start() ; 
  $titre=" index" ; 
  include ("inc/header.inc.php"); headerinclude ($titre); ?>
  
  <body>
  
<section>   <!-- les liens -->
  <h2> liens vers les pages php </h2> 
  <p><ol><li><a href="formulaire-post.php">formulaire-post.php</a></li>
    <li><a href="url-get.php">url-get.php</a></li>
    <li><a href="session.php">session.php</a></li>
    <li><a href="cookie.php">cookie.php</a></li>
    <li><a href="fichier.php">fichier.php</a></li>
    <li><a href="bdd-insert.php">bdd-insert.php</a></li>
    <li><a href="bdd-update.php">bdd-update.php</a></li>
  </ol></p>
</section>
    
<section>  <!-- affichage des résultats -->
  <h2>Affichage</h2>
  <p><ol><li><strong>formulaire POST : </strong>
      <?php if(isset($_POST['recette_nom'])) {echo $_POST['recette_nom'];} ?>
    </li>
    <li><strong>lien url avec parametre (url_get.php) : </strong>
      <?php if(isset($_GET['recette_nom'])) {echo $_GET['recette_nom'];} ?>
    </li>
    <li><strong>Session : </strong>
      <?php if(isset($_SESSION['recette_nom'])) {echo $_SESSION ['recette_nom'];} 
            session_unset (); /* suppression des variables de session */ ?>
    </li>
    <li><strong>cookies : </strong>
      <?php if(isset($_COOKIE['recette_nom'])) {echo $_COOKIE['recette_nom'];} ?>
    </li>
    <li><strong>fichier : </strong>
      <?php
      $lecturenomfichier=""; $r=opendir("./inc/"); /*ouverture du repertoire inc */
      while ($lecturenomfichier = readdir($r) ) { 
        if ($lecturenomfichier == "recette-fichier.txt") {
          $contenuentableau = file("./inc/".$lecturenomfichier); /* lignes du fichier */
          foreach ($contenuentableau as $don) {echo $don.'<br/>' ; } /* affichage lignes */
          unlink ("./inc/".$lecturenomfichier) ; /* supression du fichier */
        }
      }?>
    </li>
    <li> et 7. <strong> BDD : </strong><br/> 
    <?php  $requete1=" SELECT * from recette"; /* affiche les données de la table recette */
      require("inc/connexion.inc.php"); afficherbdd($requete1) ; ?>
  </ol></p>
</section>
</body>
</html>
    
   