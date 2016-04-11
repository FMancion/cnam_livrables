<html>
<body>

<?php

session_start() ;

include ("inc/header.inc.php"); headerinclude ("session");

$recette_nom="soupe de légume"; $_SESSION['recette_nom'] = $recette_nom; 
 ?>

<p> j'envoie en session" <?php echo $recette_nom; ?>"</p>

<p><a href="index.php">retour vers index.php</a></p>
  
</body>
</html>
  