
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
 include ("inc/header.inc.php"); headerinclude ("accueil principal");
 include ("inc/cookie.inc.php"); cookieinclude ("accueilprincipal");
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


<section>	
<article>
 <h1>Accueil - Présentation du site</h1>
 <p>Ce site, développé par Franck M. du Cnam de Bourges, a pour but de vous faire partager divers mystères et illusions d'optique, et d'en expliquer le fonctionnement. Vous trouverez sur certains mots des informations info-bulles supplémentaires. Bonne navigation !</p> 
</article>
<article>
 <h2><a href="./html/mysteres.html">MYSTERES</a></h2>
 <p>Présentation de divers mystères scientifiques, élucidés ou non, sous divers formats avec description et explications. </p>
 <h2><a href="./html/illusions.html">ILLUSIONS</a ></h2>
 <P> Présentation d'incroyables illusions d'optique, sous divers formats( vidéos, photos, ...) avec description et explications .</p>
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