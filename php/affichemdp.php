<!DOCTYPE html>
<html>
	<head>
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif] -->
  	<title> FORMULAIRE </title>
		<meta charset="utf-8"/>
		<meta name="AUTHOR" content="David C. et Franck M.">
		<meta name="Description" content="site scientifique sur des mysteres ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales" />	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
		<link rel="stylesheet" href ="../css/standard.css"/>
		<link rel="shortcut icon" href="./images/projet.ico" />
	</head>
	
<body>
 <div id="conteneur">  
 <a href ="../index.php"> <img src="../images/logo.png" width="80%" height="130px" align="center" ></a>

<header>  
<?php   
 include ("./inc/header.inc.php"); headerinclude ("Accueil"); 
?>
</header>

<nav>
<ul id='menu'>
<?php  
 include ("./inc/menu.inc.php"); 
 //include ("./php/inc/menu.inc.php"); menuinclude ("mystillus.esy.es"); 
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

    <section>
    <aside>
      <h2>Formulaire de contact</h2>
    </aside>
    <fieldset>
      <form name="formulaire" method="GET"  id="mc-form" action="./traitementmdp.php"  onSubmit ="return verifForm(this);" >
        <p>Veuillez indiquer le type de compte:</p>
        <input type="radio" name="tc" id="tc" value="admin" checked>admin<br>
        <input type="radio" name="tc" value="user">user<br>
        <p>Login (*) <input  type="text" name="login" id="login" onblur="NomAvecLettres(this)"  size="30px" "maxlength="50" required placeholder="pas d espace svp"/></p>
        <input id="envoi" name="envoi" type="submit"  value="Envoyer"   />
        <input id="reset" name="reset" type="reset" value="Réinitialiser"/>
        </div>
       </form>
    </fieldset>
    </section>

            
	<footer>
		Copyright © David et Franck - tous droits réservés
    <a href="../index.html">Retour à l'accueil</a>
    <a href="./legales.html">Lien vers mentions légales</a>
	</footer>

</div>
  <script src="../js/AfficheOuMasquePassword.js"></script>
  <script src="../js/affichermasquer.js"></script>
  <script src="../js/verif_form.js"></script>
</body>
</html>
