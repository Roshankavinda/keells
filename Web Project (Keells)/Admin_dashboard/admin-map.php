<?php
include_once 'header.php';
include_once 'locations_model.php';
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
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
  
    var map;
    var marker;
    var infowindow;
    var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
    var purple_icon =  'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png' ;
    var locations = <?php get_all_locations() ?>;

      function initMap() {
        
        var france = {lat:  6.785277702704765, lng: 80.11392854687506};
        infowindow = new google.maps.InfoWindow();
map = new google.maps.Map(document.getElementById("map"), {
          center: france,
          zoom: 8,
        });



        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                animation: google.maps.Animation.DROP,
                icon :   locations[i][2] === '1' ?  red_icon  : purple_icon,
                html: document.getElementById('form')
            });


         

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    confirmed =  locations[i][1] === '1' ?  'checked'  :  0;
                    $("#status").prop(confirmed,locations[i][1]);
                    $("#id").val(locations[i][0]);
                    $("#lat").val(locations[i][1]);
                    $("#lng").val(locations[i][2]);
                    $("#name").val(locations[i][3]);
                    $("#phone").val(locations[i][4]);

                    phone
                
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }





    </script>
  </head>
  <body>
    <div id="map"></div>

   
    <div style="display: none" id="form"  >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">    

<div class="container" style="background-color: #61bc47;">
    <div class="card">

  

      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">ODER<i class="material-icons right"></i></span>

        
        <h5>Username:</h5>
          <textarea disabled id='name' placeholder='name'></textarea>

          <h5>pa:</h5>
          <textarea disabled id='phone' placeholder='name'></textarea>
  
 



       
        
        </p>
      </div>
     
    </div>
  </div>

    
     
  
        


  </body>
</html>