//Google Maps
// Enable the visual refresh
function initialize() {
	var myLatlng = new google.maps.LatLng(32.252047, -111.005131)
	google.maps.visualRefresh = true;
	var mapOptions = {
		scrollwheel: false,
		navigationControl: false,
		mapTypeControl: false,
		scaleControl: false,
		streetViewControl: false,
//		zoom: 14,
		zoom: 12,
		center: myLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
	
	var marker = new google.maps.Marker({
      position: myLatlng,
      map: map
  });
}
if (document.getElementById("map-canvas")) {
	google.maps.event.addDomListener(window, 'load', initialize);
}

var scrollToContacts = function() {
	document.getElementById('contactSection').scrollIntoView(true);
}