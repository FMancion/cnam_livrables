
<?php

function cookieinclude ($param) { 


$expire = 365*24*3600; // on définit la durée du cookie, 1 an

date_default_timezone_set('Europe/Paris') ;
$date = date("d-m-Y");
$heure = date("H:i");


 //echo "SERVEUR_HTTP_COOKIE : " . $_SERVER['HTTP_COOKIE'] . "<br/>";
	
if (isset($_COOKIE[$param])) { ?>
	<p> => Le <?php echo $date ;?> à <?php echo $heure ;?><br> tiens tiens...vous revoila sur la page <?php echo $param ;?>
    ..Votre cooki s'appelle : <?php echo $_COOKIE["$param"] ;?> </p>
	
	<?php } else {
   setcookie("$param","mys$param",(time()+$expire)); ?>

 	<p> => Le <?php echo $date ;?> à <?php echo $heure;?>
	 bienvenue chez visiteur c'est la 1ère fois sur la page <?php echo $param ;?> ...</p>	

	 <?php  }
 
}

?>
 
