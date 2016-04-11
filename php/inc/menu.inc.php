<?php
$ndom=$_SERVER['HTTP_HOST'] ;
if ($_SERVER['HTTP_HOST'] == 'localhost' )  { 
  echo "<h4>navigation sur " . $_SERVER['HTTP_HOST'] . "</h4>";
  echo ' <li><a href ="/mystillus_local/php/index.php" title="accueil">accueil</a></li>' ;
  echo ' <li><a href ="/mystillus_local/php/mysteres.php" title="mysteres">mysteres</a></li>' ;
  echo ' <li><a href ="/mystillus_local/php/illusions.php" title="illusions">illusions</a></li>' ;
  echo ' <li><a href ="/mystillus_local/php/contact.php" title="contact">Contact</a></li>' ;
  echo "<h4>liens externes</h4>";
  echo ' <li><a href ="http://positivr.fr/illusions-d-optique-gif/" title="22 illusions positivr"> illu positivr</a></li>' ;
  echo ' <li><a href ="http://www.planet.fr/monde-sciences-10-mysteres-de-la-nature-toujours-inexpliques.546655.1608.html" title="mysteres scientifiques sciences 10">10 myst</a></li>' ;
  echo ' <li><a href ="http://soocurious.com/fr/8-cites-en-ruines-qui-restent-encore-un-mystere-pour-les-scientifiques/" title="mysteres scientifiques des cités en ruines">ruines</a></li>' ;

} else {
  echo "<h4>navigation sur " . $_SERVER['HTTP_HOST'] . "</h4>";
  echo ' <li><a href ="/php/index.php" title="accueil">accueil</a></li>' ;
  echo ' <li><a href ="/php/mysteres.php" title="accueil">mysteres</a></li>' ;
  echo ' <li><a href ="/php/illusions.php" title="accueil">illusions</a></li>' ;
  echo ' <li><a href ="/php/contact.php" title="contact">Contact</a></li>' ;
  echo "<h4>liens externes</h4>";
  echo ' <li><a href ="http://positivr.fr/illusions-d-optique-gif/" title="22 illusions positivr"> illu positivr</a></li>' ;
  echo ' <li><a href ="http://www.planet.fr/monde-sciences-10-mysteres-de-la-nature-toujours-inexpliques.546655.1608.html" title="mysteres scientifiques sciences 10">10 myst</a></li>' ;
  echo ' <li><a href ="http://soocurious.com/fr/8-cites-en-ruines-qui-restent-encore-un-mystere-pour-les-scientifiques/" title="mysteres scientifiques des cités en ruines">ruines</a></li>' ;
}
?>











 


