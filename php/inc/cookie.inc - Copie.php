
<?php

function cookieinclude ($param) { 

$expire = 365*24*3600; // on définit la durée du cookie, 1 an
echo 'Votre cooki : '.$COOKIE[$param].' ' ;

if (isset($_COOKIE['$param'])) {
	echo " message cookie : tiens tiens ... vous revoila sur la page $param.." ; 
} else {
 setcookie('$param', "mystillus", (time() + $expire));
 	echo "bienvenu c'est la 1ere fois sur la page $param  ..." ; 
 }
 
}
 ?>
  <?php

// unset cookies
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}

?>

<?php
$cookiesSet = array_keys($_COOKIE);
for ($x=0;$x<count($cookiesSet);$x++) setcookie($cookiesSet[$x],"",time()-1);
?>

<?php
$cookiesSet = array_keys($_COOKIE);
for ($x=0;$x<count($cookiesSet);$x++) setcookie($cookiesSet[$x],"",time()-1);
?>
 