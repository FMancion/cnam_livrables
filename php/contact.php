<!DOCTYPE html>
<html>
<head>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif] -->
<title> MYSTERES ET ILLUSIONS - FORMULAIRE DE CONTACT</title>
 <meta charset="utf-8"/>
 <meta name="AUTHOR" content="Franck M.">
 <meta name="Description" content="site scientifique sur des mysteres ou illusions d'optique, découvrez les stéréogrammes, le phénomène des mirages et des images subliminales" />	
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
 <link rel="stylesheet" href ="../css/standard.css"/>
 <link rel="shortcut icon" href="../images/projet.ico" />
</head>
	
<body>
  
<div id="conteneur">

<header>  
<a href ="./index.php" title="retour à l'accueil"> <img src="../images/cube_fou.jpg" id="logo"  ></a>

<?php   
 include ("./inc/header.inc.php"); headerinclude ("formulaire_contact"); 
  include ("inc/banniere.inc.php"); 
?>
<div id="block-user-login" >
<h1>Espace Membre</h1>
<?php  
 include ("./inc/userco.inc.php");
 ?>
  <!-- On affiche un lien pour fermer notre session -->
</div>
</header>

<aside>
<?php
 include ("inc/cookie.inc.php"); cookieinclude ("formulaire_contact");
?>
</aside>


<nav>
<ul id="menu">
<?php  
 include ("./inc/menu.inc.php"); 
 ?>
  </ul>
</nav>

    <section>
	 <fieldset>
      <legend>Formulaire de contact</legend>
      <form name="formulaire" method="GET"  id="mc-form" action="./traitement.php"  onSubmit ="return verifForm(this);" >
        <label>Veuillez indiquer le sujet de votre demande:</label>
        <input type="radio" name="sujet" id="sujet" value="contact" checked>demande de contact<br>
        <input type="radio" name="sujet" value="information">demande d'information<br>
        <input type="radio" name="sujet" value="amelioration">demande d'amélioration<br></br>
        <label>Nom (*) <input  type="text" name="nom" id="nom" onblur="NomAvecLettres(this)"  size="30px" "maxlength="50" required placeholder="pas de chiffres svp"/></label></br>
        <label>Message (*) <textarea cols="30" rows="4" name="message" id="message" placeholder="votre message, pas de caractères spéciaux" required onblur="MessSansCaractAnormaux(this);" /></textarea></label></br>
        <label>Mail (*) <input type="email" name="email" id="email" onblur="BonFormatMail(this)" maxlength="100" required placeholder="ex : exemple@domaine.fr "/></label></br>
        <input id="envoi" name="envoi" type="submit"  value="Envoyer"   />
        <input id="reset" name="reset" type="reset" value="Réinitialiser"/>
        </form>
     </fieldset>
	 <div id="carte_js"></div>
	</section>
            
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("formulaire_contact	"); 
?>
</footer>


</div>
  <script src="../js/verif_form.js"></script>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
  <script src="../js/map.js" type="text/javascript"></script>
</body>
</html>
