<html>
  <head>
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>

    <script type="text/javascript">
      window.onload = function() {
        L.mapquest.key = 'UBI3Wc0udk0csdys2DFuAJAdhxdX00E9';
        var directions = L.mapquest.directions();
        directions.route({
          start: 'Denver, CO',
          end: 'Boulder, CO',
          options: {
            enhancedNarrative: true
          }
        }, createMap);

        function createMap(error, response) {
          var map = L.mapquest.map('map', {
            center: [0,0],
            layers: L.mapquest.tileLayer('map'),
            zoom: 7
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
            compactResults: true,
            interactive: true,
            position : 'bottomleft'
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

<?php 

echo "
    <script type='text/javascript'>
      window.onload = function() {
        L.mapquest.key = 'UBI3Wc0udk0csdys2DFuAJAdhxdX00E9';
        var directions = L.mapquest.directions();
        directions.route({
        locations: [".'"'.$lat.','.$lot.'"'.",";
             for ($ctr=0; $ctr < count($sorted); $ctr++) { 
                        echo '"'.$this->lat[$s[$ctr]].','.$this->lot[$s[$ctr]].'",';
                     
             }

 echo  "]
      }, createMap);
    function createMap(error, response) {
          var map = L.mapquest.map('map', {
            center: [0,0],
            layers: L.mapquest.tileLayer('map'),
            zoom: 7
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
            compactResults: true,
            interactive: true,
            position : 'bottomleft'
          });

          narrativeControl.setDirectionsLayer(directionsLayer);
          narrativeControl.addTo(map);
        }
    }
    </script>
";


 ?>