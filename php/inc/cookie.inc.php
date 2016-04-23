
<?php

function cookieinclude ($param) { 


$expire = 365*24*3600; // on définit la durée du cookie, 1 an


 //echo "SERVEUR_HTTP_COOKIE : " . $_SERVER['HTTP_COOKIE'] . "<br/>";
	

if (isset($_COOKIE[$param])) {
	echo "<p>tiens tiens...vous revoila sur la page $param .." ; 
   echo '	Votre cooki s\'appelle : '.$_COOKIE["$param"].' </p>' ;

} else {
   setcookie("$param","mys$param",(time()+$expire));
   // echo 'Votre cooki : '.$_COOKIE["$param"].' ' ;

 	echo "<p>bienvenue chez visiteur c'est la 1ere fois sur la page $param  ...</p>" ; 	
   //echo 'Votre cooki : '.$_COOKIE["$param"].' ' ;

 }
 
}

?>
 
