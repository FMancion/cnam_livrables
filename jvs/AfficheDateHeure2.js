// script de remplissage de lheure de creation dans le champ hidden

 //   alert(" remplissage de la date dans hidden");

 dateaujourdhui = new Date(); 
      $h = dateaujourdhui.getHours(); if( $h<10){ $h = "0"+$h;}
      $m = dateaujourdhui.getMinutes(); if( $m<10){$m = "0"+$m;}
      $s = dateaujourdhui.getSeconds(); if( $s<10) {$s = "0"+$s;}
      
document.getElementById("madate1").value = $h + ":" + $m + ":" + $s ;

