<html>
  <head>
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>

<script type='text/javascript'>
window.onload = function () {
    L.mapquest.key = 'UBI3Wc0udk0csdys2DFuAJAdhxdX00E9';

    addDirections();
    var directions;
    var directionsLayer; 

    function addDirections() {

      directions = L.mapquest.directions();
      directions.route({
        locations: ["14.6554666,121.1104996","14.599984049754239,120.97424675592528","14.5809649,120.9884237","14.60273374,120.977521"]
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

  <body style="border: 0; margin: 0;">
    <div id="map" style="width: 100%; height: 530px;"></div>
  </body>
</html>


