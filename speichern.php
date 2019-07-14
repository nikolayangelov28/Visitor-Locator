<html>
<head>
    <title>Gespeicherte Daten: </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php

echo "<h1>Input</h1>";

if (isset($_GET["vorname"])&& isset($_GET["vorname"])
    && isset($_GET["vorname"]) && isset($_GET["vorname"])){
    $vn = $_GET["vorname"];
    $nn = $_GET["nachname"];
	$lat = $_GET["lat"];
    $long = $_GET["long"];

    $output = "$vn;$nn;$lat;$long\n";

    echo "<p> das wird gespeichert: ".$output."</p>";

    $fname = "visitorsList.txt";
    $handle = fopen($fname, "a");
    if ($handle) {
        fputs($handle, $output);
        fclose($handle);
    }
    else
        echo "speicher hat nicht funktioniert";
}
?>

    
<p>
    <a href="InputData.html">more input</a>
</p>
<p>
    <a href="listVisitors.php">See visitors</a>
</p>


</body>
</html>