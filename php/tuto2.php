<!DOCTYPE html>
<html lang="fr">

<head>
<?php include ("./inc/head.inc.php"); headinclude ("MYSTILLUS - creation article", "site scientifique sur les mystères scientifiques et illusions d'optique"); 
?>
</head>
	
<body>
<?php include_once("inc/analyticstracking.inc.php") ; ?>
  
<div id="conteneur">

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("tuto2-article"); 
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
 include ("inc/cookie.inc.php"); cookieinclude ("tuto2-article");
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
      <legend>TUTORIEL de saisie d'un nouvel article</legend>
      <p> 1- se connecter sur le site en admin </p>
      <p> 2- cliquer sur le lien backoffice </p>
      <p> 3- cliquer sur le bouton "création article" </p>
      <p> 4- sélectionner la catégorie </p>
      <p> 5- saisir un titre </p>
      <p> 6- écrire le contenu </p>
      <p> 7- cliquer sur envoyer </p>
      <p> 8- vérifier votre nouvel article en cliquant sur liste des contenus</p>
		</br>
		<h2><a href="./index-admin.php">retour vers back-office</a></h2>
     </fieldset>
	</article>
</section>

<!---- include footer avec 1 paramètre -->
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("tuto2-article"); 
?>
</footer>


</div>
  <script src="../jvs/verif_form.js"></script>
</body>
</html>
