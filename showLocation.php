<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
	</head>
	<body>
	<?php	
		$latitude = $_GET['latitude'];
		$longitude = $_GET['longitude'];
	?>
	<div style="width:800px;max-width:100%;overflow:hidden;height:800px;">
			<div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;">
				<iframe style="height:100%;width:100%;border:0;" frameborder="0" 
				src="https://www.google.com/maps/embed/v1/place?q=<?php echo $latitude;?>,<?php echo $longitude;?>&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
				</iframe>
			</div>
			<a class="embedded-map-code" rel="nofollow" href="http://www.szablonypremium.pl" id="get-data-for-embed-map">szablonypremium.pl</a>
			<style>#embedded-map-display img{max-width:none!important;background:none!important;}</style>
		</div>	
	</body>
</html>