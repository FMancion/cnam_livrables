 function initialize() {
  map = new google.maps.Map(document.getElementById("plan_canvas"), {
        zoom: 19,
        center: new google.maps.LatLng(47.082339, 2.399194),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });   
} 
 
if (navigator.geolocation)
  var watchId = navigator.geolocation.watchPosition(successCallback,
                            null,
                            {enableHighAccuracy:true});
else
  alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");    
 
function successCallback(position){
  map.panTo(new google.maps.LatLng(position.coords.latitude, position.coords.longitude));
  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude), 
    map: map
  }); 
}
