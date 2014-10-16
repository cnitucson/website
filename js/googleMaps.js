function createMap(containerid, parameters) {
  var mymap = document.getElementById(containerid),
  map_options = {
    zoom: 13,
    scrollwheel: false,
    /* rest of options */
  },
  map = new google.maps.Map(mymap, map_options);

  /* 'rest of code' to take parameters into account */
}