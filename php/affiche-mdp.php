<!DOCTYPE html>
<html lang="fr">

<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS AFFICHE MDP","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
	
<body>
<?php include_once("inc/analyticstracking.inc.php") ; ?>

 <div id="conteneur">  
 
<header>  
<?php
 include ("inc/header.inc.php"); headerinclude ("aff_mdp");
?>
 <img src="../img/user_pass.jpg" id="imageenhaut"  >	
</header>

<div id="block-user-login" >
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
	   <legend>Formulaire d'affichage de mot de passe</legend>
        <form name="formulaire" method="GET"  id="formmdp" action="./traitement-mdp.php"  onSubmit ="return verifForm(this);" >
        <p>Veuillez indiquer le type de compte:</p>
        <input type="radio" name="tc" id="tc" value="admin" checked>admin<br>
        <input type="radio" name="tc" value="user">user<br>
        <p>Login (*) <input  type="text" name="login" id="login" onblur="LoginSansInf(this)"  size="30px" "maxlength="50" required placeholder="sans < ni >"/></p>
        <input id="envoi" name="envoi" type="submit"  value="Envoyer"   />
        <input id="reset" name="reset" type="reset" value="Réinitialiser"/>
       </form>
      </fieldset>
	 </article>
    </section>

            
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("aff_mdp"); 
?>
</footer>

</div>
  <script src="../jvs/verif_form.js"></script>
</body>
</html>
