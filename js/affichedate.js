var $monchamp1 = document.getElementById("madate1");
    var $monchamp2 = document.getElementById("madate2");
 
    var $date1   = new Date();
    var $jour     = $date1.getDate();
    var $mois    = $date1.getMonth()+1;
    var $annee  = $date1.getFullYear();
    
    $monchamp1.innerHTML = 'date brute : '+$date;1
    $monchamp2.innerHTML = "Dernière modification : " + $jour + "/" + $mois + "/" + $annee ;
    