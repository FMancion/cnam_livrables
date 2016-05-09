<!DOCTYPE html>
<html lang="fr">

<head>
<?php include ("./inc/head.inc.php"); headinclude ("MYSTILLUS - creation-article", "site scientifique sur des mystères ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales"); 
?>
</head>
	
<body>
<?php include_once("./inc/analyticstracking.inc.php") ; ?>
  
<div id="conteneur">

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("creation-article"); 
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
 include ("inc/cookie.inc.php"); cookieinclude ("creation-article");
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
      <legend>Formulaire de création d'un article</legend>
      <form name="formulaire" method="GET"  id="mc-form" action="./traitement-creation-article.php"  onSubmit ="return verifForm(this);" >
		    <label>Veuillez séctionner la catégorie:</label></br>
     		<select name="cat" id="cat">
			<option value="mysteres" selected>mystères</option>
			<option value="illusions">illusions</option>
			</select>  

        <p>Titre (*) <input  type="text" name="titre" id="titre" onblur="NomAvecLettres(this)"  maxlength="15" required placeholder="ex:le cube fou"/></p>
					
        <!-- <input type="radio" name="sujet" value="lignespiano">lignes piano<br></br> -->
		
        <label>nouveau contenu (*) <textarea  name="contenu" id="contenu" rows="5" cols="20" placeholder="votre message, pas de caractères spéciaux" required onblur="MessSansCaractAnormaux(this);" /></textarea></label></br>
        <input id="envoi" name="envoi" type="submit"  value="Envoyer"   />
        <input id="reset" name="reset" type="reset" value="Réinitialiser"/>
		</br>
        </form>
		</br>
     </fieldset>
	</article>
</section>

<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("creation-article"); 
?>
</footer>


</div>
  <script src="../jvs/verif_form.js"></script>
</body>
</html>
