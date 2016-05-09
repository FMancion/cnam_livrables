	<!DOCTYPE html>
<html lang="fr">
<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS - MENTIONS LEGALES","site scientifique sur des mystères ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales");
  ?>  
  </head>
	
<body>
<?php include_once("inc/analyticstracking.inc.php") ; ?>
<div id="conteneur">

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("mentions_legales"); 
?>
 <img src="../img/legales.jpg" id="imageenhaut"  alt="mystillus legales">	
</header>

<div id="block-user-login" >
<?php  
 include ("./inc/userco.inc.php");
 ?>
  <!-- On affiche un lien pour fermer notre session -->
</div>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("legales");
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
 <h3>Mentions legales</h3>
   <h1>Identité</h1>
    <p>
Identité

Raison sociale : CNAM_FM.
Siège social : ave de lattre De Tassigny 18000 BOURGES.
SIRET : 197534712 00561
Tél. :  02 18 69 18 30
cnam@cnam-centre.fr
</p>
   <h1>Gestion du site internet</h1>
   <p>
Directeur de la publication : M. Franck Mancion.
Réalisation éditoriale : M. Franck Mancion.
Webmaster : M. Franck Mancion
Hébergement : rue coursarlon, Bourges
   </p>
   <h1>Utilisation des cookies sur le site internet</h1>
   <p>
   Ce site utilise des cookies informatiques. Ils sont utilisés pour contribuer à la sécurité de ce site internet, suivre le panier d'achats, permettre les sessions d'utilisateurs autentifiés, enregistrer la langue de l'utilisateur, analyser la fréquentation du site.
   </p>
   <h1>CNIL</h1>
   <p>Lorsque des données présentes sur ce site ont un caractère nominatif, les utilisateurs doivent en faire un usage conforme aux réglementations en vigueur et aux recommandations de la Commission nationale de l’informatique et des libertés (CNIL).
   </p>
   <h1>Copyright CNAM_FM 2016</h1>
   <p>
   Les informations présentées sur ce site sont publiques. La reproduction des pages de ce site est autorisée à la condition d’y mentionner la source et de créer un lien sur la ou les pages de référence. Elles ne peuvent être utilisées á des fins commerciales ou publicitaires.
   </p>

</p> 
</article>
</section>

	
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("mentions_légales"); 
?>
</footer>

</div>

</body>
</html>