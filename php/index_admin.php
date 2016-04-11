<!DOCTYPE html>
<html>
<head>
<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif] -->
<title> MYSTERES ET ILLUSIONS </title>
 <meta charset="utf-8"/>
 <meta name="AUTHOR" content="Franck M.">
 <meta name="Description" content="site scientifique sur des mysteres ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales" />	
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
 <link rel="stylesheet" href ="../css/standard.css"/>
 <link rel="shortcut icon" href="../images/projet.ico" />
</head>
	
<body>
  
<div id="conteneur">
<a href ="./index.php"> <img src="../images/logo.png" width="80%" height="130px" align="center" ></a>

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("Accueil_admin"); 
 include ("inc/cookie.inc.php"); cookieinclude ("accueil_admin");
?>
</header>

<nav>
<ul id="menu">
<?php  
 include ("./inc/menu.inc.php"); 
 //include ("./inc/menu.inc.php"); menuinclude ("mystillus.esy.es"); 
 ?>
  </ul>
</nav>

<div id="block-user-login" >
<?php  
 include ("./inc/userco.inc.php");
 ?>
  <!-- On affiche un lien pour fermer notre session -->
<a href="./logout.php"><input type="button" name="logout" value="logout"/></a>
</div>

<aside>
<h1>Accueil - Outils Back-Office</h1>
<a href="./affichemessages.php"><input type="button" name="extraire_messages"value="extraire messages dans tableau"/></a>
<a href="./extrairemessagescsv.php"><input type="button" name="extraire_messages_csv "value="extraire messages en .csv"/></a></br>
<a href="./modifcontenu.php"><input type="button" name="modif_contenu"value="modif contenu des articles"/></a>
<a href="./affichemdp.php"><input type="button" name="affich_emdp"value="affiche mot de passe"/></a>
</aside>
 
  
<section>	
<aside>
 <h1>Accueil - Présentation du site</h1>
 <p>Ce site, développé par Franck M. du Cnam de Bourges, a pour but de vous faire partager divers mystères et illusions d'optique, et d'en expliquer le fonctionnement. Vous trouverez sur certains mots des informations info-bulles supplémentaires. Bonne navigation !</p> 
</aside>
<article>
 <h2><a href="./html/mysteres.html">MYSTERES</a></h2>
 <p>Présentation de divers mystères scientifiques, élucidés ou non, sous divers formats avec description et explications. </p>
 <h2><a href="./html/illusions.html">ILLUSIONS</a ></h2>
 <P> Présentation d'incroyables illusions d'optique, sous divers formats( vidéos, photos, ...) avec description et explications .</p>
</article>
</section>
  
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("accueil_admin"); 
?>
</footer>

</div>
</body>
</html>