<!DOCTYPE html>
<html>
	<head>
		<title>Show Locations</title>
		<link rel="icon" href="SSS.png" type="image/gif" sizes="16x16">
	</head>
	<body>
	<?php	
		$latitude = $_GET['latitude'];
		$longitude = $_GET['longitude'];
	?>
	<div style="width:800px;max-width:100%;overflow:hidden;height:800px;">
			<div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;">
				<iframe style="height:100%;width:100%;border:0;" frameborder="0" 
				src="https://www.google.com/maps/embed/v1/place?q=<?php echo $latitude;?>,<?php echo $longitude;?>&key=AIzaSyAWSJAYNSvMH3f_65A-xMS2gbGipI90Ehg">
				</iframe>
			</div>
			<a class="embedded-map-code" rel="nofollow" href="http://www.szablonypremium.pl" id="get-data-for-embed-map">szablonypremium.pl</a>
			<style>#embedded-map-display img{max-width:none!important;background:none!important;}</style>
		</div>	
	</body>
</html>