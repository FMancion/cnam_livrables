
<!DOCTYPE html>
<html>
<head>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif] -->
<title> MYSTERES ET ILLUSIONS </title>
 <meta charset="utf-8"/>
 <meta name="AUTHOR" content="Franck M. CNAM Bourges">
 <meta name="Description" content="site scientifique sur des mysteres ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales" />	
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
 <link rel="stylesheet" href ="../css/standard.css"/>
 <link rel="shortcut icon" href="../images/favicon.ico" />
</head>
	
<body>

<div id="conteneur">


<header>  
<?php
 include ("inc/header.inc.php"); headerinclude ("mentions_legales");
 include ("inc/cookie.inc.php"); cookieinclude ("mentions_legales");
?>

</header>

<nav>
<a href ="./index.php"> <img src="../images/cube_fou.jpg" width="20%" align="left" ></a>
<ul id="menu">
<?php  
 include ("./inc/menu.inc.php"); 
 //include ("./inc/menu.inc.php"); menuinclude ("mystillus.esy.es"); 
 ?>
  </ul>
</nav>

<div id="block-user-login" >
  <form name="formulaire" method="GET" action="./login.php" onSubmit="return verifForm(this);" >
    <label>Login : (*)</label>
    <input type="text" id="login" name="login" placeholder=" sans symbole < " required onblur="LoginSansInf(this);" > <span id="erreur1"></span> <br /><br>
    <label>Password : (*)</label> <input type="password" id="pwd" name="pwd" required onblur="PassCorrect(this);" > <span id="erreur2"></span> <br></br>
    <input id="envoi" name="envoi" type="submit"  value="Envoyer" /> <span id="erreur4"></span> 
    </form>
</div>

 <!-- <img id="imageenhaut" src="../images/mysteres/swnewyork.jpg" width="80%"  height="250px" align="center" ></a> -->

     <div class="bandef"><img src="../images/mysteres/swnewyork.jpg"><img src="../images/mysteres/maxresdefault.jpg"><img src="../images/mysteres/rocher.jpg"></div>
	 
<section>	
<article>
 <h3>Mentions legales</h3>
   <h1>Identité</h1>
    <p>
Identité

Raison sociale : NETPRESTA.
Siège social : 27 rue des granges Galand 37550 SAINT AVERTIN.
SIRET : 424-111-573 00020
Tél. : 06.70.77.59.79
netpresta[at]laposte.net
</p>
   <h1>Gestion du site internet</h1>
   <p>
   Directeur de la publication : M. Philippe BOUQUET.
Réalisation éditoriale : M. Philippe BOUQUET.
Webmaster : NetPresta domiciliée chez Néopol 27 rue des Granges Galand 37550 Saint-Avertin.
Hébergement : GANDI SAS, Société par Actions Simplifiée au capital de 300.000€,
ayant son siège social au 63-65 boulevard Masséna à Paris (75013) FRANCE.
   </p>
   <h1>Utilisation des cookies sur le site internet</h1>
   <p>
   Ce site utilise des cookies informatiques. Ils sont utilisés pour contribuer à la sécurité de ce site internet, suivre le panier d'achats, permettre les sessions d'utilisateurs autentifiés, enregistrer la langue de l'utilisateur, analyser la fréquentation du site.
   </p>
   <h1>CNIL</h1>
   <p>Lorsque des données présentes sur ce site ont un caractère nominatif, les utilisateurs doivent en faire un usage conforme aux réglementations en vigueur et aux recommandations de la Commission nationale de l’informatique et des libertés (CNIL).
   </p>
   <h1>Copyright NetPresta 2014</h1>
   <p>
   Les informations présentées sur ce site sont publiques. La reproduction des pages de ce site est autorisée à la condition d’y mentionner la source et de créer un lien sur la ou les pages de référence. Elles ne peuvent être utilisées á des fins commerciales ou publicitaires.
   </p>

</p> 
</article>
</section>

	
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("Accueil"); 
?>
</footer>

</div>
  <!-- <script src="../js/AfficheOuMasquePassword.js"></script>
  <script src="../js/VerifFormulaire.js"></script> -->

</body>
</html>