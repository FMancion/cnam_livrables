
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre site)

//session_start ();

$ndom=$_SERVER['HTTP_HOST'] ;

if ($_SERVER['HTTP_HOST'] == 'localhost' )  { 
  //echo ' <li><a href ='.$ndom.'/php/index.php title="accueil">accueil</a></li>' ;
  //if ($_SESSION['typecpte']== "Administrateur" ) {
	//    echo ' <li><a href ="./index_admin.php" title="accueiladmin">accueiladmin</a></li>' ;
  //} else {
	//  echo ' <li><a href ="./index_user.php" title="accueil">accueil</a></li>' ;
  //}
  echo "<h3>navigation sur " . $ndom. "</h3>";
  echo ' <li><a href ="./index_connected.php" title="index">accueil</a></li>' ;
  echo ' <li><a href ="./index_admin.php" title="index_admin">back-office</a></li>' ;
  echo ' <li><a href ="./mysteres.php" title="mystères">mystères</a></li>' ;
  echo ' <li><a href ="./illusions.php" title="illusions">illusions</a></li>' ;
  echo ' <li><a href ="./contact.php" title="contact">Contact</a></li>' ;
  echo "<h3>liens externes</h3>";
  echo ' <li><a href ="http://positivr.fr/illusions-d-optique-gif/" title="22 illusions positivr">positivr</a></li>' ;
  echo ' <li><a href ="http://www.planet.fr/monde-sciences-10-mysteres-de-la-nature-toujours-inexpliques.546655.1608.html" title="mysteres scientifiques sciences 10">10 myst</a></li>' ;
  echo ' <li><a href ="http://soocurious.com/fr/8-cites-en-ruines-qui-restent-encore-un-mystere-pour-les-scientifiques/" title="mysteres scientifiques des cités en ruines">ruines</a></li>' ;

} else {
  echo "<h3>navigation sur " . $ndom . "</h3>";
  echo ' <li><a href ="/php/index_connected.php" title="index">accueil</a></li>' ;
  echo ' <li><a href ="/php/index_admin.php" title="index_admin">back-office</a></li>' ;
  echo ' <li><a href ="/php/mysteres.php" title="accueil">mystères</a></li>' ;
  echo ' <li><a href ="/php/illusions.php" title="accueil">illusions</a></li>' ;
  echo ' <li><a href ="/php/contact.php" title="contact">Contact</a></li>' ;
  echo "<h3>liens externes</h3>";
  echo ' <li><a href ="http://positivr.fr/illusions-d-optique-gif/" title="22 illusions positivr">positivr</a></li>' ;
  echo ' <li><a href ="http://www.planet.fr/monde-sciences-10-mysteres-de-la-nature-toujours-inexpliques.546655.1608.html" title="mysteres scientifiques sciences 10">10 myst</a></li>' ;
  echo ' <li><a href ="http://soocurious.com/fr/8-cites-en-ruines-qui-restent-encore-un-mystere-pour-les-scientifiques/" title="mysteres scientifiques des cités en ruines">ruines</a></li>' ;
}

?>











 


