<?php



$loc = 'Binondo,Manila';

  //$Geocoding = file_get_contents("http://www.mapquestapi.com/geocoding/v1/address?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&location=".$loc.",Philippines");
$Geocoding2 = file_get_contents("https://us1.locationiq.com/v1/search.php?key=pk.afe673b433d0909e7601c9ea96162a9e&q=".$loc."&format=json");
     

  $geo = json_decode($Geocoding2, TRUE);


  //echo $lat =  $geo['results']['0']['locations']['0']['latLng']['lat'];
  //echo $lot =  $geo['results']['0']['locations']['0']['latLng']['lng'];

echo '<pre>',print_r($geo),'</pre>';
echo $geo[0]['lat'];
echo $geo[0]['lon'];
  

?>
<html>
  <head>
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.0/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.0/mapquest.css"/>
 
    <script type="text/javascript">
window.onload = function () {
    L.mapquest.key = 'UBI3Wc0udk0csdys2DFuAJAdhxdX00E9';

    addDirections();
    var directions;
    var directionsLayer; 

    function addDirections() {

      directions = L.mapquest.directions();
      directions.route({
        locations: ['53.16479066, 8.44645214', '53.255499, 8.396524','53.204197, 8.687951', '53.30287546, 8.58371019']
      }, createMap);
    }

    function createMap(err, response) {
      console.log(response);

      var map = L.mapquest.map('map', {
        center: L.mapquest.util.getCenterFromBoundingBox(response.route.boundingBox),
        layers: L.mapquest.tileLayer('map'),
        zoom: L.mapquest.util.getZoomFromBoundingBox(response.route.boundingBox) + 1
      });

      var DirectionsLayerWithCustomMarkers = L.mapquest.DirectionsLayer.extend({

        createStartMarker: function(location, stopNumber) {
          console.log(location);
          console.log(stopNumber);

                return L.mapquest.textMarker(location.latLng, {
                  text: 'Start',
                  type: 'marker',
                  icon: {
                    primaryColor: '#333333',
                    secondaryColor: '#333333',
                    size: 'sm',
                    symbol: stopNumber
                  }
                });

        },

        createWaypointMarker: function(location, stopNumber) {
         console.log(location);
         console.log(stopNumber);

                return L.mapquest.textMarker(location.latLng, {
                  text: stopNumber,
                  type: 'marker',
                  icon: {
                    primaryColor: '#333333',
                    secondaryColor: '#333333',
                    size: 'sm',
                    symbol: stopNumber
                  }
                });

        },

        createEndMarker: function(location, stopNumber) {
          console.log(location);
          console.log(stopNumber);

                return L.mapquest.textMarker(location.latLng, {
                  text: 'End',
                  type: 'marker',
                  icon: {
                    primaryColor: '#333333',
                    secondaryColor: '#333333',
                    size: 'sm',
                    symbol: stopNumber
                  }
                });

        }

      });

      directionsLayer = new DirectionsLayerWithCustomMarkers({
        directionsResponse: response
      }).addTo(map);

      var narrativeControl = L.mapquest.narrativeControl({
        directionsResponse: response,
        compactResults: false
      });

      narrativeControl.setDirectionsLayer(directionsLayer);
      narrativeControl.addTo(map);
    }
  }
    </script>
  </head>
  <body>
    <div id="results" style="width:100%; height:4%;">
      <font face="Arial">Distance:&nbsp;<span id="distance"></span>&nbsp;km,&nbsp;Time:&nbsp;<span id="drivetime"></span>
      <input type=hidden id="hasresult" value=0></font>
    </div>
    <div id="map" style="width:100%; height:95%;"></div>  
  </body>
</html>

