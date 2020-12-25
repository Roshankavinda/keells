<!DOCTYPE html>
<html>
  <head>
    <title>Simple Markers</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWTriBYWJYEzM-ZxPwcZGQEibq1Y0oTic&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      function initMap() {
        const myLatLng = { lat: 7.0141499, lng: 79.9217751 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 14,
          center: myLatLng,
        });
        new google.maps.Marker({
          position: myLatLng,
          map,
          title: "Hello World!",
        });
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
  </body>
</html>