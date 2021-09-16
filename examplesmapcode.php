<?php
$lat = '14.6507';
$lot = '121.1029';

$loc = 'Marikina';

?>
<html>
  <head>
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>

    <script type="text/javascript">
      window.onload = function() {
        L.mapquest.key = 'UBI3Wc0udk0csdys2DFuAJAdhxdX00E9';

        var map = L.mapquest.map('map', {
          center: [14.5995,120.9842],
          layers: L.mapquest.tileLayer('map'),
          zoom: 13
        });

        L.mapquest.directions().route({
          start: 'Manila',
          end: 'Makati',
        });
      }
    </script>
  </head>

  <body style="border: 0; margin: 0;">
    <div id="map" style="width: 100%; height: 530px;"></div>
  </body>
</html>

