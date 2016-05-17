		<!DOCTYPE html>
<html lang="fr">

<head>
<?php include ("./inc/head.inc.php"); headinclude ("MYSTILLUS - MODIF CONTENU", "site scientifique sur des mystères ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales"); 
?>
</head>
	
<body>
<?php include_once("./inc/analyticstracking.inc.php") ; ?>
  
<div id="conteneur">

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("modifcontenu"); 
?>
 <img src="../img/newspaper.png" id="imageenhaut" alt="mystillus journal" >	
</header>

<div id="block-user-login" >
<?php  
 include ("./inc/userco.inc.php");
 ?>
  <!-- On affiche un lien pour fermer notre session -->
</div>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("modifcontenu");
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
      <legend>Formulaire de changement de contenu</legend>
      <form name="formulaire" method="GET"  id="mc-form" action="./traitement-modif-contenu.php"  onSubmit ="return verifForm(this);" >
        <label>Veuillez indiquer l'article concerné:</label></br>
		
        <!-- <select name="id_titre" id="id_titre">
			<option value="1">lignes de Nazca</option>
			<option value="2">peintures de SW</option>
			<option value="3">boules Las Bolas</option>
			<option value="4">damier d'Adelson</option>
			<option value="5">lignes piano</option>
		</select>  -->
			
		<!-- boucle for pour afficher les titres en base-->	
		<select name="id_titre" id="id_titre">
		<?php 
		$requete= "SELECT id,titre FROM article ";
		AffIdTitreSelect ($requete) ;
		?>
		</select>
		
        <label>nouveau contenu (*) <textarea  name="contenu" id="contenu" rows="5" cols="20" placeholder="votre message, pas de caractères spéciaux" required onblur="MessSansCaractAnormaux(this);" /></textarea></label></br>
        <input id="envoi" name="envoi" type="submit"  value="Envoyer"  onClick="alert('ATTENTION VOUS ALLEZ MODIFIER LE CONTENU D\'UN ARTICLE !!! ')" />
        <input id="reset" name="reset" type="reset" value="Réinitialiser"/>
		</br>
        </form>
		</br>
     </fieldset>
	</article>
</section>

<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("modifcontenu"); 
?>
</footer>


</div>
  <script src="../jvs/verif_form.js"></script>
</body>
</html>
