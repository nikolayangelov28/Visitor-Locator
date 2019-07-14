<!DOCTYPE html>
<html>

     <head>
         <link rel="stylesheet" 
href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
    
integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
    
integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
    crossorigin=""></script>

         <style>
             html, body, #map {
                 height: 90%;
                 width:  90%;
             }
             body {
                 padding: 0;
                 margin: 0;
             }
         </style>

         <title>Creating markers with popups and handling events</title>
         <link href="style.css" rel="stylesheet">
     </head>

     <body>
             <?php
			 
				$vn = $_GET["vn"];
                $nn = $_GET["nn"];
                $lat = $_GET["lat"];
                $long = $_GET["long"];
             ?>


         <div id="map"></div>
         <script type="text/javascript">
             var map = L.map('map', {
			center: [<?php echo"$lat,$long"?>],

                 zoom: 14
             });
             
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                 attribution: '&copy; OpenStreetMap contributors'
             }).addTo(map);
             L.marker([<?php echo"$lat,$long"?>], {
                 clickable: true
             })
                 .bindPopup("<?php echo "$vn $nn"?>")
                 .addTo(map);



         </script>

<div>
   <h2><a href="listVisitors.php"> back</a></h2>
</div>
     </body>

</html>
