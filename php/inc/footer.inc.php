<?php

function footerinclude ($param) { ?>

 <h1> FIN DE PAGE SUR <?php echo $param ;?> </h1>
 Copyright © Franck M. CNAM - tous droits réservés <br>
 
 <a href='./index-connected.php'>Retour à l'accueil  -</a> <a href='./legales.php'> mentions légales</a><br>
 
 <div id="fb-root"></div>
 <div class="fb-like" data-href="https://www.facebook.com/Mystillus-1190677220995033/" 
 data-width="100" data-layout="standard" data-action="like" data-show-faces="true" data-share="true">
 </div>

 <?php
}
?>



<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


