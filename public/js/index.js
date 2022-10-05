// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.
// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
var markers = [];
function initAutocomplete() {
	var directionsService = new google.maps.DirectionsService();
    var directionsRenderer = new google.maps.DirectionsRenderer();
  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -33.8688, lng: 151.2195 },
    zoom: 13,
    mapTypeId: "roadmap",
  });
  var geocoder = new google.maps.Geocoder();
  directionsRenderer.setMap(map);
  
  // Create the search box and link it to the UI element.
  const input = document.getElementById("pac-input");
  const searchBox = new google.maps.places.SearchBox(input);

  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  // Bias the SearchBox results towards current map's viewport.
  map.addListener("bounds_changed", () => {
    searchBox.setBounds(map.getBounds());
  });
  let markersArray = [];
  google.maps.event.addListener(map, 'click', function(event) {
	  deleteMarkers();
	  geocoder.geocode({
    'latLng': event.latLng
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[0]) {
        $('input[name="location"]').val(results[0].formatted_address);
        $('#pac-input').val(results[0].formatted_address);
      }
    }
  });
  
   placeMarker(event.latLng, map);
   
});
document
        .getElementById("delete-markers")
        .addEventListener("click", deleteMarkers);
document.getElementById("submit").addEventListener("click", function () {
		
        calculateAndDisplayRoute(directionsService, directionsRenderer);
    });
  

  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener("places_changed", () => {
    const places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach((marker) => {
      //marker.setMap(null);
    });
    

    // For each place, get the icon, name and location.
    const bounds = new google.maps.LatLngBounds();

    places.forEach((place) => {
      if (!place.geometry || !place.geometry.location) {
        console.log("Returned place contains no geometry");
        return;
      }

      const icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25),
      };
      console.log(place);
      // Create a marker for each place.
      markers.push(
        new google.maps.Marker({
          map,
          icon,
          title: place.name,
          position: place.geometry.location,
        })
      );
	  var loc = place.geometry.location;
	  var lat = loc.lat();
		var lng = loc.lng();
		 $('#lat').val(lat);
		 $('#long').val(lng);
      
      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
	
    map.fitBounds(bounds);
  });
}
function clearOverlays(markersArray) {
  if (markersArray) {
    for (i in markersArray) {
      markersArray[0].setMap(null);
    }
  }
}
function placeMarker(location, map) {
	
	
    var marker = new google.maps.Marker({
        position: location, 
        map: map
		
    });
	var loc = location;
	  var lat = loc.lat();
		var lng = loc.lng();
		 $('#lat').val(lat);
		 $('#long').val(lng);
      
	markers.push(marker);
	
}
var delMarker = function (id) {
    marker = markers[id]; 
    marker.setMap(null);
}
function calculateAndDisplayRoute(directionsService, directionsRenderer) {
    var waypts = [];
    var checkboxArray = document.getElementById("waypoints");
    for (var i = 0; i < checkboxArray.length; i++) {
        if (checkboxArray.options[i].selected) {
            waypts.push({
                location: checkboxArray[i].value,
                stopover: true,
            });
        }
    }
    directionsService
        .route({
        origin: document.getElementById("start").value,
        destination: document.getElementById("end").value,
        waypoints: waypts,
        optimizeWaypoints: true,
        travelMode: google.maps.TravelMode.DRIVING,
    })
        .then(function (response) {
			//console.log(response);
        directionsRenderer.setDirections(response);
        var route = response.routes[0];
		console.log(route);
        var summaryPanel = document.getElementById("directions-panel");
        summaryPanel.innerHTML = "";
        // For each route, display summary information.
        for (var i = 0; i < route.legs.length; i++) {
            var routeSegment = i + 1;
            summaryPanel.innerHTML +=
                "<b>Route Segment: " + routeSegment + "</b><br>";
            summaryPanel.innerHTML += route.legs[i].start_address + " to ";
            summaryPanel.innerHTML += route.legs[i].end_address + "<br>";
            summaryPanel.innerHTML += route.legs[i].distance.text + "<br><br>";
        }
    })
        .catch(function (e) { /*return window.alert("Directions request failed due to " + status);*/ });
}
function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}
function hideMarkers() {
    setMapOnAll(null);
}
function deleteMarkers() {
    hideMarkers();
    markers = [];
	 $('#lat').val('');
	$('#long').val('');
	$('input[name="location"]').val('');
}
window.initAutocomplete = initAutocomplete;