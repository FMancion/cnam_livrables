<!DOCTYPE html>
<html lang="fr">

<!---- include head avec 2 paramètres title et content  -->
  <head>
  <?php
  include ("inc/head.inc.php"); headinclude ("MYSTILLUS création user","site scientifique sur les mystères scientifiques et illusions d'optique");
  ?>  
  </head>
	
<body>
<?php include_once("inc/analyticstracking.inc.php") ; ?>

 <div id="conteneur">  
 
<header>  
<?php
 include ("inc/header.inc.php"); headerinclude ("creation-user");
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
 include ("inc/cookie.inc.php"); cookieinclude ("creation-user");
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
	   <legend>Formulaire de création d'utilisateurs	</legend>
	   
		<form name="formulaire" method="GET" action="./traitement-creation-user.php" onSubmit="return verifForm(this);" >
  
		<label>Login : (*)</label>
		<input type="text" id="login" name="login" maxlength="10" placeholder=" sans symbole < ni > " required onblur="LoginSansInf(this);" > <span id="erreur1"></span> <br /><br>
        
		<label>Password : (*)</label> <input type="password" id="password1" name="password1" placeholder="10 caracteres max" maxlength="10" required onblur="PassCorrect(this);" > <span id="erreur2"></span> <br></br>
		<label>faire afficher les caractères du mot de passe</label>
		<input type="radio" name="enclair" value="radio2" checked onclick="masquer(this)">non 
		<input type="radio" name="enclair" value="radio1" onclick="afficher(this)">oui<br></br>
		<label>Confirmation : (*)</label>
		<input type="password" id="password2" name="password2" placeholder="10 caracteres max" maxlength="10" required onblur="MatchPass(this);" > <span id="erreur3"></span>  <br /><br>
    
		<label>type de compte</label>
			<select name="tc" id="tc">
			<option value="user" selected>user</option>
			<option value="admin">admin</option> 
			</select>   <br /><br>  
		<label>Abonnement a la newsletter</label>
			<select name="sujet" id="sujet">
			<option value="non" selected>non</option>
			<option value="oui">oui</option> 
			</select>   <br /><br>  
 
		<label> Lien vers votre avatar</label>
		<input type="text" id="chemin" name="chemin" placeholder=" ex : tintin.png " > <br /><br>
        
		<label></label>
		<input  type="hidden" name="madate1" id="madate1" value="madate1" >
    
		<input id="envoi" name="envoi" type="submit"  value="Envoyer" /> <span id="erreur4"></span> 

		</form>
	   
      </fieldset>
	 </article>
    </section>

            
<footer>
<?php   
 include ("./inc/footer.inc.php");  footerinclude ("creation-user"); 
?>
</footer>

</div>
  <script src="../jvs/AfficheDateHeure2.js"></script>
  <script src="../jvs/AfficheOuMasquePassword.js"></script>
  <script src="../jvs/VerifFormulaire.js"></script>
</body>
</html>
