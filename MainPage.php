<!DOCTYPE html>
<html>
	<head>
		<title>Miguel Prego</title>
		<link rel="icon" href="demo_icon.png" type="image/gif" sizes="16x16">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	</head>
	
	<body>
		<div class="container"> 
			<div class="row">
				<h3>Please enter coordinates</h3>
				<form role="form" method="post" action="SecondPage.php">
					<ul style="width: 360px; list-style-type:none"> 
						<li style="width: 340px">
							<div class="form-group has-feedback">
								<label>Longitude:</label>
								<br>
								North <input type="radio" name="Lat1" value="North" checked="checked">
								South <input type="radio" name="Lat1" value="South">
								<br>
								<input class="element text" placeholder="38"   size="3" type="text" name="Lat2" value=""/>
								<input class="element text" placeholder="6608" size="5" type="text" name="Lat3" value=""/>
							</div>
						</li>
						<li style="width: 340px">
							<div class="form-group has-feedback"> 
								<label>Latitude:</label>
								<br>
								East <input type="radio" name="Lon1" value="East">
								West <input type="radio" name="Lon1" value="West" checked="checked">
								<br>
								<input class="element text" placeholder="9"    size="3" type="text" name="Lon2" value=""/>
								<input class="element text" placeholder="2049" size="5" type="text" name="Lon3" value=""/>
							</div>
						</li>
						<input type="submit" class="btn btn-primary" value="Submit">
					</ul>
				</form>
				<form>
					<input type="submit" class="btn btn-primary" value="Casa">
					<input type="submit" class="btn btn-primary" value="FCT">
				</form>
			</div>
		</div>
	
		<!-- <img src="Mapa_FCT.PNG" alt="O Mapa" style="width: 50%; height: 50%"> -->
		
		<br><br><br>
		
		<div style="width:800px;max-width:100%;overflow:hidden;height:800px;">
			<div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;">
				<iframe style="height:100%;width:100%;border:0;" frameborder="0" 
				src="https://www.google.com/maps/embed/v1/place?q=38.6608,-9.2049&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
				</iframe>
			</div>
			<a class="embedded-map-code" rel="nofollow" href="http://www.szablonypremium.pl" id="get-data-for-embed-map">szablonypremium.pl</a>
			<style>#embedded-map-display img{max-width:none!important;background:none!important;}</style>
		</div>
		
	</body>
</html>

