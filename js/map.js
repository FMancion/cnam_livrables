/* coord tours  var $centreCarte = new google.maps.LatLng(46.389982, 0.688877); /* coordonnées geo    */
var $centreCarte = new google.maps.LatLng(47.097767, 2.412801); /* coordonnées geo    */
var $optionsCarte = {zoom: 18, center: $centreCarte }
var $macarte = new google.maps.Map(document.getElementById("carte_js"), $optionsCarte);
new google.maps.Marker({ position: $centreCarte, map: $macarte });