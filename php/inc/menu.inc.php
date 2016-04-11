<?php
$ndom=$_SERVER['HTTP_HOST'] ;
if ($_SERVER['HTTP_HOST'] == 'localhost' )  { 
  echo "navigation sur : " . $_SERVER['HTTP_HOST'] . "<br />";
  echo ' <li><a href ="/mystillus_local/php/index.php" title="accueil">accueil</a></li>' ;
  echo ' <li><a href ="/mystillus_local/php/mysteres.php" title="mysteres">mysteres</a></li>' ;
  echo ' <li><a href ="/mystillus_local/php/illusions.php" title="illusions">illusions</a></li>' ;
  echo ' <li><a href ="/mystillus_local/php/contact.php" title="contact">Contact</a></li>' ;
} else {
  echo "navigation sur : " . $_SERVER['HTTP_HOST'] . "<br />";
  echo ' <li><a href ="/php/index.php" title="accueil">accueil</a></li>' ;
  echo ' <li><a href ="/php/mysteres.php" title="accueil">mysteres</a></li>' ;
  echo ' <li><a href ="/php/illusions.php" title="accueil">illusions</a></li>' ;
  echo ' <li><a href ="/php/contact.php" title="contact">Contact</a></li>' ;
}
?>








 


