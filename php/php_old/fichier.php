<html>
<body>

<?php
include ("inc/header.inc.php"); headerinclude ("fichier");
/* Declaration des variables du nom de fichier et du contenu a inserer */
$nom_fichier="recette-fichier.txt" ; $rep="inc" ;
$recette_nom="carottes rapees";  /* le texte que je souhaite ecrire dans mon fichier  */
/* creation du fichier et de son contenu  */
  $res=fopen ($rep."/".$nom_fichier,"a+"); /* cree le fichier sil nexiste pas 
                                sinon ouvre le fichier en mode ecriture
                                positionne le curseur decriture a la fin du fichier */
                                
  fputs($res,$recette_nom) ;   /* insere les donnees dans le fichier */
  fclose($res);                 /* fermeture du fichier */         
 ?>

<p> dans le repertoire "<?php echo $rep; ?>", <br/>
    je cree le fichier "<?php echo $nom_fichier; ?>" et <br/>
    jy mets "<?php echo $recette_nom; ?>" </p>

<p><a href="index.php">retour vers index.php</a></p>
  
</body>
</html>
  