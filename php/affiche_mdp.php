<!DOCTYPE html>
<html lang="fr">
	<head>
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif] -->
  	<title> AFFICHE MOT DE PASSE </title>
		<meta charset="utf-8"/>
		<meta name="AUTHOR" content="Franck M.">
		<meta name="Description" content="site scientifique sur des mysteres ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales" />	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
		<link rel="stylesheet" href ="../css/standard.css"/>
		<link rel="stylesheet" href ="../css/mobile.css"/>
		<link rel="shortcut icon" href="../img/favicon.ico" />
	</head>
	
<body>
 <div id="conteneur">  
 
<header>  
<?php
 include ("inc/header.inc.php"); headerinclude ("aff_mdp");
?>
 <img src="../img/user_pass.jpg" id="imageenhaut"  >	
</header>

<div id="block-user-login" >
<h1>Espace Membre</h1>
<?php  
 include ("./inc/userco.inc.php");
 ?>
</div>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("aff_mdp");
?>
</aside>

<nav>
<!-- menu navigation pc -->
 <ul id="menu">
 <?php  
  include ("./inc/menu.inc.php"); 
  ?>
 </ul>
<!-- menu navigation mobile -->
  <ul id="navigationMenu">
 <?php  
  include ("./inc/menu-mobile.inc.php"); 
  ?>
  </ul>
</nav>


    <section>
      <legend>Formulaire de contact</legend>
    <fieldset>
      <form name="formulaire" method="GET"  id="formmdp" action="./traitement_mdp.php"  onSubmit ="return verifForm(this);" >
        <p>Veuillez indiquer le type de compte:</p>
        <input type="radio" name="tc" id="tc" value="admin" checked>admin<br>
        <input type="radio" name="tc" value="user">user<br>
        <p>Login (*) <input  type="text" name="login" id="login" onblur="NomAvecLettres(this)"  size="30px" "maxlength="50" required placeholder="pas d espace svp"/></p>
        <input id="envoi" name="envoi" type="submit"  value="Envoyer"   />
        <input id="reset" name="reset" type="reset" value="Réinitialiser"/>
       </form>
    </fieldset>
    </section>

            
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("aff_mdp"); 
?>
</footer>

</div>
  <script src="../jvs/AfficheOuMasquePassword.js"></script>
  <script src="../jvs/affichermasquer.js"></script>
  <script src="../jvs/verif_form.js"></script>
</body>
</html>
