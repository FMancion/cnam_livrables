<br />
<?php

function cookieinclude ($param) { 


$expire = 365*24*3600; // on définit la durée du cookie, 1 an


 //echo "SERVEUR_HTTP_COOKIE : " . $_SERVER['HTTP_COOKIE'] . "<br/>";
 
 

if (isset($_COOKIE[$param])) {
	echo " message cookie : tiens tiens ... vous revoila sur la page $param .." ; 
   echo 'Votre cooki s\'appelle : '.$_COOKIE["$param"].' ' ;

} else {
   setcookie("$param","mystillus_page$param",(time()+$expire));
   // echo 'Votre cooki : '.$_COOKIE["$param"].' ' ;

 	echo "bienvenue chez visiteur c'est la 1ere fois sur la page $param  ..." ; 	
   //echo 'Votre cooki : '.$_COOKIE["$param"].' ' ;

 }
 
}

?>
 
