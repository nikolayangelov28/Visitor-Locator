<html>
<head>
<title>ListMyFriends2</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
        echo "<h1>Datenbank - Alle meine Freunde</h1>";
		echo "<p><a href='onTheMapAll.php'>Gesamtübersicht aller meiner Freunde auf einer Karte</a><br></p>" ;
        $fname = "visitorsList.txt"; 
        $handle = fopen($fname, "r");
        if($handle != FALSE){
            while(!feof($handle)){    //Schleife bis zum Dateiende
                $zeile = fgets($handle);    //liest aktuelle Zeile
                if (strcmp ("", $zeile)!=0){
                    //sicherstelle, dass nicht passiert, 
                    //wenn zeile leer ist. 
                    $arrayOfData = explode (";", $zeile);
                    echo "<p><b>$arrayOfData[0]</b><br>";
                    echo "$arrayOfData[1]<br>";
                    echo "$arrayOfData[2]<br>";
                    echo "$arrayOfData[3]</p>";
					
                    echo "<p><a href='onTheMap.php?vn=".$arrayOfData[0]." & nn=".$arrayOfData[1]." & lat=".$arrayOfData[2]." & long=".$arrayOfData[3]."'>Zeige diesen Freund auf einer Karte</a></p> " ;
					
                }
            }
            fclose($handle);
        } else {
            echo " Beim &Ouml;ffnen der Datei trat ein Fehler auf.";
        }
                
    ?>
    <hr>
    <p>

<a href="inputData.html"> back</a>
</p>
</body>
</html>