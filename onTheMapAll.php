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


			 $fname = "visitorsList.txt";
			 $handle = fopen($fname, "r");
			 if ($handle != FALSE){
				 $Friends = array();
				 while (($zeile = fgetcsv($handle, 0, ";")) !== FALSE){
					 $Friends[] = $zeile;
				 }
				 fclose($handle);
			 }
				 
    ?>

         <div id="map"></div>
         <script type="text/javascript">
		 
		 var fr = <?php echo json_encode ($Friends); ?>
		 
		 
             var map = L.map('map', {
			center: [47.831595, 16.343847],

                 zoom: 3
             });
             
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                 attribution: '&copy; OpenStreetMap contributors'
             }).addTo(map);
			 
			 
             for (var i = 0; i < fr.length; i++) {
			marker = new L.marker([fr[i][2],fr[i][3]])
				.bindPopup(fr[i][0] + " " + fr[i][1])
				.addTo(map);
		}



         </script>

         <div>
   <h2><a href="listVisitors.php"> back</a></h2>
</div>


     </body>

</html>
