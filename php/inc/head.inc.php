<?php

function headinclude ($title, $content) { ?>

 	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	<meta charset="utf-8" />
	<meta name="AUTHOR" content="Franck M. CNAM Bourges" />
	<meta name="Description" content = "<?php echo $content ; ?>" />	
	<meta name="viewport" content = "width=device-width, initial-scale=1.0, user-scalable=yes" />
	<link rel="stylesheet" href ="../css/standard.css"/>
	<link rel="stylesheet" href ="../css/mobile.css"/>
	<link rel="shortcut icon" href="../img/favicon.ico" />
	<link rel="alternate" hreflang="fr" href="http://mystillus.esy.es/" />
	<title> <?php echo $title ; ?> | mystères scientifiques et illusions d'optique </title>
 
 <?php  } ?>

