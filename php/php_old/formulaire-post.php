<html>
<body>

<?php

include ("inc/header.inc.php"); headerinclude ("formulaire-post"); ?>

<form action="index.php" method="POST" name='formulairepost'> <!-- debut du formulaire -->
  <p>recette name<input type='text' id='recette_nom' name='recette_nom' autofocus /></p>
  <p><input type='submit' value='Envoyer' /></p>
  </form>
  
</body>
</html>
  