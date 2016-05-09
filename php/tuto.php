<!DOCTYPE html>
<html lang="fr">

<head>
<?php include ("./inc/head.inc.php"); headinclude ("MYSTILLUS - MODIF CONTENU", "site scientifique sur les mystères scientifiques et illusions d'optique"); 
?>
</head>
	
<body>
<?php include_once("inc/analyticstracking.inc.php") ; ?>
  
<div id="conteneur">

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("tuto1contenu"); 
?>
 <img src="../img/tuto.jpg" id="imageenhaut" alt="tuto" >	
</header>

<div id="block-user-login" >
<?php  
 include ("./inc/userco.inc.php");
 ?>
  <!-- On affiche un lien pour fermer notre session -->
</div>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("tuto1contenu");
?>
</aside>

<nav>
<!-- menu navigation pc -->
 <?php  
  include ("./inc/menu.inc.php"); 
  ?>
<!-- menu navigation mobile -->
 <?php  
  include ("./inc/menu-mobile.inc.php"); 
  ?>
</nav>

<section>
    <article>
	 <fieldset>
      <legend>TUTORIEL de saisie d'un nouveau contenu</legend>
      <p> 1- se connecter sur le site en admin </p>
      <p> 2- cliquer sur le lien backoffice </p>
      <p> 3- cliquer sur le bouton "modif contenu" </p>
      <p> 4- sélectionner le titre ( ex: damier d'adelson) </p>
      <p> 5- écrire le nouveau contenu </p>
      <p> 6- cliquer sur envoyer </p>
      <p> 7- vérifier votre nouveau contenu en visitant l'article concerné </p>
		</br>
		<h2><a href="./index-admin.php">retour vers back-office</a></h2>
     </fieldset>
	</article>
</section>

<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("tuto1contenu"); 
?>
</footer>


</div>
  <script src="../jvs/verif_form.js"></script>
</body>
</html>
