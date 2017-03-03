<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	<link rel="icon" href="SSS.png" type="image/gif" sizes="16x16">
	<title>Mapa Total</title>
	<style>
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
      #map {
      	height: 90%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
      	height: 90%;
      	margin: 1%;
      	padding: 0;
      }
  </style>
</head>

<body>
	<img src="SS.png" style="height:20%;">
	<!--<form>
		<input type="radio" name="colors" value=1 id="um">1<br>
		<input type="radio" name="colors" value=2 id="2">2<br>
	</form>-->
	<script>
		var locations = [];
		var labels = [];	
	</script>
	<?php
	$connect = mysqli_connect('localhost', 'root', '') or die('Não foi possível conectar: ' . mysql_error());
	mysqli_select_db($connect, 'tese') or die('Não foi possível seleccionar o banco da dados');
	/*if (isset($gender) && $gender=="male") {
		$query = 'SELECT FORCA, LATITUDE, LONGITUDE FROM COORDENADAS WHERE FORCA = 1';
	}
	else {*/
		$query = 'SELECT FORCA, LATITUDE, LONGITUDE FROM COORDENADAS';
	//}
	$result = mysqli_query ($connect, $query);
	$number = mysqli_num_rows($result);

	$i=0;
	if(mysqli_num_rows($result)>0)        
	while($rows = mysqli_fetch_array($result)){
	echo '
	<script>
		locations['.$i.']={lat:'.$rows["LATITUDE"].' , lng: '.$rows["LONGITUDE"].'};
		labels['.$i.']="'.$rows["FORCA"].'";
	</script>';
	$i = $i + 1;
}
?>

<div id="map"></div>
<script>

	function initMap() {

		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 10,
			center: {lat: 38.7188, lng: -9.3315}
		});
        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
        	return new google.maps.Marker({
        		position: location,
        		label: labels[i]
        	});
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
        	{imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
    }


</script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWSJAYNSvMH3f_65A-xMS2gbGipI90Ehg&callback=initMap">
</script>
</body>
</html>