<html>
<body>

<?php

include ("inc/header.inc.php"); headerinclude ("cookie");

$expire = 600 ;  /* duree de vie du cookie (en sec) */ 
setcookie ("recette_nom","cookies",time()+$expire);  ?>


<a href="index.php">retour vers index.php</a>
  
</body>
</html>
  
  
  