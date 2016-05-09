
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
  ?>
  <h3>navigation sur <?php echo $ndom ; ?> </h3> 
  <ul id="menu">
  <li><a href ="./index-connected.php" title="index"  >accueil</a></li>
  <li><a href ="./index-admin.php" title="index_admin"  >back-office</a></li>
  <li><a href ="./mysteres.php"  title="mysteres"  >mystères</a></li>
  <li><a href ="./lignes-nazca.php" title="mysteres"  >lignes de Nazca</a></li>
  <li><a href ="./peintures-sw.php" title="mysteres"  >peintures SW</a></li>
  <li><a href ="./lasbolas.php" title="mysteres"  >LasBolas</a></li>
  <li><a href ="./illusions.php" title="illusions"  >illusions</a></li>
  <li><a href ="./damier-adelson.php" title="illusions"  >damier Adel</a></li>
  <li><a href ="./lignes-piano.php" title="illusions"  >lignes piano</a></li>
  <li><a href ="./contact.php" title="contact" >Contact</a></li>
  </ul>
  <?php } else { ?>
  <h3>navigation sur <?php echo $ndom ; ?> </h3> 
  <ul id="menu">
  <li><a href ="/php/index-connected.php" title="index"  >accueil</a></li>
  <li><a href ="/php/index-admin.php" title="index_admin"  >back-office</a></li>
  <li><a href ="/php/mysteres.php"  title="mysteres"  >mystères</a></li>
  <li><a href ="/php/lignes-nazca.php" title="mysteres"  >lignes de Nazca</a></li>
  <li><a href ="/php/peintures-sw.php" title="mysteres"  >peintures SW</a></li>
  <li><a href ="/php/lasbolas.php" title="mysteres"  >LasBolas</a></li>
  <li><a href ="/php/illusions.php" title="illusions"  >illusions</a></li>
  <li><a href ="/php/damier-adelson.php" title="illusions"  >damier Adel</a></li>
  <li><a href ="/php/lignes-piano.php" title="illusions"  >lignes piano</a></li>
  <li><a href ="/php/contact.php" title="contact"   >Contact</a></li>
 </ul>
 <?php } ?>













 


